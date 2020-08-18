<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

class TestGithubApiController extends Controller
{
    public function limit()
    {
        $baseUrl = 'https://api.github.com';
        $token = env('GITHUB_TOKEN');        
        $response = Http::withHeaders([
            'Authorization' => "token {$token}",
        ])
        ->get("{$baseUrl}/rate_limit");   
        
        return response($response->json());
    }

    public function test() 
    {
        $baseUrl = 'https://api.github.com';
        $token = env('GITHUB_TOKEN');
        $owner = 'florinpop17';
        $repo = 'app-ideas';

        $responseProjects = Http::withHeaders([
            'Authorization' => "token {$token}",
        ])
        ->get("{$baseUrl}/repos/{$owner}/{$repo}/contents/Projects");  

        if ($responseProjects->failed()) {
            dd($responseProjects->failed());
        }        

        $newIdeas = collect([]);
        Log::info('message');

        foreach ($responseProjects->json() as $tier) {
            $newTierName = $tier['name'];

            $responseIdeas = Http::withHeaders([
                'Authorization' => "token {$token}",
            ])
            ->get($tier['_links']['self']);

            if ($responseIdeas->failed()) {
                dd($responseIdeas->failed());
            }

            foreach ($responseIdeas->json() as $idea) {
                $newGithubRawUrl = $idea['download_url'];

                $responseMarkdown = Http::withHeaders([
                    'Authorization' => "token {$token}",
                ])
                ->get($idea['download_url']); 
                
                if ($responseMarkdown->failed()) {
                    dd($responseMarkdown->failed());
                }                

                $newTitle = $newDescriptionSort = $newDescriptionMarkdown = '';
                $newGithubMarkdown = $newGithubJson = '';

                // Get Github Markdown
                $newGithubMarkdown = $responseMarkdown->body();                

                // Get Title
                $newTitle = Str::between($responseMarkdown->body(), '#', '**Tier');
                $newTitle = (string) Str::of($newTitle)->trim();

                // Get Markdown Description
                $newDescriptionMarkdown = Str::after($responseMarkdown->body(), $newTierName);                              
                $newDescriptionMarkdown = (string) Str::of($newDescriptionMarkdown)->trim();

                // Get Sort Description
                // $newDescriptionSort = Str::between($responseMarkdown->body(), $newTierName, '**Tier:**');
                // $newDescriptionSort = (string) Str::of($newDescriptionSort)->trim();                

                $newIdeas->push([
                    'name' => $newTitle,
                    'tier' => $newTierName,
                    'tags' => ['javascript'],
                    'description_sort' => $newDescriptionSort,
                    'description_markdown' => $newDescriptionMarkdown,
                    'github_markdown' => $newGithubMarkdown,
                    'github_raw_url' => $newGithubRawUrl,
                    'github_json' => $newGithubJson
                ]);    
            }            
        }

        return response()->json($newIdeas);
    }
}
