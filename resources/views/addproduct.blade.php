@extends('layouts.app')
@include('inc.complaints')
@section('content')
<h1>مدیریت</h1>
<h3>افزودن محصول</h3>
@if(count($products) > 0)
   @foreach($products as $products)
   <ul class="list-group">
     <li class="list-group-item">نشان: {{$products->id}}</li>
     <li class="list-group-item">نام محصول: {{$products->name}}</li>
     <li class="list-group-item">قیمت: {{$products->price}}</li>
     <h3></h3>
   </ul>
   @endforeach
@endif
   <h3></h3>
   <button onclick="window.location.href='https://localhost/basicwebsite/public/admin/admintab/addproduct/insertproduct';">
  افزودن
</button>
<h3></h3>
<button onclick="window.location.href='https://localhost/basicwebsite/public/admin/admintab/addproduct/deleteproduct';">
حذف
</button>
<h3></h3>
<button onclick="window.location.href='https://localhost/basicwebsite/public/admin/admintab/addproduct/editproduct';">
ویرایش
</button>
@endsection

@section('sidebar')
@parent
<p>this is appended to the sidebar</p>
@endsection
