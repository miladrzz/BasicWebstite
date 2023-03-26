@extends('layouts.app')
@include('inc.complaints')
@section('content')
<h1>پنل کاربر</h1>
<h3></h3>
<h3>:سوابق خرید</h3>
@if(count($sales) > 0)
   @foreach($sales as $sales)
   @if(Auth::user()->id==$sales->user_id)
   <ul class="list-group">
     <li class="list-group-item">نشان محصول: {{$sales->product_id}}</li>
     <li class="list-group-item">نام محصول: {{$sales->product_name}}</li>
     <li class="list-group-item">کد محصول: {{$sales->product_code}}</li>
     <li class="list-group-item">قیمت محصول: {{$sales->product_price}}</li>
     @endif
     <h3></h3>
   </ul>
   @endforeach
@endif
   <h3></h3>
   <button onclick="window.location.href='https://localhost/basicwebsite/public/userpanel/useredit';">
   ویرایش مشخصات
 </button>
 <h3></h3>
 {!! Form::open(['url' => 'userpanel/userterminate']) !!}
 <div>
   {{Form::submit('حذف حساب',['class'=>'btn btn-primary'])}}
 </div>
 {!! Form::close() !!}
@endsection

@section('sidebar')
@parent
<p>this is appended to the sidebar</p>
@endsection
