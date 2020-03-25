@extends('layouts.app')
@section('content')
  <title>商品詳細</title>
</head>
<body>
  <h1>商品詳細</h1>
  <h3>{{ $products->product_name }}</h3>
  <p>{{ $products->product_detail }}</p>
  <p>{{ $products->price }}</p>円
  <p>{{ $products->imgpath }}</p>
  <a href="/">商品一覧に戻る</a>
  <br>
  <a href="/cart">カート</a>
  <form method="post" action="/cart">
  {{ csrf_field() }}
   <input type="hidden" name="product_id" value="{{ $products->id }}">
   <input type="submit" value="カートに入れる">  
  </form>
  @endsection