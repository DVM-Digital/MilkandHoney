<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::post('/contact-form', 'App\Http\Controllers\ContactController@GetinTouch');