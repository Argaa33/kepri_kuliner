<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});
Route::get ('/dashboard', function () {
    return view('dashboard');
});
Route::get('/tentang-kami', [App\Http\Controllers\HalamanController::class, 'tentangKami']);
Route::get('/order/{orderId}', [OrderController::class, 'show']);
