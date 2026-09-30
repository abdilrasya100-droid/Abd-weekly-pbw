<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/profile', function () {
    return view('profile',[
        "title" => "Profile",
        "name" => "Muhammad Fadhlan",
        "nim" => "123456789",
        "prodi" => "Teknologi Pertanian",
        "gambar" => "picture.jpg",
    ]);
});


Route::get('/news', function () {
    return view('news', [
        "title" => "News",
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Kontak",
    ]);
});