<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','App\Http\Controllers\pagesController@getHome');

Route::get('/home','App\Http\Controllers\pagesController@getHome');

Route::get('/about','App\Http\Controllers\pagesController@getAbout');

Route::get('/userpanel','App\Http\Controllers\pagesController@getUserpanel');

Route::get('/userpanel/useredit','App\Http\Controllers\pagesController@getUsereditpanel');

Route::get('/contact','App\Http\Controllers\pagesController@getContact');

Route::get('/transaction','App\Http\Controllers\pagesController@getTransaction');

Route::get('/registration','App\Http\Controllers\pagesController@getRegister');

Route::get('/buying','App\Http\Controllers\pagesController@getBuying');

Route::get('/complaints', 'App\Http\Controllers\ComplaintController@getComplaints');

Route::get('/admin/admintab', 'App\Http\Controllers\pagesController@getAdmintab');

Route::get('/admin/admintab/deleteuser', 'App\Http\Controllers\pagesController@getDeleteuser');

Route::get('/admin/admintab/edituser', 'App\Http\Controllers\pagesController@getEdituser');

Route::get('/admin/admintab/adduser', 'App\Http\Controllers\pagesController@getAdduser');

Route::get('/admin/admintab/addproduct', 'App\Http\Controllers\pagesController@getAddproduct');

Route::get('/admin/admintab/sells', 'App\Http\Controllers\pagesController@getSells');

Route::get('/admin/admintab/addproduct/insertproduct', 'App\Http\Controllers\pagesController@getInsertproduct');

Route::get('/admin/admintab/addproduct/deleteproduct', 'App\Http\Controllers\pagesController@getDeleteproduct');

Route::get('/admin/admintab/addproduct/editproduct', 'App\Http\Controllers\pagesController@getEditproduct');

Route::post('/contact/submit','App\Http\Controllers\ComplaintController@submit');

Route::post('/confirm/done','App\Http\Controllers\DoneController@done');

Route::post('/admin/admintab/deleteuser/delete','App\Http\Controllers\DeleteController@delete');

Route::post('/admin/admintab/edituser/edit','App\Http\Controllers\EditController@edit');

Route::post('/admin/admintab/adduser/adduser','App\Http\Controllers\AddUserController@adduser');

Route::post('/admin/admintab/addproduct/insertproduct/insertproduct', 'App\Http\Controllers\InsertProductController@insertproduct');

Route::post('/admin/admintab/addproduct/deleteproduct/deleteproduct', 'App\Http\Controllers\DeleteProductController@deleteproduct');

Route::post('/admin/admintab/addproduct/editproduct/editproduct', 'App\Http\Controllers\EditProductController@editproduct');

Route::post('/buying/finish','App\Http\Controllers\FinishController@finish');

Route::post('/userpanel/useredit/useredit','App\Http\Controllers\UsereditController@useredit');

Route::post('/userpanel/userterminate','App\Http\Controllers\TerminateController@terminate');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/confirmation','App\Http\Controllers\pagesController@getConfirmation');

Route::get('/confirm','App\Http\Controllers\pagesController@getConfirm');

Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('user_dashboard');
});

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin_dashboard');
});
