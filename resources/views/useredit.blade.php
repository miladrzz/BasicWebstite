@extends('layouts.app')
@section('content')
<h1>ویرایش کاربر</h1>
   {!! Form::open(['url' => '/userpanel/useredit/useredit']) !!}
   <div class="form-group">
     {{Form::label('name', 'نام')}}
     {{Form::text('name','',['class'=>'form-control', 'placeholder'=>'نام'])}}
   </div>
   <div class="form-group">
     {{Form::label('email', 'ایمیل')}}
     {{Form::text('email','',['class'=>'form-control', 'placeholder'=>'ایمیل'])}}
   </div>
   <div class="form-group">
     {{Form::label('password', 'رمز عبور')}}
     {{Form::text('password','',['class'=>'form-control', 'placeholder'=>'کد'])}}
   </div>
   <div>
     {{Form::submit('ویرایش',['class'=>'btn btn-primary'])}}
   </div>
   {!! Form::close() !!}
   @endsection
