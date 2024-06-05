<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/services', function () {
    return view('/services');
});