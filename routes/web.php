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
<<<<<<< HEAD
Route::get ('/kontak', function () {
    return view('pages/kontak');
=======
Route::get ('/registration', function () {
    return view('pages/registration');
>>>>>>> 407459235e5b2a2ef2555b0d0ee6bed4628ce2ec
});