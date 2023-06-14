<?php

use App\Product;
use App\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('home',[
        "tittle"=>"home"
    ]);
});
Route::get('/product', function () {
    return view('product',[
        "tittle"=>"product",
        "product"=>Product::latest()->get(),
        "categories"=>Category::all()
    ]);
});

Route::get('/categories/{category:id}', function (Category $category) {
    return view('categories',[
        "tittle"=>$category->name,
        "product"=>$category->product,
        "category"=>$category->name,
        "categories"=>Category::all()
    ]);
});
Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'authenticate']);
Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'store']);
Route::get('/dashboard',function(){
    return view('dashboard.index',[
        "tittle"=>"dashboard"
    ]);
});
//harus kasih middleware
Route::resource('/dashboard/products',DashboardController::class);