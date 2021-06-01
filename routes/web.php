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

Route::get('/', "AlbumController@index");

Route::resource('album', 'AlbumController');
Route::resource('photo', 'PhotoController');
Route::get('/photo/create/{id}', 'PhotoController@create')->name('create');