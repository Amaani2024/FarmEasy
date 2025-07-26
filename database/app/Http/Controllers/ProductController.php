<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // Get all products from the database
        $products = Product::all();

        // Pass products data to the 'products.index' view
        return view('products.index', compact('products'));
    }


public function show($id)
{
    $product = Product::findOrFail($id); // Will return 404 if not found
    return view('products.show', compact('product'));
}
}
