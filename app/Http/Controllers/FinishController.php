<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use database\migrations\add_users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class FinishController extends Controller
{
  public function finish(Request $request){
    $this->validate($request,[
      'name'=>'required',
      'email'=>'required',
      'password'=>'required',
      'price'=>'required'
    ]);
    //check in database
    $user=DB::table('users')
    ->where('email',$request->input('email'))
    ->first();
    if(Auth::check())
    {
    if(Auth::user()->email==$user->email)
    {
    if($user->name==$request->input('name'))
        if($user->email==$request->input('email'))
           if (Hash::check($request->password, $user->password)) {
             $sum=$user->paid+$request->input('price');
             DB::table('users')->where('email', $request->input('email'))->update(['paid' => $sum]);
             return redirect('http://localhost/basicwebsite/public/home')->with('success','با تشکر حساب شما شارژ شد');
             }
             else {
             return redirect('http://localhost/basicwebsite/public/buying')->with('success','عدم مطابقت اطلاعات وارده');
           }
           else {
           return redirect('http://localhost/basicwebsite/public/buying')->with('success','عدم مطابقت اطلاعات وارده');
         }
         else {
         return redirect('http://localhost/basicwebsite/public/buying')->with('success','عدم مطابقت اطلاعات وارده');
       }
    }
    else {
      return redirect('http://localhost/basicwebsite/public/buying')->with('success','لطفا ایمیل خودتان را وارد نمایید');
    }
    }
    else {
      return redirect('http://localhost/basicwebsite/public/login')->with('success','Please login first.');
    }
}
}
