@extends('layouts.app')
@section('sidebar')
@section('content')
 @include('inc.complaints')
 <h3>!از خرید شما متشکریم</h3>
: کد محصول به شرح زیر است
<h3></h3>
 {{$code}}
@endsection
