<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Livewire\ViewPost;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Livewire\Posts;

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'show'])->name('home');

    Route::get('/profile/{userID}', [UserController::class, 'viewProfile']);

    Route::post('/publish', [PostController::class, 'post']);

    Route::get('/post/{postId}', [PostController::class, 'getPost']);

    Route::get('/fetch-posts', [Posts::class, 'render']);
});

// Auth related routes
// Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::get('/login', [UserController::class, 'showEmailLogin'])->name('auth.login.email');
Route::post('/login', [UserController::class, 'loginWithEmail'])->name('auth.login-email');

Route::get('/signup', [UserController::class, 'showEmailSignUp'])->name('auth.signup.email');

Route::post('/signup', [UserController::class, 'signupWitEmail'])->name('auth.signup-email');

// Route::get('/signup', [UserController::class, 'showRegisterForm'])->name('signup');
// Route::post('/signup', [UserController::class, 'register'])->name('auth.signup');
