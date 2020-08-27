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

Route::get('/test', function() {
    // $ideas = \App\Idea::with(['ideaable', 'tier', 'tags'])->get();

    // dd($ideas[0]['ideaable_type']);

    $ideas = \App\Idea::with(['tags' => function ($query) {
        $query->select(['name']);
    }])
    ->select(['id', 'name', 'short_description'])
    ->get();

    // dd($ideas);

    return response()->json($ideas);
});

Route::get('/', function () {
    return view('welcome');
});
