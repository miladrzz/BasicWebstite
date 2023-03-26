@extends('layouts.app')
@section('content')
<h1>مدیریت</h1>
<h3>حذف کاربر</h3>
@if(count($users) > 0)
   @foreach($users as $users)
   <ul class="list-group">
     <li class="list-group-item">نشان: {{$users->id}}</li>
     <li class="list-group-item">نام: {{$users->name}}</li>
     <li class="list-group-item">ایمیل: {{$users->email}}</li>
     <li class="list-group-item">شارژ: {{$users->paid}}</li>
     <h3></h3>
   </ul>
   @endforeach
   @endif
   {!! Form::open(['url' => 'admin/admintab/deleteuser/delete']) !!}
   <div class="form-group">
     {{Form::label('id', 'نشان')}}
     {{Form::text('id','',['class'=>'form-control', 'placeholder'=>'نشانی محصول'])}}
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
