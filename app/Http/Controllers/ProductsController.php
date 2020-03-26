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
        $user_id = Auth::id();
        $carts = Cart::where('user_id',$user_id)->get();
        $sum = Cart::with('product')->get('price');
        

        return view('products.cart', compact('carts','sum'));
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

    public function destroy(Request $request)
    {
        $product_id = $request->products_id;
        $user_id = Auth::id();
        Cart::where('product_id',$product_id)->where('user_id',$user_id)->delete();
        
        return redirect('/cart');
    }
}
