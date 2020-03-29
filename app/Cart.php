<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    //
    protected $fillable = [
        'product_id', 'user_id',
    ];

    public function product()
    {
        return $this->belongsTo('\App\Product');
    }

    public function showCart()
    {
        $user_id = Auth::id();
        $data['carts'] = $this->where('user_id',$user_id)->get();
        $data['count'] = 0;
        $data['sum'] = 0;

        foreach($data['carts'] as $carts) {
            $data['count']++;
            $data['sum'] += $carts->product->price;
        }
        return $data;
    }

    public function checkCart()
    {
        $user_id = Auth::id();
        $check_cart = $this->where('user_id',$user_id)->get();
        $this->where('user_id',$user_id)->delete();

        return $check_cart;
    }
    
}
