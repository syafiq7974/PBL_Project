<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductadminController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }
}
