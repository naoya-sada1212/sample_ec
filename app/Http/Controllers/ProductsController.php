<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Cart;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::Paginate(6);

        return view('products.index', compact('products'));
    }

    public function viewDetail($id)
    {    
        $products = Product::find($id);

        return view('products.detail', compact('products'));
    }

    public function viewCart()
    {
        $carts = Cart::all();

        return view('products.cart', compact('carts'));
    }
    public function cartIn(Request $request)
    {
        $product_id = $request->product_id;
        $user_id = Auth::id();
        
        $cart_in_info = Cart::firstOrCreate(['product_id' => $product_id, 'user_id' => $user_id]);
        if($cart_in_info->wasRecentlyCreated){
            $message = 'カートに追加しました';
        }
        else
        {
            $message = 'カートに登録済みです';
        }
        $carts = Cart::where('user_id', $user_id)->get();
        return view('products.cart',compact('carts','message'));
    }
}
