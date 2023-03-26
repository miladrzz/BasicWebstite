@extends('layouts.app')
@section('content')
<h1>مدیریت</h1>
<h3>حذف محصول</h3>
@if(count($products) > 0)
   @foreach($products as $products)
   <ul class="list-group">
     <li class="list-group-item">نشان: {{$products->id}}</li>
     <li class="list-group-item">نام: {{$products->name}}</li>
     <li class="list-group-item">قیمت: {{$products->email}}</li>
     <li class="list-group-item">کد محصول: {{$products->code}}</li>
     <h3></h3>
   </ul>
   @endforeach
   @endif
   {!! Form::open(['url' => 'admin/admintab/addproduct/deleteproduct/deleteproduct']) !!}
   <div class="form-group">
     {{Form::label('id', 'نشان')}}
     {{Form::text('id','',['class'=>'form-control', 'placeholder'=>'Enter the ID'])}}
   </div>
   <div>
     {{Form::submit('حذف',['class'=>'btn btn-primary'])}}
   </div>
   {!! Form::close() !!}
   @endsection

   @section('sidebar')
   @parent
   <p>this is appended to the sidebar</p>
   @endsection
