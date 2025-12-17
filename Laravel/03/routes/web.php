<?php

use Illuminate\Support\Facades\Route;

Route::get('/a', function () {
    
    $name = 'John Doe';
    $age = 30;
    $gender = 'male';
    //using-associative-array
    return view('welcome', ['name' => $name, 'age' => $age, 'gender' => $gender] );
});

Route::get('/b', function () {
    $name = 'Jane Smith';
    $age = 25;
    $gender = 'female'; 

    //usingcompact
    return view('welcome2', compact('name', 'age', 'gender') );
});

Route::get('/c',function(){
    //using-compact-with-array
    $list = ['Laravel', 'Django', 'Spring Boot', 'Express.js', 'Ruby on Rails'];
    return view('welcome3', compact('list'));
});

Route::get('/d',function(){
    //using-compact with array of objects
    $products = [
        ['id' => 1, 'name' => 'Laptop', 'price' => 1000, 'image'=>'https://i.pinimg.com/1200x/30/88/d3/3088d3d597da816fe9862cd40cbaf1ce.jpg'],
        ['id' => 2, 'name' => 'Smartphone', 'price' => 700, 'image'=>'https://i.pinimg.com/1200x/f8/76/70/f87670fed5eea6b142754879932632db.jpg'],
        ['id' => 3, 'name' => 'Tablet', 'price' => 400,'image'=>'https://i.pinimg.com/736x/9e/11/1b/9e111b906c8b511c2006b9913d53bd0a.jpg'],
        ['id' => 4, 'name' => 'Smartwatch', 'price' => 200,'image'=>'https://i.pinimg.com/1200x/70/a3/ec/70a3ecf46f31b616e412be8ef30ea7b1.jpg'],
    ];
    return view('welcome4', compact('products'));
});

Route::get('/e/{searchid}',function($searchid){
    //parameterized route
    //using-compact with array of objects
    $products = [
        ['id' => 1, 'name' => 'Laptop', 'price' => 1000, 'image'=>'https://i.pinimg.com/1200x/30/88/d3/3088d3d597da816fe9862cd40cbaf1ce.jpg'],
        ['id' => 2, 'name' => 'Smartphone', 'price' => 700, 'image'=>'https://i.pinimg.com/1200x/f8/76/70/f87670fed5eea6b142754879932632db.jpg'],
        ['id' => 3, 'name' => 'Tablet', 'price' => 400,'image'=>'https://i.pinimg.com/736x/9e/11/1b/9e111b906c8b511c2006b9913d53bd0a.jpg'],
        ['id' => 4, 'name' => 'Smartwatch', 'price' => 200,'image'=>'https://i.pinimg.com/1200x/70/a3/ec/70a3ecf46f31b616e412be8ef30ea7b1.jpg'],
    ];
    //returning view with product id
    return view('welcome5', compact('products','searchid'));
});
