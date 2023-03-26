@extends('layouts.app')

@section('content')
@include('inc.complaints')
<h1>شارژ حساب</h1>
{!! Form::open(['url' => 'buying/finish']) !!}
<div class="form-group">
  {{Form::label('name', 'نام')}}
  {{Form::text('name','',['class'=>'form-control', 'placeholder'=>'نام کاربری'])}}
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
  {{Form::label('price', 'قیمت')}}
  {{Form::text('price','',['class'=>'form-control', 'placeholder'=>'میزان شارژ'])}}
</div>
<div>
  {{Form::submit('اتمام',['class'=>'btn btn-primary'])}}
</div>
{!! Form::close() !!}

@endsection
