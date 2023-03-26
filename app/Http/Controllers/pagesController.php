<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pagesController extends Controller
{
      public function getHome(){
      return view('home');
    }
    public function getTransaction(){
      If(Auth::check())
      {
      $product = Product::all();
      return view('transaction')->with('products',$product);
    }
    else {
          return redirect('http://localhost/basicwebsite/public/home')->with('success','ابتدا وارد حساب خود شوید یا حساب بسازید');
    }
    }
    public function getAddproduct(){
      If(Auth::check() && Auth::user()->isAdmin()){
      $product = Product::all();
      return view('addproduct')->with('products',$product);
    }
    return redirect('http://localhost/basicwebsite/public/home')->with('success','برای دسترسی به این صفحه باید مدیر باشید');
    }
    public function getInsertproduct(){
      If(Auth::check() && Auth::user()->isAdmin()){
      $product = Product::all();
      return view('insertproduct')->with('products',$product);
    }
    return redirect('http://localhost/basicwebsite/public/home')->with('success','برای دسترسی به این صفحه باید مدیر باشید');
    }
    public function getDeleteproduct(){
      If(Auth::check() && Auth::user()->isAdmin()){
      $product = Product::all();
      return view('deleteproduct')->with('products',$product);
    }
    return redirect('http://localhost/basicwebsite/public/home')->with('success','برای دسترسی به این صفحه باید مدیر باشید');
    }
    public function getEditproduct(){
    If(Auth::check() && Auth::user()->isAdmin()){
      $product = Product::all();
      return view('editproduct')->with('products',$product);
    }
    return redirect('http://localhost/basicwebsite/public/home')->with('success','برای دسترسی به این صفحه باید مدیر باشید');
    }
    public function getAbout(){
      return view('about');
    }
    public function getContact(){
      If(Auth::check())
      {
      return view('contact');
    }
    else {
      return redirect('http://localhost/basicwebsite/public/home')->with('success','ابتدا وارد شوید یا حساب خود را بسازید');
    }
    }
    public function getRegister(){
      return view('registration');
    }
    public function getBuying(){
      If(Auth::check())
    {
      return view('buying');
    }
    else {
      return redirect('http://localhost/basicwebsite/public/home')->with('success','ابتدا وارد شوید یا حساب خود را بسازید');
    }
    }
    public function getConfirm(){
      return view('confirm');
    }
    public function getConfirmation(){
      return view('confirmation');
    }
    public function getAdmintab(){
      If(Auth::check() && Auth::user()->isAdmin()) {
        $user = User::all();
        return view('admintab')->with('users',$user);
      }
      return redirect('http://localhost/basicwebsite/public/home')->with('success','برای دسترسی به این صفحه باید مدیر باشید');
    }
    public function getDeleteuser(){
      If(Auth::check() && Auth::user()->isAdmin()){
      $user = User::all();
      return view('deleteuser')->with('users',$user);
    }
      return redirect('http://localhost/basicwebsite/public/home')->with('success','برای دسترسی به این صفحه باید مدیر باشید');
    }
    public function getAdduser(){
      If(Auth::check() && Auth::user()->isAdmin()){
      $user = User::all();
      return view('adduser')->with('users',$user);
    }
    return redirect('http://localhost/basicwebsite/public/home')->with('success','برای دسترسی به این صفحه باید مدیر باشید');
    }
    public function getEdituser(){
      If(Auth::check() && Auth::user()->isAdmin()){
      $user = User::all();
      return view('edituser')->with('users',$user);
    }
    return redirect('http://localhost/basicwebsite/public/home')->with('success','برای دسترسی به این صفحه باید مدیر باشید');
    }
    public function getSells(){
      If(Auth::check() && Auth::user()->isAdmin()){
      $sale = Sale::all();
      return view('sells')->with('sales',$sale);
    }
    return redirect('http://localhost/basicwebsite/public/home')->with('success','برای دسترسی به این صفحه باید مدیر باشید');
    }
    public function getUserpanel(){
      If(Auth::check())
      {
        $id=Auth::user()->id;
        $sale = Sale::where('user_id',$id)->get();
      return view('userpanel')->with('sales',$sale);
    }
    else {
      return redirect('http://localhost/basicwebsite/public/login')->with('success','ابتدا وارد حساب خود شوید یا حساب خود را بسازید');
    }
    }
    public function getUsereditpanel(){
      If(Auth::check())
      {
        return view('useredit');
    }
    else {
      return redirect('http://localhost/basicwebsite/public/login')->with('success','ابتدا وارد حساب خود شوید یا حساب خود را بسازید');
    }
    }
}
