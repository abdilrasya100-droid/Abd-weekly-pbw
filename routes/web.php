<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/1', function () {
    return view('profile');
});


Route::get('/2', function () {
    return view('news');
});

Route::get('/3', function () {
    return view('kontak');
});