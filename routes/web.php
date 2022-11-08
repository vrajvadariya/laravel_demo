<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registrationcontroller;
use App\Http\Controllers\productController;
use App\Http\Controllers\HomeController;
use App\Models\User;
use App\Models\Product;
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
Route::get('/', function() {
    return view('index');
});
 // AdminLTE 3 theme laravel //
Route::get('/home',[HomeController::class,'index'])->name('home');

 Route::get('/admin', function() {
    return view('master');
});






Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/index',[Registrationcontroller::class,'userview'])->name('users.list');
Route::get('/insert',[Registrationcontroller::class,'index']);
Route::get('/user/show/{id}',[Registrationcontroller::class,'show'])->name('user.show');
Route::get('/user/delete/{id}',[Registrationcontroller::class,'delete'])->name('user.delete');
Route::get('/user/edit/{id}',[Registrationcontroller::class,'edit'])->name('user.edit');
Route::put('/user/update/{id}',[Registrationcontroller::class,'update'])->name('user.update');
Route::get('/user/view',[Registrationcontroller::class,'view'])->name('user.list');
Route::get('/login',[Registrationcontroller::class,'login']);
Route::post('login',[Registrationcontroller::class,'userlogin']);
Route::post('/insert',[Registrationcontroller::class,'store']);
Route::get('/create',[Registrationcontroller::class,'index1'])->name('user.create');
Route::post('/userstore',[Registrationcontroller::class,'stores']);


 // productontroller //
 Route::get('/product',[productController::class,'index']);
 Route::get('/product/view',[productController::class,'view']);
 Route::get('/product/show/{id}',[productController::class,'productshow'])->name('product.show');
 Route::get('/product/delete/{id}',[productController::class,'delete']);
 Route::get('/product/edit/{id}',[productController::class,'edit'])->name('product.edet');
 Route::get('/product/update/{id}',[productController::class,'update']);
 Route::post('/product',[productController::class,'store']);

