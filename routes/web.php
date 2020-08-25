<?php

use Illuminate\Support\Facades\Route;

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

// App::bind('App\API\Github', function() {
//     return new App\API\Github(config('services.github.token'));
// });

App::singleton('App\API\Github', function() {
    return new App\API\Github(config('services.github.token'));
});

// $github = App::make('App\API\Github');
// $github = app('App\API\Github');
// $github = resolve('App\API\Github');

dd($github);

Route::get('/test-github-api', 'TestGithubApiController@test');
Route::get('/limit-github-api', 'TestGithubApiController@limit');
Route::get('/test-other', 'TestGithubApiController@other');

Route::get('/', function () {
    return view('welcome');
});
