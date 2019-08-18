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



//第三方登陆
Route::namespace('Auth') -> prefix('auth/qq') -> group(function() {
    Route::get( '/', 'SocialitesController@qq')->name('qq');
    Route::get('callback', 'SocialitesController@callback');
});


