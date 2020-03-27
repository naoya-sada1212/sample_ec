@extends('layouts.products')
<style>
  .box {
    background-color: white;
    border: 1px solid black; 
  }
</style>
@section('content')
  <title>商品詳細</title>
</head>
<body>
  <h1 class="my-4">商品詳細</h1>
  <div class="row text-center">
    <div class="box col-md-4 p-3 my-4">
      <h3>{{ $products->product_name }}</h3>
      <p>{{ $products->product_detail }}</p>
      <p>{{ $products->price }}円</p>
      <p>{{ $products->imgpath }}</p>
      <br>
      <form method="post" action="/cart">
      {{ csrf_field() }}
      <input type="hidden" name="product_id" value="{{ $products->id }}">
      <input type="submit" value="カートに入れる">  
    </form>
  </div>
</div>
<a href="/">商品一覧に戻る</a>
  @endsection