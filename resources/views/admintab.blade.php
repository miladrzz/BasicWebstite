@extends('layouts.app')
@include('inc.complaints')
@section('content')
<h1>پنل مدیریت</h1>
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
   <h3></h3>
   <button onclick="window.location.href='https://localhost/basicwebsite/public/admin/admintab/adduser';">
  افزودن
</button>
<h3></h3>
<button onclick="window.location.href='https://localhost/basicwebsite/public/admin/admintab/deleteuser';">
حذف
</button>
<h3></h3>
<button onclick="window.location.href='https://localhost/basicwebsite/public/admin/admintab/edituser';">
ویرایش
</button>
@endsection

@section('sidebar')
@parent
<p>this is appended to the sidebar</p>
@endsection
