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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/channels', 'ChannelController');
    Route::resource('/channels/{channel}/playlists', 'ChannelPlaylistsController');
    Route::get('/channels/{channel}/upload', 'VideoUploadController@index')->name('upload.index');
});
