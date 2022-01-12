<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return response()->json($categories, 200, [], JSON_UNESCAPED_SLASHES);
    }

    public function show($category)
    {
        $category = Category::findOrFail($category)->get();

        return response()->json($category, 200, [], JSON_UNESCAPED_SLASHES);
    }
}
