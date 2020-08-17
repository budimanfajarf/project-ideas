<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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
        // 'Authorization' => "token {$token}",
    // ])
    // ->get("{$baseUrl}/rate_limit");

    // repo info
    // ->get("{$baseUrl}/repos/florinpop17/app-ideas");    

    $owner = 'budimanfajarf';
    $repo = 'app-ideas';
    $path = 'Projects';
    // $path = 'Projects/1-Beginner';    

    // path info
    $response = Http::withHeaders([
        'Authorization' => "token {$token}",
    ])
    ->get("{$baseUrl}/repos/{$owner}/{$repo}/contents/${path}");            

    return response()->json($response->json());
});

Route::get('/', function () {
    return view('welcome');
});
