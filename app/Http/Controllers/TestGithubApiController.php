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
        // $lowerCaseContent = Str::lower('react native');

        // $test = Str::contains($lowerCaseContent, ['react native']);

        // dd($test);
        // return (string) Str::orderedUuid();

        $str = "IyBCaW4yRGVjCgoqKlRpZXI6KiogMS1CZWdpbm5lcgoKQmluYXJ5IGlzIHRo\nZSBudW1iZXIgc3lzdGVtIGFsbCBkaWdpdGFsIGNvbXB1dGVycyBhcmUgYmFz\nZWQgb24uClRoZXJlZm9yZSBpdCdzIGltcG9ydGFudCBmb3IgZGV2ZWxvcGVy\ncyB0byB1bmRlcnN0YW5kIGJpbmFyeSwgb3IgYmFzZSAyLAptYXRoZW1hdGlj\ncy4gVGhlIHB1cnBvc2Ugb2YgQmluMkRlYyBpcyB0byBwcm92aWRlIHByYWN0\naWNlIGFuZAp1bmRlcnN0YW5kaW5nIG9mIGhvdyBiaW5hcnkgY2FsY3VsYXRp\nb25zLgoKQmluMkRlYyBhbGxvd3MgdGhlIHVzZXIgdG8gZW50ZXIgc3RyaW5n\ncyBvZiB1cCB0byA4IGJpbmFyeSBkaWdpdHMsIDAncwphbmQgMSdzLCBpbiBh\nbnkgc2VxdWVuY2UgYW5kIHRoZW4gZGlzcGxheXMgaXRzIGRlY2ltYWwgZXF1\naXZhbGVudC4KClRoaXMgY2hhbGxlbmdlIHJlcXVpcmVzIHRoYXQgdGhlIGRl\ndmVsb3BlciBpbXBsZW1lbnRpbmcgaXQgZm9sbG93IHRoZXNlCmNvbnN0cmFp\nbnRzOgoKLSAgIEFycmF5cyBtYXkgbm90IGJlIHVzZWQgdG8gY29udGFpbiB0\naGUgYmluYXJ5IGRpZ2l0cyBlbnRlcmVkIGJ5IHRoZSB1c2VyCi0gICBEZXRl\ncm1pbmluZyB0aGUgZGVjaW1hbCBlcXVpdmFsZW50IG9mIGEgcGFydGljdWxh\nciBiaW5hcnkgZGlnaXQgaW4gdGhlCiAgICBzZXF1ZW5jZSBtdXN0IGJlIGNh\nbGN1bGF0ZWQgdXNpbmcgYSBzaW5nbGUgbWF0aGVtYXRpY2FsIGZ1bmN0aW9u\nLCBmb3IKICAgIGV4YW1wbGUgdGhlIG5hdHVyYWwgbG9nYXJpdGhtLiBJdCdz\nIHVwIHRvIHlvdSB0byBmaWd1cmUgb3V0IHdoaWNoIGZ1bmN0aW9uCiAgICB0\nbyB1c2UuCgojIyBVc2VyIFN0b3JpZXMKCi0gICBbIF0gVXNlciBjYW4gZW50\nZXIgdXAgdG8gOCBiaW5hcnkgZGlnaXRzIGluIG9uZSBpbnB1dCBmaWVsZAot\nICAgWyBdIFVzZXIgbXVzdCBiZSBub3RpZmllZCBpZiBhbnl0aGluZyBvdGhl\nciB0aGFuIGEgMCBvciAxIHdhcyBlbnRlcmVkCi0gICBbIF0gVXNlciB2aWV3\ncyB0aGUgcmVzdWx0cyBpbiBhIHNpbmdsZSBvdXRwdXQgZmllbGQgY29udGFp\nbmluZyB0aGUgZGVjaW1hbCAoYmFzZSAxMCkgZXF1aXZhbGVudCBvZiB0aGUg\nYmluYXJ5IG51bWJlciB0aGF0IHdhcyBlbnRlcmVkCgojIyBCb251cyBmZWF0\ndXJlcwoKLSAgIFsgXSBVc2VyIGNhbiBlbnRlciBhIHZhcmlhYmxlIG51bWJl\nciBvZiBiaW5hcnkgZGlnaXRzCgojIyBVc2VmdWwgbGlua3MgYW5kIHJlc291\ncmNlcwoKW0JpbmFyeSBudW1iZXIgc3lzdGVtXShodHRwczovL2VuLndpa2lw\nZWRpYS5vcmcvd2lraS9CaW5hcnlfbnVtYmVyKQoKIyMgRXhhbXBsZSBwcm9q\nZWN0cwoKVHJ5IG5vdCB0byB2aWV3IHRoaXMgdW50aWwgeW91J3ZlIGRldmVs\nb3BlZCB5b3VyIG93biBzb2x1dGlvbjoKCi0gICBbQmluYXJ5IHRvIGRlY2lt\nYWwgY29udmVyc2lvbiBwcm9ncmFtIGZvciBiZWdpbm5lcnNdKGh0dHBzOi8v\nd3d3LnlvdXR1YmUuY29tL3dhdGNoP3Y9WU1JQUxRRTI2S1EpCi0gICBbQmlu\nYXJ5IHRvIERlY2ltYWwgY29udmVydGVyIHVzaW5nIFJlYWN0XShodHRwczov\nL2dpdGh1Yi5jb20vZW1haWwydmltYWxyYWovQmluMkRlYykKLSAgIFtCaW5h\ncnkgdG8gRGVjaW1hbCBjb252ZXJ0ZXIgd2l0aCBwbGFpbiBodG1sLCBqcyBh\nbmQgY3NzXShodHRwczovL2dyZnJlaXJlLmdpdGh1Yi5pby9CaW4yRGVjLykK\nLSAgIFtCaW5hcnkgdG8gRGVjaW1hbCBjb252ZXJ0ZXIgdXNpbmcgRmx1dHRl\nciAmIERhcnRdKGh0dHBzOi8vZ2l0aHViLmNvbS9pc3JhZWxzcy9BcHBJZGVh\nc0NvbGxlY3Rpb24vdHJlZS9tYXN0ZXIvVGllcjEvQmluMkRlYykKICAgIC0g\nICBbTGl2ZSBwcmV2aWV3IGJ1aWx0IHdpdGggRmx1dHRlciBmb3IgV2ViXSho\ndHRwczovL2JpbjJkZWMud2ViLmFwcC8jLykKLSAgIFtCaW5hcnkgdG8gRGVj\naW1hbCBjb252ZXJ0ZXIgdXNpbmcgUmVhY3RdKGh0dHBzOi8vZ2l0aHViLmNv\nbS9nZW9mZmN0bi9CaW4yRGVjKQotICAgW01hdHJpeC1saWtlIEJpbmFyeSB0\nbyBEZWNpbWFsIGNvbnZlcnRlciB1c2luZyBBbmd1bGFyXShodHRwczovL2dp\ndGh1Yi5jb20vWmFuZ2llZldpbnMvTWF0cml4QmluMkRlYykKICAgIC0gICBb\nTGl2ZSBwcmV2aWV3IG9uIGhlcm9rdV0oaHR0cHM6Ly9tYXRyaXgtYmluMmRl\nYy5oZXJva3VhcHAuY29tLykK\n";

        dd(base64_decode($str));
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
