<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route::get('/create-post', function () {
    return view('create-post');
});


// Auth related routes
Route::get('/login', [UserController::class, 'loginForm'])->name('auth.login');
Route::get('/signup', [UserController::class, 'registerForm'])->name('auth.register');