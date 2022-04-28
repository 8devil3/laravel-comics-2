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


Route::get('/characters', function () {
   return view('characters');
})->name('characters');


Route::get('/', function () {
   $comicsThumbs = config('comicsThumbs');

   $data1 = ['comicsThumbs' => $comicsThumbs];

   return view('frontoffice.comics', $data1);
})->name('comics');


Route::get('/movies', function () {
   return view('movies');
})->name('movies');


Route::get('/games', function () {
   return view('games');
})->name('games');


Route::get('/collectibles', function () {
   return view('collectibles');
})->name('collectibles');


Route::get('/videos', function () {
   return view('videos');
})->name('videos');


Route::get('/fans', function () {
   return view('fans');
})->name('fans');


Route::get('/news', function () {
   return view('news');
})->name('news');


Route::get('/shop', function () {
   return view('shop');
})->name('shop');
