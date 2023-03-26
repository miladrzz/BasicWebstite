@extends('layouts.app')
@section('content')
<h1>مدیریت</h1>
<h3>افزودن محصول</h3>
@if(count($products) > 0)
   @foreach($products as $products)
   <ul class="list-group">
     <li class="list-group-item">نشان: {{$products->id}}</li>
     <li class="list-group-item">نام: {{$products->name}}</li>
     <li class="list-group-item">قیمت: {{$products->price}}</li>
     <li class="list-group-item">کد محصول: {{$products->code}}</li>
     <h3></h3>
   </ul>
   @endforeach
   @endif
   {!! Form::open(['url' => 'admin/admintab/addproduct/insertproduct/insertproduct']) !!}
   <div class="form-group">
     {{Form::label('name', 'نام')}}
     {{Form::text('name','',['class'=>'form-control', 'placeholder'=>'نام'])}}
   </div>
   <div class="form-group">
     {{Form::label('code', 'کد محصول')}}
     {{Form::text('code','',['class'=>'form-control', 'placeholder'=>'کد محصول'])}}
   </div>
   <div class="form-group">
     {{Form::label('price', 'قیمت')}}
     {{Form::text('price','',['class'=>'form-control', 'placeholder'=>'قیمت'])}}
   </div>
   <div>
     {{Form::submit('افزودن',['class'=>'btn btn-primary'])}}
   </div>
   {!! Form::close() !!}
   @endsection

   @section('sidebar')
   @parent
   <p>this is appended to the sidebar</p>
   @endsection
