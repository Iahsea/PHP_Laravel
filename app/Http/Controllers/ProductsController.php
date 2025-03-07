<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $title = 'Iahsea';
        return view('products.index', compact('title'));
    }

    
}
