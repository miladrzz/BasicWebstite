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

class DoneController extends Controller
{
  public function done(Request $request){
    $this->validate($request,[
      'name'=>'required',
      'email'=>'required',
      'password'=>'required',
      'productID'=>'required'
    ]);
     $user=DB::table('users')
     ->where('email',$request->input('email'))
     ->first();
     if(Auth::user()->id==$user->id)
     {
     if($user->name==$request->input('name'))
          if($user->email==$request->input('email'))
           if (Hash::check($request->password, $user->password))
                {
                      $product=DB::table('products')->where('id',$request->input('productID'))->first();
                      if(!$product)
                      {
                       return redirect('http://localhost/basicwebsite/public/transaction')->with('success','محصولی با این نشان وجود ندارد');
                      }
                      if($user->paid>=$product->price)
                      {
                        $code=$product->code;
                        $name=$product->name;
                        $id=$product->id;
                        $diff=($user->paid)-($product->price);
                        DB::table('users')->where('email', $request->input('email'))->update(['paid' => $diff]);
                        $sale=new Sale;
                        $sale->user_id=$user->id;
                        $sale->product_id=$id;
                        $sale->product_code=$code;
                        $sale->product_name=$name;
                        $sale->product_price=$product->price;
                        $sale->save();
                        DB::table('products')->where('id', $request->input('productID'))->delete();
                        //app('App\Http\Controllers\pagesController')->getThanks($code);
                        return view('thanks',['code'=>$code]);
                      }
                      else{
                        return redirect('http://localhost/basicwebsite/public/transaction')->with('success','موجودی کافی نیست');
                      }
                }
                else{
                     return redirect('http://localhost/basicwebsite/public/transaction')->with('success','ورودی نامعتبر');
                }
                else{
                     return redirect('http://localhost/basicwebsite/public/transaction')->with('success','ورودی نامعتبر');
                }
                else{
                     return redirect('http://localhost/basicwebsite/public/transaction')->with('success','ورودی نامعتبر');
                }
      }
      else {
        return redirect('http://localhost/basicwebsite/public/transaction')->with('success','اطلاعات وارد شده مربوط به حساب شما نمیباشد');
      }
         return redirect('http://localhost/basicwebsite/public/transaction')->with('success','چنین کاربری وجود ندارد');
}
}
