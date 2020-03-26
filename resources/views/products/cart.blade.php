@extends('layouts.products')
@section('content')

{{ Auth::user()->name }}さんのカート
<br>
{{ $message ?? '' }}
<br>
@if (count($carts) == 0)
何も入っていません
@endif
@foreach ($carts as $cart)
<p>{{ $cart->product->product_name }}</p>
<p>{{ $cart->product->product_detail }}</p>
<p>{{ $cart->product->price }}円</p>
<form method="post" action="/cartdelete">
<input type="hidden" name="_method" value="DELETE">
<input type="hidden" name="products_id" value="{{ $cart->product->id }}">
<input type="submit" value="カートから削除">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
@endforeach 
<br>
<a href="/">商品一覧へ</a>
@endsection