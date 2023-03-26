<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;
use database\migrations\add_users;
use database\migrations\products;
use Illuminate\Support\Facades\Hash;
class DeleteController extends Controller
{
  public function delete(Request $request){
    $this->validate($request,[
      'id'=>'required',
    ]);
     $user=DB::table('users')
     ->where('id',$request->input('id'))
     ->first();
     if($user)
     {
     if($user->id==$request->input('id'))
     {
            DB::table('users')->where('id', $request->input('id'))->delete();
            return redirect('http://localhost/basicwebsite/public/admin/admintab')->with('success','حساب کاربر حذف شد');
     }
   }
      else
      {
            return redirect('http://localhost/basicwebsite/public/admin/admintab')->with('success','چنین کاربری وجود ندارد');
      }
   }
}
