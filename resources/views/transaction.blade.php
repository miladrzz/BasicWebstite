@extends('layouts.app')

@section('content')
@include('inc.complaints')
<h1>لیست محصولات</h1>
@if(count($products) > 0)
   @foreach($products as $products)
   <ul class="list-group">
     نام محصول: <a href="http://localhost/basicwebsite/public/confirmation">{{$products->name}}</a>
     <li class="list-group-item">نشان: {{$products->id}}</li>
     <li class="list-group-item">قیمت: {{$products->price}}</li>
     <h3></h3>
   </ul>
   @endforeach
@endif
@endsection

@section('sidebar')
@parent
<p>this is appended to the sidebar</p>
@endsection
