<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/orders', [OrdersController::class, 'index'])
    ->name('orders.index');
