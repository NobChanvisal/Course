<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\Categories;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index($category_slug = null)
    {
        if($category_slug != null){
            $category = Categories::where('slug', $category_slug)->first();
            $products = Products::where('category_id', $category->id)->paginate(20);

            return view('frontend.shops', compact('products', 'category'));

        }
        else{
            $products = Products::with('categories')->paginate(20);
            return view('frontend.shops', compact('products'));

        }
    }

    public function show($category_slug, $pro_slug)
    {
        $product = Products::with('categories')->where('slug', $pro_slug)->first();
        return view('frontend.product_detail', compact('product'));
    }

   
}
