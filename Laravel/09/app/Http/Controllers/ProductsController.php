<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Categories;
use Illuminate\Http\Request;

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
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        // If the request has status, set status to 1, otherwise set status to 0.
        $val['status'] = $request->has('status') ? 'available' : 'unavailable'; 

        Products::create($val);
        return redirect()
            ->route('products.index')
            ->with('success', 'Product created successfully.');     
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
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
        return view('products.edit', compact('categories', 'product'));
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
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        // If the request has status, set status to 1, otherwise set status to 0.
        $val['status'] = $request->has('status') ? 'available' : 'unavailable'; 

        $product->update($val);
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $product = Products::findOrFail($id);
        if($product){
            $product->delete();
            return redirect()->route('products.index')
                ->with('success', 'Product deleted successfully.');
        }
    }
}
