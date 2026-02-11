<?php
use Illuminate\Support\Facades\Route;

// Admin Routes
Route::middleware(['auth', 'is_admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::resource('categories', App\Http\Controllers\Admin\CategoriesController::class);
        Route::resource('products', App\Http\Controllers\Admin\ProductsController::class)->names('products');
    });
