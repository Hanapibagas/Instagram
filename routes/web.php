<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('@{username}', 'UserController@show');

Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('user/edit', 'UserController@edit');
    Route::put('user/edit', 'UserController@update');
    Route::resource('post', PostController::class);
});
