<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;

class DashboardController extends Controller
{
    //
    public function index(){
        $total_categories = Categories::count();
        $total_products = Products::count();
        
        return view('dashboard', compact('total_categories', 'total_products'));
     }
}
