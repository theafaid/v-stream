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

Route::get('/videos/{video}', 'VideoController@index')->name('video.index');
Route::get('/videos/{video}/votes', 'VideoVotesController@show')->name('video.votes.show');
Route::get('/videos/{video}/votes', 'VideoVotesController@store')->name('video.votes.store');
Route::delete('/videos/{video}/votes', 'VideoVotesController@destroy')->name('video.votes.destroy');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/channels', 'ChannelController');
    Route::resource('/channels/{channel}/playlists', 'ChannelPlaylistsController');
    Route::get('/channels/{channel}/upload', 'VideoUploadController@index')->name('upload.index');
    Route::post('/channels/{channel}/upload', 'VideoUploadController@store')->name('upload.store');
    Route::post('/channels/{channel}/playlists/{playlist}/upload', 'VideoUploadController@store')->name('upload.store');


    Route::resource('/channels/{channel}/playlists/{playlist}/videos', 'VideoController');
});
