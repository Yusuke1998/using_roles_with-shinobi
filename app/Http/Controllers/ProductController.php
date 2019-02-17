<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index')->with('products',$products);  
    }

    public function create()
    {
        return dd($product->all());
    }

    public function store(Request $request)
    {
        return dd($request->all());
    }

    public function show(Product $product)
    {
        return dd($product->id);
    }

    public function edit(Product $product)
    {
        return dd($product->id);
    }

    public function update(Request $request, Product $product)
    {
        return dd($product->id);
    }

    public function destroy(Product $product)
    {
        return dd($product->all());
    }
}
