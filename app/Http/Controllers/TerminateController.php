<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;
use App\Models\Sale;
use database\migrations\add_users;
use database\migrations\products;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class TerminateController extends Controller
{
  public function terminate(Request $request){
    if(Auth::check())
    {
       DB::table('users')->where('id', Auth::user()->id)->delete();
       return redirect('http://localhost/basicwebsite/public/login')->with('success','حساب کاربری شما حذف شد');
    }
      else
      {
            return redirect('http://localhost/basicwebsite/public/login')->with('success','ابتدا وارد حساب خود شوید یا حساب خود را بسازید');
      }
   }
}
