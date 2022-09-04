<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
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

// All Listing
Route::get('/', [ListingController::class, 'index']);

// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);























Route::get('/hello', function () {
    return response('Hello Nigga', 200)
        ->header('Content-Type', 'text/plain');
});

Route::get('posts/{id}', function ($id) {
    return response('Post ' . $id);
})->where('id', '[0-9]+');

Route::get('search', function (Request $request) {
    return ($request->name . ' ' . $request->city);
});
