@extends('layouts.app')

@section('content')
<h2>تایید خرید</h2>
<h3>آیا از خرید محصول اطمینان دارید؟</h3>
<button onclick="window.location.href='http://localhost/basicwebsite/public/confirm';">
بله
</button>
<button onclick="window.location.href='http://localhost/basicwebsite/public/transaction';">
خیر
</button>
@endsection

@section('sidebar')
@parent
<p>this is appended to the sidebar</p>
@endsection
