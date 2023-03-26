<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
  public function getProducts(){
    $product = Product::all();
    return view('transaction')->with('products',$product);
  }
    //
}
