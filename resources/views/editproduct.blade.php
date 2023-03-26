@extends('layouts.app')
@section('content')
<h1>مدیریت</h1>
<h3>ویرایش محصول</h3>
@if(count($products) > 0)
   @foreach($products as $products)
   <ul class="list-group">
     <li class="list-group-item">ID: {{$products->id}}</li>
     <li class="list-group-item">Name: {{$products->name}}</li>
     <li class="list-group-item">Price: {{$products->price}}</li>
     <li class="list-group-item">Code: {{$products->code}}</li>
     <h3></h3>
   </ul>
   @endforeach
   @endif
   {!! Form::open(['url' => 'admin/admintab/addproduct/editproduct/editproduct']) !!}
   <div class="form-group">
     {{Form::label('id', 'نشان')}}
     {{Form::text('id','',['class'=>'form-control', 'placeholder'=>'نشان'])}}
   </div>
   <div class="form-group">
     {{Form::label('name', 'Name')}}
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
     {{Form::submit('ویرایش',['class'=>'btn btn-primary'])}}
   </div>
   {!! Form::close() !!}
   @endsection

   @section('sidebar')
   @parent
   <p>this is appended to the sidebar</p>
   @endsection
