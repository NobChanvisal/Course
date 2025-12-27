<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');
Route::controller(CategoriesController::class)->group(function () {
    Route::get('/categories', 'index')->name('categories.index');
    Route::get('/categories/create', 'create')->name('categories.create');
    Route::post('/categories', 'store')->name('categories.store');
    Route::get('/categories/{categories}/edit', 'edit')->name('categories.edit');
    Route::put('/categories/{categories}', 'update')->name('categories.update');
    Route::delete('/categories/{categories}', 'destroy')->name('categories.destroy');
});

Route::resource('products', ProductsController::class);