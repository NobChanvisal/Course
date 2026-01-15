<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function index(){
        $categories = Categories::paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    public function edit($id){
        $category = Categories::findOrFail($id);

        return view('admin.categories.edit', compact('category'));
    }

    public function update($id){
        
    }
}
