<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test-github-api', function () {
    $baseUrl = 'https://api.github.com';
    $token = env('GITHUB_TOKEN');

    // dd($token);

    // $response = Http::withHeaders([
    //     'Authorization' => "token {$token}",
    // ])
    // ->get("{$baseUrl}/rate_limit");

    // repo info
    // ->get("{$baseUrl}/repos/florinpop17/app-ideas");    

    // branch url to get latest commit;
    // ->get("{$baseUrl}/repos/florinpop17/app-ideas/branches/master");    

    // $owner = 'budimanfajarf';
    // $repo = 'app-ideas';
    // // $path = 'Projects';
    // $path = 'Projects/1-Beginner';    

    // // path info
    // $response = Http::withHeaders([
    //     'Authorization' => "token {$token}",
    // ])
    // ->get("{$baseUrl}/repos/{$owner}/{$repo}/contents/${path}");            

    // return response()->json($response->json());


    // $response = Http::withHeaders([
    //     'Authorization' => "token {$token}",
    // ])
    // ->get('https://raw.githubusercontent.com/budimanfajarf/app-ideas/master/Projects/1-Beginner/Bin2Dec-App.md');            

    // dd($response->body());

    // // Get Title
    // $title = Str::between($response->body(), '#', '**Tier:**');
    // $title = Str::of($title)->trim();

    // // dd($title);
    // // var_dump($title);
    // // return $title;


    // // Store Original
    // Storage::put('Bin2Dec-App2.md', $response->body());    

    // // Store Only Description
    // $description = Str::after($response->body(), '1-Beginner');
    // $description = Str::of($description)->trim();

    // Storage::put('Bin2Dec-App2_Description.md', $description);    

    // dd($description);

    // $collection = collect([
    //     [
    //         "name" => "beginner"
    //     ],
    //     [
    //         "name" => "intermediate"
    //     ],
    // ]);
    // // dd($collection);

    // foreach ($collection as $jk) {
    //     echo $jk->name;
    // }

    // $owner = 'florinpop17';
    // $repo = 'app-ideas';
    // $path = 'Projects';

    // $response = Http::withHeaders([
    //     'Authorization' => "token {$token}",
    // ])
    // ->get("{$baseUrl}/repos/{$owner}/{$repo}/contents/${path}");               

    // $response = $response->json();
    // $response = collect($response);

    // dd($response);

    // foreach ($response as $project) {
    //     var_dump($project);
    //     echo '<br />';
    // }
    
    // var_dump($response);

    // foreach ($response as $key => $value) {
    //     var_dump($key);
    //     var_dump($key);        
    // }

    // $response = $response->body();
    // // dd($response);
    // $array = json_decode($response, true);

    // $collection = collect($array);

    // // dd($collection);

    // foreach ($collection as $thec) {
    //     echo $thec->name;
    // }

//     $response = $response->json();
//     $response = collect($response);
//     $response = $response->toJson();
// // convert json to array
// $array = json_decode($response, true);
// //  create a new collection instance from the array
// $response = collect($array);

//     dd($response);

    $owner = 'florinpop17';
    $repo = 'app-ideas';
    $path = 'Projects';

    $response = Http::withHeaders([
        'Authorization' => "token {$token}",
    ])
    ->get("{$baseUrl}/repos/{$owner}/{$repo}/contents/${path}");

    $response = $response->json();

    foreach ($response as $key => $value) {
        echo $value['name'];
    }

});

Route::get('/', function () {
    return view('welcome');
});
