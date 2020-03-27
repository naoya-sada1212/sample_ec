@extends('layouts.products')
@section('content')

{{ Auth::user()->name }}さんのカート
<br>
{{ $message ?? '' }}
<br>
@if (count($carts) == 0)
何も入っていません<br>
@endif
@foreach ($carts as $cart)
<p>{{ $cart->product->product_name }}</p>
<p>{{ $cart->product->product_detail }}</p>
<p>{{ $cart->product->price }}円</p>
<form method="POST" action="/cartdelete">
<input type="hidden" name="_method" value="DELETE">
<input type="hidden" name="product_id" value="{{ $cart->product->id }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="submit" value="カートから削除">
</form>
@endforeach 
個数：{{$count}}個<br>
<p>合計金額：{{number_format($sum)}}円</p>
<br>
<a href="/">商品一覧へ</a>
@endsection