<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
})->name('home');

// Define routes for each role
Route::get('/login/admin', [UserController::class, 'login'])->name('login.admin');
Route::get('/login/employer', [UserController::class, 'login'])->name('login.employer');
Route::get('/login/job-seeker', [UserController::class, 'login'])->name('login.job-seeker');

// Route to display the signup form (GET request)
Route::get('/sign-up', [UserController::class, 'showSignupForm'])->name('register');

// Route to handle signup form submission (POST request)
Route::post('/sign-up', [UserController::class, 'signup'])->name('signup');
