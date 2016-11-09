<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/help/help', function () {
    return view('help.help');
});
Route::get('/help/postexample', function () {
    return view('help.postexample');
});

Route::get('/web/index',function (){
    return view('web.index');
});

Route::resource('items','ItemController');
Route::resource('cars','CarController');
Route::resource('matches','MatchController');

