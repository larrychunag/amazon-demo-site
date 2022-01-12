<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $products = Product::all();

        return response()->json($products, 200, [], JSON_UNESCAPED_SLASHES);
    }

    /**
     * Display the specified resource.
     *
     * @param int   $id
     * @param mixed $product
     *
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        return Product::findOrFail($product)->get();
    }
}
