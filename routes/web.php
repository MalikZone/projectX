<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register' => false,
    'login' => false
]);

// Route::get('/home', 'HomeController@index')->name('home');
