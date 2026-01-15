<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('profile', ProfileController::class);
Route::resource('users', UserController::class); 
