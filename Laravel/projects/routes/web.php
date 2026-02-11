<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductsController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\CheckoutController;




// Frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop/{category_slug?}', [ProductsController::class, 'index'])
    ->name('shop');
Route::get('/shop/{category_slug}/{pro_slug}', [ProductsController::class, 'show'])
    ->name('product.show');
Route::view('/about', 'frontend.about')->name('about');

Route::middleware(['auth', 'is_user'])->group(function () {
    Route::get('/cart/{user_id}', [CartController::class, 'index'])->name('cart');
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::delete('/cart/remove/{cart_item_id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::get('/checkout', [CheckoutController::class, 'index']);
});


/*
|--------------------------------------------------------------------------
| Profile Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
