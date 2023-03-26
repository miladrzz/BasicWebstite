@extends('layouts.app')

@section('content')
<h1>شکایات</h1>
@if(count($complaints) > 0)
   @foreach($complaints as $complaints)
   <ul class="list-group">
     <a class="list-group-item">نام: {{$complaints->name}}</a>
     <li class="list-group-item">ایمیل: {{$complaints->email}}</li>
     <li class="list-group-item">شرح شکایت: {{$complaints->complaint}}</li>
     <h3></h3>
   </ul>
   @endforeach
@endif
@endsection

@section('sidebar')
@parent
<p>this is appended to the sidebar</p>
@endsection
