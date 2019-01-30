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

Route::get('/', 'QrController@index');
Route::get('/words', 'QrController@words');
Route::get('/tweet', 'QrController@tweet');
Route::get('/words-url', 'QrController@words_url');
