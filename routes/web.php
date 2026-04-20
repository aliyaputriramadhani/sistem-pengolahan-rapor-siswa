<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [LoginController::class, 'tampilkan']);
Route::post('/login', [LoginController::class, 'prosesLogin']);

Route::view('/dashboard', 'dashboard');

Route::get('/product', [ProductController::class, 'index']);