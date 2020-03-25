<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>商品一覧</title>
</head>
<body>
  <h1>商品一覧</h1>
  @foreach ($products as $product)
  <h3>{{ $product->product_name }}</h3>
  <p>{{ $product->product_detail }}</p>
  <p>{{ $product->price }}</p>円
  <p>{{ $product->imgpath }}</p>
  <a href="/detail/{{ $product->id }}">商品詳細</a>
  @endforeach
</body>
</html>