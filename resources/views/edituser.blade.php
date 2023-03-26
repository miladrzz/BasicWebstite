@extends('layouts.app')
@section('content')
<h1>مدیریت</h1>
<h3>ویرایش کاربر</h3>
@if(count($users) > 0)
   @foreach($users as $users)
   <ul class="list-group">
     <li class="list-group-item">ID: {{$users->id}}</li>
     <li class="list-group-item">Name: {{$users->name}}</li>
     <li class="list-group-item">E-mail: {{$users->email}}</li>
     <li class="list-group-item">Charge: {{$users->paid}}</li>
     <li class="list-group-item">Role: {{$users->role}}</li>
     <h3></h3>
   </ul>
   @endforeach
   @endif
   {!! Form::open(['url' => 'admin/admintab/edituser/edit']) !!}
   <div class="form-group">
     {{Form::label('id', 'نشان')}}
     {{Form::text('id','',['class'=>'form-control', 'placeholder'=>'نشان'])}}
   </div>
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
     {{Form::text('password','',['class'=>'form-control', 'placeholder'=>'رمز عبور'])}}
   </div>
   <div class="form-group">
     {{Form::label('paid', 'شارژ')}}
     {{Form::text('paid','',['class'=>'form-control', 'placeholder'=>'شارژ'])}}
   </div>
   <div class="form-group">
     {{Form::label('role', 'نقش')}}
     {{Form::text('role','',['class'=>'form-control', 'placeholder'=>'نقش'])}}
   </div>
   <div>
     {{Form::submit('ویرایش',['class'=>'btn btn-primary'])}}
   </div>
   {!! Form::close() !!}
   @endsection
