@extends('layouts.app')
@section('sidebar')
@section('content')
 @include('inc.complaints')
 <h3>:کلیه تراکنش ها</h3>
 @if($sales)
    @foreach($sales as $sales)
    <ul class="list-group">
      <li class="list-group-item">شماره تراکنش: {{$sales->id}}</li>
      <li class="list-group-item">نشان خریدار: {{$sales->user_id}}</li>
      <li class="list-group-item">نشان محصول: {{$sales->product_id}}</li>
      <li class="list-group-item">کد محصول: {{$sales->product_code}}</li>
      <li class="list-group-item">نام محصول: {{$sales->product_name}}</li>
      <li class="list-group-item">هزینه محصول: {{$sales->product_price}}</li>
      <h3></h3>
    </ul>
    @endforeach
 @endif
@endsection
