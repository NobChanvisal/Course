<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;
use Illuminate\Support\Str;


class ProductsController extends Controller
{
    //
    public function index(){
        $products = Products::with('categories')->paginate(20);
        return view('admin.products.index', compact('products'));
    }

    public function create(){
        $categories = Categories::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
{
    $val = $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'category_id' => 'required|exists:categories,id',
        'status' => 'required|in:available,unavailable',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'price_type' => 'nullable|in:percent,fixed,none',
        'discount_percentage' => 'nullable|numeric|min:0|max:100',
        'discounted_price' => 'nullable|numeric|min:0',
    ]);

    // slug
    $val['slug'] = Str::slug($request->name);

    // image upload
    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/products'), $imageName);
        $val['image'] = $imageName;
    }

    // discount logic
    $discounted_price = null;
    if ($request->price_type === 'percent') {
        $discounted_price =
            $request->price - ($request->price * $request->discount_percentage / 100);
    } 
    elseif ($request->price_type === 'fixed') {
        $discounted_price = $request->discounted_price;
    } 
    else{ 
        $discounted_price = null;
    }
    $val['discounted_price'] = $discounted_price;
    

    Products::create($val);

    return redirect()
        ->route('admin.products.index')
        ->with('success', 'Product created successfully');
}

    public function edit($id){
        $product = Products::findOrFail($id);
        $categories = Categories::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id){
        $product = Products::findOrFail($id);

        $val = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|in:available,unavailable',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // image upload
        if($request->hasFile('image')){
           $oldImage = public_path('images/products/'.$product->image);
           if(file_exists($oldImage)){
                unlink($oldImage);
           }
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/products'), $imageName);
            $val['image'] = $imageName;
        }

        // discount logic
        $discounted_price = null;
        if ($request->price_type === 'percent') {
            $discounted_price =
                $request->price - ($request->price * $request->discount_percentage / 100);
        } 
        elseif ($request->price_type === 'fixed') {
            $discounted_price = $request->discounted_price;
        } 
        else{ 
            $discounted_price = null;
        }
        $val['discounted_price'] = $discounted_price;

        $product->update($val);
        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

}
