<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/index');
});

Route::get('/login', function () {
    return view('pages/login');
});
Route::get ('/dashboard', function () {
    return view('pages/dashboard');
});
Route::get ('/kontak', function () {
    return view('pages/kontak');
});
Route::get ('/registration', function () {
    return view('pages/registration');
});
Route::get('/kuliner', function () {
    return view('pages/kuliner');
});
Route::view('home/',function () {
    return view('pages/home');
});
Route::view('/order',function () {
    return view('pages/home');
});

