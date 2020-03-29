@component('mail::message')
{{$user}}様<br>
この度はMY_SHOPでのご購入ありがとうございました。<br>
お客様がご購入いただいた商品は<br>

@foreach ($check_cart as $checks)
・{{ $checks->product->name}}|{{$checks->product->price}}円
<br>
@endforeach
となります<br>
下記の決済画面より決済を完了させてください<br>

@component('mail::button', ['url' => ''])
決済画面へ
@endcomponent

<br>
{{ config('app.name') }}
@endcomponent
