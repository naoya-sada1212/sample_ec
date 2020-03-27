@extends('layouts.products')
<title>商品一覧</title>
<style>
  .box {
    background-color: white;
    border: 1px solid black; 
  }
  </style>

@section('content')
  
  <h1 class="text-center my-4">
    商品一覧
  </h1>
  <div class="row text-center">
    @foreach ($products as $product)
    <div class="box col-md-4 p-3 my-4">
      <h3>{{ $product->product_name }}</h3>
      <p>{{ $product->product_detail }}</p>
      <p>{{ $product->price }}円</p>
      <a href="/detail/{{ $product->id }}" class="btn btn-primary">商品詳細</a>
    </div>   
    @endforeach
  </div>
  <div class="paginate my-4" style="width:200px;">
  {{ $products->links() }}
  </div> 
  

@endsection