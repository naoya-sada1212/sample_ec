@extends('layouts.app')
@section('content')

{{ Auth::user()->name }}さんのカート
<br>
{{ $message }}
<br>
@foreach ($carts as $cart)
ユーザーID:<p>{{ $cart->user_id }}</p>
商品ID:<p>{{ $cart->product_id }}</p>
@endforeach
<a href="/">商品一覧へ</a>
@endsection