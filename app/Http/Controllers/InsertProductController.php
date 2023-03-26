<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;
use database\migrations\add_users;
use database\migrations\products;
use Illuminate\Support\Facades\Hash;
class InsertProductController extends Controller
{
  public function insertproduct(Request $request){
        $this->validate($request,[
    'name'=>'required',
    'price'=>'required',
    'code'=>'required',
    ]);
     $product=DB::table('products')
     ->where('code',$request->input('code'))
     ->first();
     if(!$product)
     {
       $product=new Product;
       $product->name=$request->input('name');
       $product->price=$request->input('price');
       $product->code=$request->input('code');
       $product->save();
       return redirect('http://localhost/basicwebsite/public/admin/admintab/addproduct')->with('success','محصول ساخته شد');
     }
      else
      {
            return redirect('http://localhost/basicwebsite/public/admin/admintab/addproduct')->with('success','چنین محصولی درحال حاضر موجود است');
      }
   }
}
