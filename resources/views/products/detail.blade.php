<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>商品詳細</title>
</head>
<body>
  <h1>商品詳細</h1>
  <h3>{{ $products->product_name }}</h3>
  <p>{{ $products->product_detail }}</p>
  <p>{{ $products->price }}</p>円
  <p>{{ $products->imgpath }}</p>
  <form method="post" action="/cart">
   <input type="hidden" name="product_id" value="{{ $products->id }}">
   <input type="submit" value="カートに入れる">  
  </form>
</body>
</html>