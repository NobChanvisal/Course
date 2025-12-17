<?php

use App\Http\Controllers\FirstController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(FirstController::class)->group(function () {
    Route::get('/first', 'index');
    Route::get('/about', 'about');
    Route::get('/contact/{phone}', 'contact');
});

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');