<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;
use database\migrations\add_users;
use database\migrations\products;
use Illuminate\Support\Facades\Hash;
class AddUserController extends Controller
{
  public function adduser(Request $request){
    $this->validate($request,[
      'name'=>'required',
      'email'=>'required',
      'password'=>'required',
    ]);
     $user=DB::table('users')
     ->where('email',$request->input('email'))
     ->first();
     if($user)
     {
     return redirect('http://localhost/basicwebsite/public/admin/admintab')->with('success','.متاسفانه ایمیل توسط کاربر دیگری اختیار شده است');
     }
     if(!$user)
     {
            $user=new User;
            $user->name=$request->input('name');
            $user->email=$request->input('email');
            //$request->user()->fill([
            //'password' => Hash::make($request->newPassword)
          //  ])->save();
            $user->password=$request->input('password');
            $user->save();
            return redirect('http://localhost/basicwebsite/public/admin/admintab')->with('success','حساب کاربری ساخته شد');
     }
   }
}
