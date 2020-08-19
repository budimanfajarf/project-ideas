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

    public function other()
    {
        $lowerCaseContent = Str::lower('react native');

        $test = Str::contains($lowerCaseContent, ['react native']);

        dd($test);
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
                $newTags = [];

                // Get Github Markdown
                $newGithubMarkdown = $responseMarkdown->body();                

                // Get Title
                $newTitle = Str::between($responseMarkdown->body(), '#', '**Tier');
                $newTitle = (string) Str::of($newTitle)->trim();

                // Get Slug
                $newSlug = Str::of($idea['name'])->before('.md');
                $newSlug = Str::slug($newSlug, '-');

                // Get Markdown Description
                $newDescriptionMarkdown = Str::after($responseMarkdown->body(), $newTierName);                              
                $newDescriptionMarkdown = (string) Str::of($newDescriptionMarkdown)->trim();

                // Get Sort Description
                $newDescriptionSort = Str::between($responseMarkdown->body(), $newTierName, '## User Stories');
                $newDescriptionSort = Str::of($newDescriptionSort)->trim();
                $newDescriptionSort = Str::of($newDescriptionSort)->replace("\n", ' ');                
                $newDescriptionSort = Str::substr($newDescriptionSort, 0, 255);
                                
                // Get Tags
                $lowerCaseContent = Str::lower($responseMarkdown->body());
                
                $arrWeb = ['web'];
                $arrAndroid = ['android', 'flutter', 'kotlin', 'react native'];
                $arrDatabase = ['database', 'db', 'sql']; 
                $arrMysql = ['mysql'];
                // $arrGit = ['github', 'gitlab', 'bitbucket'];
                $arrHtml = ['html'];
                $arrCss = ['css', 'stylesheet'];
                $arrBootstrap = ['bootstrap'];        
                $arrJavaScript = ['javascript', 'js'];
                $arrNodeJs = ['nodejs', 'node.js'];
                $arrVueJs = ['vue'];
                $arrReact = ['react'];
                $arrAngular = ['angular'];
                $arrPhp = ['php'];
                $arrLaravel = ['laravel'];
                $arrCodeIgniter = ['igniter'];
                $arrPython = ['python', 'phyton'];
                $arrDjango = ['django'];
                $arrFlask = ['flask'];
                $arrRuby = ['ruby'];
                $arrRails = ['rails'];
        
                $web = Str::contains($lowerCaseContent, array_merge($arrWeb, $arrHtml, $arrCss, $arrBootstrap, $arrPhp, $arrLaravel, $arrCodeIgniter, $arrDjango, $arrFlask, $arrVueJs, $arrNodeJs, $arrAngular, $arrRails));
                $android = Str::contains($lowerCaseContent, $arrAndroid);
                $database = Str::contains($lowerCaseContent, array_merge($arrDatabase, $arrMysql));
                $mysql = Str::contains($lowerCaseContent, $arrMysql);
                // $git = Str::contains($lowerCaseContent, $arrGit);   
                $html = Str::contains($lowerCaseContent, $arrHtml);        
                $css = Str::contains($lowerCaseContent, array_merge($arrCss, $arrBootstrap));                
                $bootstrap = Str::contains($lowerCaseContent, $arrBootstrap);
                $javaScript = Str::contains($lowerCaseContent, array_merge($arrJavaScript, $arrNodeJs, $arrVueJs, $arrReact));
                $nodeJs = Str::contains($lowerCaseContent, $arrNodeJs);  
                $vueJs = Str::contains($lowerCaseContent, $arrVueJs);
                $react = Str::contains($lowerCaseContent, $arrReact);
                $angular = Str::contains($lowerCaseContent, $arrAngular);        
                $php = Str::contains($lowerCaseContent, array_merge($arrPhp, $arrLaravel, $arrCodeIgniter));
                $laravel = Str::contains($lowerCaseContent, $arrLaravel);
                $codeIgniter = Str::contains($lowerCaseContent, $arrCodeIgniter);        
                $python = Str::contains($lowerCaseContent, array_merge($arrPython, $arrDjango, $arrFlask));
                $django = Str::contains($lowerCaseContent, $arrDjango);
                $flask = Str::contains($lowerCaseContent, $arrFlask);                
                $ruby = Str::contains($lowerCaseContent, array_merge($arrRuby, $arrRails));                 

                $web ? array_push($newTags, 'Web') : '';
                $android ? array_push($newTags, 'Android') : '';
                $database ? array_push($newTags, 'Database') : '';
                $mysql ? array_push($newTags, 'MySQL') : '';
                // $git ? array_push($newTags, 'Git') : '';
                $html ? array_push($newTags, 'HTML') : '';
                $css ? array_push($newTags, 'CSS') : '';                
                $bootstrap ? array_push($newTags, 'Bootstrap') : '';                
                $javaScript ? array_push($newTags, 'JavaScript') : '';
                $nodeJs ? array_push($newTags, 'NodeJs') : '';
                $vueJs ? array_push($newTags, 'VueJs') : '';
                $react ? array_push($newTags, 'React') : '';
                $angular ? array_push($newTags, 'Angular') : '';
                $php ? array_push($newTags, 'PHP') : '';
                $laravel ? array_push($newTags, 'Laravel') : '';
                $codeIgniter ? array_push($newTags, 'CodeIgniter') : '';
                $python ? array_push($newTags, 'Python') : '';
                $django ? array_push($newTags, 'Django') : '';
                $flask ? array_push($newTags, 'Flask') : '';
                $ruby ? array_push($newTags, 'Ruby') : '';

                $newIdeas->push([
                    'title' => $newTitle,
                    'slug' => $newSlug,
                    'tier' => $newTierName,
                    'tags' => $newTags,
                    'description_sort' => $newDescriptionSort,
                    'description_md' => $newDescriptionMarkdown,
                    'content_md' => $newGithubMarkdown,
                    'github_md_url' => $newGithubRawUrl,
                    // 'github_json' => json_encode($idea)
                    'github_json' => $idea
                ]);    
            }            
        }

        return response()->json($newIdeas);
    }
}
