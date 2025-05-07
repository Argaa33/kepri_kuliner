<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/index');
});
Route::get('/index', function () {
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
Route::get('/order',function () {
    return view('pages/order');
});
Route::get('/halaman',function () {
    return view('pages/halaman');
});
Route::get('/menu',function () {
    return view('pages/menu');
});
Route::get('/change_pass',function () {
    return view('pages/change_pass');
});
Route::get('/keranjang',function () {
    return view('pages/keranjang');
});
Route::get('/rating',function () {
    return view('pages/rating');
});