<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::prefix('shop')->group(function(){
    Route::get('/', function(){
        return view('shop.index');
    })->name('shop');
    Route::get('/men', function(){
        return view('shop.men');
    })->name('shop.men');
    Route::get('/women', function(){
        return view('shop.women');
    })->name('shop.women');
});