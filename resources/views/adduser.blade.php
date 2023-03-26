@extends('layouts.app')
@section('content')
<h1>مدیریت</h1>
<h3>افزودن کاربر</h3>
@if(count($users) > 0)
   @foreach($users as $users)
   <ul class="list-group">
     <li class="list-group-item">نشان: {{$users->id}}</li>
     <li class="list-group-item">نام: {{$users->name}}</li>
     <li class="list-group-item">ایمیل: {{$users->email}}</li>
     <li class="list-group-item">شارژ حساب: {{$users->paid}}</li>
     <h3></h3>
   </ul>
   @endforeach
   @endif
   {!! Form::open(['url' => 'admin/admintab/adduser/adduser']) !!}
   <div class="form-group">
     {{Form::label('name', 'نام')}}
     {{Form::text('name','',['class'=>'form-control', 'placeholder'=>'Enter the name'])}}
   </div>
   <div class="form-group">
     {{Form::label('email', 'آدرس ایمیل')}}
     {{Form::text('email','',['class'=>'form-control', 'placeholder'=>'Enter the E-mail address'])}}
   </div>
   <div class="form-group">
     {{Form::label('password', 'رمز عبور')}}
     {{Form::text('password','',['class'=>'form-control', 'placeholder'=>'Enter the Password'])}}
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
