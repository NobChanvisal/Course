<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    private static $products = [
        ['id' => 1, 'name' => 'Product 1', 'price' => 100],
        ['id' => 2, 'name' => 'Product 2', 'price' => 200],
        ['id' => 3, 'name' => 'Product 3', 'price' => 300],
    ];
    public function index(){
        
        $products = session()->get('products', self::$products); //fetch data from session if exists
        return view('products.index', compact('products'));
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $products = session()->get('products', self::$products); //we use get to fetch data from session

        $newProduct = [
            'id' => count($products) + 1,
            'name' => $request->name,
            'price' => $request->price,
        ];

        $products[] = $newProduct;

        session()->put('products', $products); //we use put to save data in session
        return redirect()->route('products.index')->with('success','Product created successfull');
    }
}
