@extends('layouts.app')
<title>商品一覧</title>
@section('content')

  <h1>商品一覧</h1>
  @foreach ($products as $product)
  <h3>{{ $product->product_name }}</h3>
  <p>{{ $product->product_detail }}</p>
  <p>{{ $product->price }}</p>円
  <p>{{ $product->imgpath }}</p>
  <a href="/detail/{{ $product->id }}">商品詳細</a>
  @endforeach
  {{ $products->links() }}

@endsection