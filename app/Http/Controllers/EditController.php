<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;
use database\migrations\add_users;
use database\migrations\products;
use Illuminate\Support\Facades\Hash;
class EditController extends Controller
{
  public function edit(Request $request){
    $this->validate($request,[
      'id'=>'required',
      'name',
      'email',
      'password',
      'paid',
      'role'
    ]);
     $user=DB::table('users')
     ->where('id',$request->input('id'))
     ->first();

     if($user)
     {
     if($user->id==$request->input('id'))
     {
       if($request->input('name'))
       {
        $name=$request->input('name');
        DB::table('users')->where('id', $request->input('id'))->update(['name' => $name]);
       }
       if($request->input('email'))
       {
         $email=$request->input('email');
         DB::table('users')->where('id', $request->input('id'))->update(['email' => $email]);
       }
       if($request->input('password'))
       {
         $password = Hash::make('secret');
         DB::table('users')->where('id', $request->input('id'))->update(['password' => $password]);
       }
       if($request->input('paid'))
       {
         $charge=$request->input('paid');
         DB::table('users')->where('id', $request->input('id'))->update(['paid' => $charge]);
       }
       if($request->input('role'))
       {
         $role=$request->input('role');
         DB::table('users')->where('id', $request->input('id'))->update(['role' => $role]);
       }
      return redirect('http://localhost/basicwebsite/public/admin/admintab')->with('success','کاربر ویرایش شد');
     }
      else
      {
            return redirect('http://localhost/basicwebsite/public/admin/admintab')->with('success','کاربر وجود ندارد');
      }
   }
}
}
