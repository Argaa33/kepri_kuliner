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
Route::get ('/registration', function () {
    return view('pages/registration');
});