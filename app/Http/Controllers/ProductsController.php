<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function detail($id)
    {    
        $products = Product::find($id);

        return view('products.detail', compact('products'));
    }
}
