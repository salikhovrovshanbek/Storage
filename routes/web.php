<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SomethingController;
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

Route::get('/main',function (){
    return view('store.index');
});

Route::get('/smth/{smth}',function($smth){
    return view('store.edit',['name'=>$smth]);
});

Route::get('/add',function (){
//    return view('store.create');
    return redirect("/main");
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/smth',function(){
    return view('store.show');
});

Route::get('/blade', [
    SomethingController::class,'viewLoad'
]);

Route::post('login',[
    SomethingController::class,'getData'
]);

Route::view('log','login');

Route::resource("products",\App\Http\Controllers\ProductController::class);
Route::resource("store",\App\Http\Controllers\StoreController::class);
Route::resource("client",\App\Http\Controllers\ClientController::class);
