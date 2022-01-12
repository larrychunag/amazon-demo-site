<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryProductController extends Controller
{
    public function index($category)
    {
        $category = Category::findorFail($category);
        $products = $category->products()->get();

        return response()->json($products, 200, [], JSON_UNESCAPED_SLASHES);
    }

    public function show($category, $product)
    {
        $category = Category::findorFail($category);
        $product = $category
            ->products()
            ->findorFail($product)
            ->get()
        ;

        return response()->json($product, 200, [], JSON_UNESCAPED_SLASHES);
    }
}
