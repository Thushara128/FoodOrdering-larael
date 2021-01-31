<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductController;

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
Route::group(['middleware'=>"web"],function(){
Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::view('register','register');
Route::post("register",[UsersController::Class,'register']);
Route::post("login",[UsersController::Class,'login']);



Route::get("/",[ProductController::Class,'index']);
Route::get('/list',[ProductController::Class,'list']);
Route::get('/delete/{id}',[RestoController::Class,'delete']);
Route::get("productdetail/{id}",[ProductController::Class,'productdetail']);
Route::get("search",[ProductController::Class,'search']);
Route::post("add_to_cart",[ProductController::Class,'addToCart']);
Route::get("cartlist",[ProductController::Class,'cartlist']);
Route::get("removecart/{id}",[ProductController::Class,'removecart']);
Route::get("ordernow",[ProductController::Class,'ordernow']);
Route::post("orderplace",[ProductController::Class,'orderplace']);
Route::get("myorder",[ProductController::Class,'myorder']);
Route::get('mail',[EcomController::Class,'sendmail']);
});