<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Products;
use App\Models\Banner;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $banner = Banner::latest()->first();
        $categories = Categories::all();
        $products = Products::with('categories')
                                ->paginate(10);
        // $products = Products::with('categories')
        //                         ->latest()
        //                         ->paginate(10);
        return view('frontend.home', compact('banner','categories', 'products'));
    }

    public function about(){
        return view('frontend.about');
    }
}
