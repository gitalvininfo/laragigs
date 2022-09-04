<?php

use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti eos similique, dolorem aliquam exercitationem ea.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti eos similique, dolorem aliquam exercitationem ea.'
            ],
        ]
    ]);
});

Route::get('/hello', function () {
    return response('Hello Nigga', 200)
    ->header('Content-Type', 'text/plain');
});

Route::get('posts/{id}', function ($id) {
    return response('Post ' . $id);
})->where('id', '[0-9]+');

Route::get('search', function(Request $request) {
    return ($request->name . ' ' . $request->city);
});