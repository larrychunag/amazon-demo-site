<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use Encore\Admin\Controllers\AdminController;

class ApiController extends AdminController
{
    protected $title = 'Api';

    public function categories()
    {
        $categories = Category::all();
        $result = [];
        foreach ($categories as $category) {
            $categoryObj = [
                'id' => $category->id,
                'text' => $category->name,
            ];
            $result[] = $categoryObj;
        }

        return $result;
    }
}
