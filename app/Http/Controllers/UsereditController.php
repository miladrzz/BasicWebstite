<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;
use database\migrations\add_users;
use database\migrations\products;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsereditController extends Controller
{
  public function useredit(Request $request){
    $this->validate($request,[
      'name',
      'email',
      'password',
    ]);
    $user=Auth::user();
     if(Auth::check())
     {
       if($request->input('name'))
       {
        $name=$request->input('name');
        DB::table('users')->where('id', Auth::user()->id)->update(['name' => $name]);
       }
       if($request->input('email'))
       {
         $temp=DB::table('users')->where('email',$request->input('email'))->first();
         if(!$temp)
         {
         $email=$request->input('email');
         DB::table('users')->where('id', Auth::user()->id)->update(['email' => $email]);
       }
       else {
      return redirect('http://localhost/basicwebsite/public/userpanel')->with('success','چنین ایمیلی در حا حاضر وجود دارد');
       }
       }
       if($request->input('password'))
       {
         $password = Hash::make($request->input('password'));
         DB::table('users')->where('id', Auth::user()->id)->update(['password' => $password]);
       }
      return redirect('http://localhost/basicwebsite/public/userpanel')->with('success','حساب کاربری ویرایش شد');
     }
      else
      {
            return redirect('http://localhost/basicwebsite/public/admin/admintab')->with('success','چنین کاربری وجود ندارد');
      }
   }
}
