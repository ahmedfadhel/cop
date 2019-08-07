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
Route::prefix('admin')->group(function () {

    Route::get('/','DashboardController@index')->name('dashboard');
    Route::resource('/videos','VideoController');
    Route::resource('/stars','StarController');
    Route::resource('/tags','TagController');
    Route::resource('/category','CategoryController');
    Route::resource('/album','AlbumController');
    Route::Get('/stats','StatsController@index')->name('stats');
    Route::Get('/sitemap/generate','SitemapController@generate')->name('sitemap-generation');
    Auth::routes();
});
Route::get('/videos/{slug}','VideoController@display')->name('displayvideo');
Route::get('/albums/{slug}','AlbumController@displayalbum')->name('displayalbum');
Route::get('/{any}', 'SpaController@index')->where('any', '^(?!admin).*$');
