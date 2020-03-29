<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Cart;
use App\Mail\Thanks;
use Illuminate\Support\Facades\Mail;

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

    public function viewCart(Cart $cart)
    {
        $data = $cart->showCart();
        return view('products.cart', $data);
    }
    public function cartIn(Request $request,Cart $cart)
    {
        $product_id = $request->product_id;
        $user_id = Auth::id();
        $cart_in = Cart::firstOrCreate(['user_id'=>$user_id,'product_id'=>$product_id]);
        if($cart_in->wasRecentlyCreated)
        {
            $message = 'カートに追加しました';
        }
        else
        {
            $message = 'すでにカートに入っています';
        }
        $data = $cart->showCart();
        
        return view('products.cart',$data)->with('message',$message);
    }

    public function delete(Request $request,Cart $cart)
    {
        $product_id = $request->product_id;
        $user_id = Auth::id();
        $delete = Cart::where('user_id',$user_id)->where('product_id',$product_id)->delete();
        if($delete < 0)
        {
            $mes = '商品を一つ削除しました';
        }

        $data = $cart->showCart();
        
        return view('products.cart', $data);
    }

    public function checkOut(Request $request, Cart $cart)
    {
        //メールを送る処理
        /*$user = Auth::user();
        $mail_data['user'] = $user->name;
        $mail_data['check_cart'] = $cart->checkCart();
        Mail::to('$user->email)->send(new Thanks($mail_data));*/
        $cart->checkCart();
        return view('products.checkout');
    }

}
