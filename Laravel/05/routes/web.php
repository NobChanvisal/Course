<?php

use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/login', function () {
    return view('login');
})->name('login');  

Route::get('/register', function () {
    return view('register');
})->name('register');