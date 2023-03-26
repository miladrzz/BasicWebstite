<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;
use App\Models\Complaint;
use database\migrations\add_users;
use database\migrations\products;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ComplaintController extends Controller
{
    public function submit(Request $request){
      $this->validate($request,[
        'name'=>'required',
        'email'=>'required'
      ]);
      //Check if user exists.
      $user=DB::table('users')
      ->where('email',$request->input('email'))
      ->first();
      if(!$user)
        return redirect('http://localhost/basicwebsite/public/home')->with('success','کاربری با این مشخصات وجود ندارد');
      if(Auth::user()->email==$request->input('email')&&Auth::user()->name==$request->input('name'))
      {
      //Create a new complaint
      $complaint = new complaint;
      $complaint->name=$request->input('name');
      $complaint->email=$request->input('email');
      $complaint->complaint=$request->input('complaint');
      //Save complaint
      $complaint->save();

      // Redirect
      return redirect('http://localhost/basicwebsite/public/home')->with('success','شکایت شما ثبت شد');
    }
    else {
      return redirect('http://localhost/basicwebsite/public/home')->with('success','لطفا مشخصات خودتان را وارد نمایید');
    }
  }
    public function getComplaints(){
      If(Auth::check() && Auth::user()->isAdmin())
      {
      $complaint = Complaint::all();

      return view('complaints')->with('complaints',$complaint);
    }
    return redirect('http://localhost/basicwebsite/public/home')->with('success','برای دسترسی به این صفحه باید مدیر باشید');
    }
}
