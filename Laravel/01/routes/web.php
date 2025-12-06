<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Welcome to laravel 01 !';
    // return view('welcome');
});

Route::get('/about', function () {
    return 'This is the about page of laravel 01 project.';
});

Route::get('/contact', function() {
    return '<h1>Contact Us</h1><p>Email: contact@example.com</p>';
});

//route with parameter
Route::get('/hello/{name}', function ($name){
    return "Hello, " . $name . "Welcome to our site.";
});

//route with optional parameter
Route::get('/product/{name?}', function ($name = 'No prouct selected') {
    return "Products :  " . $name;
});

//Route Grouping
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });
    Route::get('/invoice', function () {
        return 'Welcome to invoice page';
    });
});

Route::prefix('shop')->group(function(){
    Route::get('/products', function(){
        return 'List of Products';
    });
    Route::get('/cart', function(){
        return 'Your Shopping Cart';
    });
    Route::get('/checkout', function(){
        return 'Checkout Page';
    });
});

//Named Route
Route::get('/signout', function () {
    return 'Welcome to the signout!';
})->name('/signout');
// Route::redirect('/go-dashboard-2', route('dashboard-2'));

Route::get('/profile-100', function () {
    return 'This is the User Profile page.';
})->name('profile');

// Route::redirect('/my-profile', route('profile'));

//redirect route



