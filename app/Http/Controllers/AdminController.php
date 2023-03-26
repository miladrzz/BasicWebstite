<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
  public function getUsers(){
    {
      $user = User::all();
      return view('admintab')->with('users',$user);
    }
    else {
      return redirect('http://localhost/basicwebsite/public/home')->with('success','برای دسترسی به این صفحه باید مدیر باشید');
    }
  }
    //
}
