<?php

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
    return view('master');
});

Route::get('/logout', function () {
    Auth::logout();
    return view('master');
});
Route::get('/get-favorited-comics', 'HomeController@getFavoritedComics');
Route::get('/favorites', 'HomeController@viewFavorites');

Route::get('/comicdetails/{id}', 'HomeController@comicDetails');

Auth::routes();

Route::get('/home', 'HomeController@comics')->name('home');
Route::post('/get_details', 'HomeController@getComics');
Route::post('/save-favorite', 'HomeController@saveFavorite');
