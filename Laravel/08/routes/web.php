<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::controller(CategoriesController::class)->group(function () {
    Route::get('/categories','index')->name('categories.index');
    Route::get('/categories/create', 'create')->name('categories.create');
    Route::post('/categories','store')->name('categories.store');
    Route::get('/categories/{categories_id}/edit', 'edit')->name('categories.edit');
    Route::put('/categories/{categories_id}', 'update')->name('categories.update');
    Route::delete('/categories/{categories_id}', 'destroy')->name('categories.destroy');
});

Route::resource('products', ProductsController::class);