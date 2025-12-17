<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('a');
})->name('a');

Route::get('/b', function () {
    $products = [
        [
            'image' => 'https://i.pinimg.com/1200x/b5/23/32/b5233214b06008444dfbeec016d6d615.jpg',
            'title' => 'Product 1',
            'description' => 'Description for product 1',
            'price' => 2.50,
            'newPrice' => 1.99,
        ],
        [
            'image' => 'https://i.pinimg.com/1200x/ab/ba/06/abba06d8e6be49d6fb045d275eb5bb2b.jpg',
            'title' => 'Product 2',
            'description' => 'Description for product 2',
            'price' => 3.00,
        ],
        [
            'image' => 'https://i.pinimg.com/1200x/fc/5b/c1/fc5bc188b863bffe10bae078775c0157.jpg',
            'title' => 'Product 3',
            'description' => 'Description for product 3',
            'price' => 4.99,
            'newPrice' => 3.50,
        ],
    ];
    return view('b', compact('products'));
})->name('b');