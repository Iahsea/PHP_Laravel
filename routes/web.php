<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PostController;

Route::get('products', [
    ProductsController::class,
    'index'
]);

Route::get('/', function () {
    return view('home');
});



Route::resource('posts', PostController::class);
