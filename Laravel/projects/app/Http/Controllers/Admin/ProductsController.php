<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    //
    public function index(){
        $products = Products::with('categories')->paginate(20);
        return view('admin.products.index', compact('products'));
    }
}
