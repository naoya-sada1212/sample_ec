@extends('layouts.products')
<title>商品一覧</title>
@section('content')

  <h1>商品一覧</h1>
  @foreach ($products as $product)
  <h3>{{ $product->product_name }}</h3>
  <p>{{ $product->product_detail }}</p>
  <p>{{ $product->price }}円</p>
  <p>{{ $product->imgpath }}</p>
  <a href="/detail/{{ $product->id }}">商品詳細</a>
  @endforeach
  {{ $products->links() }}

@endsection