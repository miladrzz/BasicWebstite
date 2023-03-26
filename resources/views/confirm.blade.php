@extends('layouts.app')
@section('content')
<h1>نهایی کردن خرید</h1>
{!! Form::open(['url' => 'confirm/done']) !!}
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
  {{Form::label('productID', 'نشان محصول')}}
  {{Form::text('productID','',['class'=>'form-control', 'placeholder'=>'نشان محصول'])}}
</div>
<div>
  {{Form::submit('انجام',['class'=>'btn btn-primary'])}}
</div>
{!! Form::close() !!}
@endsection
