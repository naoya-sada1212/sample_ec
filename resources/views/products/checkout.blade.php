@extends('layouts.products')
@section('content')
<p class="text my-4">{{ Auth::user()->name }}さんご購入ありがとうございました。</p>
<div class="mes">
<p>詳細はメールにてお送りさせていただきます。</p>
<a href="/">商品一覧へ</a>
@foreach ($carts as $cart)
{{$cart->product->product_name}}
{{$cart->product->id}}
{{$cart->product->price}}
{{$cart->user_id}}
@endforeach
@endsection
