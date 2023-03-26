@extends('layouts.app')

@section('content')
<h1>ارتباط با ما</h1>

<h3>ثبت شکایت</h3>

{!! Form::open(['url' => 'contact/submit']) !!}
<div class="form-group">
  {{Form::label('name', 'نام')}}
  {{Form::text('name','',['class'=>'form-control', 'placeholder'=>'نام'])}}
</div>
<div class="form-group">
  {{Form::label('email', 'ایمیل')}}
  {{Form::text('email','',['class'=>'form-control', 'placeholder'=>'ایمیل'])}}
</div>
<div class="form-group">
  {{Form::label('complaint', 'شکایت')}}
  {{Form::textarea('complaint','',['class'=>'form-control', 'placeholder'=>'شرح شکایت'])}}
</div>
<div>
  {{Form::submit('تایید',['class'=>'btn btn-primary'])}}
</div>
{!! Form::close() !!}
@endsection
