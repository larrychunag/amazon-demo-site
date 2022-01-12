<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return response()->json($products, 200, [], JSON_UNESCAPED_SLASHES);
    }

    public function show($product)
    {
        return Product::findOrFail($product)->get();
    }
}
