<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registrationcontroller;
use App\Models\User;
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

