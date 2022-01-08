<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group(
    [
        'prefix' => config('admin.route.prefix'),
        'namespace' => config('admin.route.namespace'),
        'middleware' => config('admin.route.middleware'),
        'as' => config('admin.route.prefix').'.',
    ],
    function (Router $router) {
        $router->get('/', 'HomeController@index')->name('home');
        $router
            ->get('/api/categories', 'ApiController@categories')
            ->name('categories')
        ;
        $router->resource('/users', UserController::class);
        $router->resource('/products', ProductController::class);
        $router->resource('/categories', CategoryController::class);
    }
);
