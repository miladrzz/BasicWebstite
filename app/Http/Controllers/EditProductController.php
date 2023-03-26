<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;
use database\migrations\add_users;
use database\migrations\products;
use Illuminate\Support\Facades\Hash;
class EditProductController extends Controller
{
  public function editproduct(Request $request){
    $this->validate($request,[
      'id'=>'required',
      'name',
      'price',
      'code'
    ]);
     $product=DB::table('products')
     ->where('id',$request->input('id'))
     ->first();
     if($product)
     {
     if($product->id==$request->input('id'))
     {
       if($request->input('name'))
       {
        $name=$request->input('name');
        DB::table('products')->where('id', $request->input('id'))->update(['name' => $name]);
       }
       if($request->input('code'))
       {
         $code=$request->input('code');
         DB::table('products')->where('id', $request->input('id'))->update(['code' => $code]);
       }
       if($request->input('price'))
       {
         $price = $request->input('price');
         DB::table('products')->where('id', $request->input('id'))->update(['price' => $price]);
       }
      return redirect('http://localhost/basicwebsite/public/admin/admintab/addproduct')->with('success','محصول ویرایش شد');
     }
      else
      {
            return redirect('http://localhost/basicwebsite/public/admin/admintab/addproduct')->with('success','محصول وجود ندارد');
      }
   }
}
}
