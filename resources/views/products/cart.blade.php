@extends('layouts.products')
<style>
  .box {
    background-color: white;
    border: 1px solid black; 
  }
</style>
@section('content')
<h1 class="my-4">{{ Auth::user()->name }}さんのカート</h1>
<br>
<h2>{{ $message ?? '' }}</h2>
<br>
<br>
@if($carts->isNotEmpty())
<div class="row text-center">
  @foreach ($carts as $cart)
  <div class="box col-md-4 p-3 my-4">
    <h3>{{ $cart->product->product_name }}</h3>
    <p>{{ $cart->product->product_detail }}</p>
    <p>{{ $cart->product->price }}円</p>
    <form method="POST" action="/cartdelete">
    <input type="hidden" name="product_id" value="{{ $cart->product->id }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input class="btn btn-danger" type="submit" value="カートから削除">
  </form>
  </div>
  @endforeach 
  </div>
  合計：{{$count}}個<br>
  <p>合計金額：{{number_format($sum)}}円</p>
  <br>
  <form method="post" action="/check">
  {{ csrf_field() }}
  <input type="submit" value="購入する">
  </form>
  @else
  カートは何も入っていません
  @endif
  <br>
<a href="/">商品一覧へ</a>
@endsection