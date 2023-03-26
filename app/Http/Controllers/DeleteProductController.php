<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;
use database\migrations\add_users;
use database\migrations\products;
use Illuminate\Support\Facades\Hash;
class DeleteProductController extends Controller
{
  public function deleteproduct(Request $request){
    $this->validate($request,[
      'id'=>'required',
    ]);
     $product=DB::table('products')
     ->where('id',$request->input('id'))
     ->first();
     if($product)
     {
     if($product->id==$request->input('id'))
     {
            DB::table('products')->where('id', $request->input('id'))->delete();
            return redirect('http://localhost/basicwebsite/public/admin/admintab/addproduct')->with('success','محصول حذف شد');
     }
   }
      else
      {
            return redirect('http://localhost/basicwebsite/public/admin/admintab/addproduct')->with('success','چنین محصولی وجود ندارد');
      }
   }
}
