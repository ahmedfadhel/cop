<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('new','VideoController@videos')->name('videos');
Route::get('best','VideoController@best')->name('bests');
Route::get('getvideo/{slug}','VideoController@getvideo')->name('getvideo');
Route::get('getrelated/{tag}','VideoController@getrelated')->name('getrelated');
Route::get('alltags','TagController@alltags')->name('getalltags');
Route::get('tagvideos/{name}','TagController@tagvideos')->name('tagvideos');
Route::get('allcats','CategoryController@allcats')->name('getallcats');
Route::get('catvideos/{name}','CategoryController@catvideos')->name('catvideos');
Route::get('allstars','StarController@allstars')->name('getallstars');
Route::get('starvideos/{name}','StarController@starvideos')->name('starvideos');
Route::get('allalbums','AlbumController@allalbums')->name('getallalbums');
Route::get('related/{type}','AlbumController@related')->name('relatedalbum');
