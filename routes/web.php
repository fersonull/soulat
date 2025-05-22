<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

// Auth related routes
Route::get('/login', [UserController::class, 'loginForm'])->name('auth.login');
Route::get('/register', [UserController::class, 'registerForm'])->name('auth.register');