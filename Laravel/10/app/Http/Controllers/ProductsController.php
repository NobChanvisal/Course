<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Products::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Categories::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $val = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'discounted_price' => 'nullable|numeric',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);
        $val['status'] = $request->has('status') ? 'available' : 'unavailable'; 
        $imagePath = null;
        if($request->hasFile('image')){
           $imagePath = $request->file('image')->store('product', 'public'); 
        }
        $val['image'] = $imagePath;
        Products::create($val);
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $categories = Categories::all();
        $product = Products::findOrFail($id);
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $product = Products::findOrFail($id);
        $val = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'discounted_price' => 'nullable|numeric',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);
        $val['status'] = $request->has('status') ? 'available' : 'unavailable'; 

        if($request->hasFile('image')){
           if($product->image){
            Storage::disk('public')->delete($product->image);
           }
           $imagePath = $request->file('image')->store('product', 'public'); 
           $val['image'] = $imagePath;
        }
        $product->update($val);
        return redirect()->route('products.index')->with('success', 'Products updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $product = Products::findOrFail($id);

        if($product->image){
            Storage::disk('public')->delete($product->image);
        }
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
