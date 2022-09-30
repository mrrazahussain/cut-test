<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

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
    return redirect('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category',[AdminController::class,'category']);
Route::post('/addcategory',[AdminController::class,'addcategory']);
Route::get('/subcategory',[AdminController::class,'subcategory']);
Route::post('/addsubcategory',[AdminController::class,'addsubcategory']);
Route::get('/brands',[AdminController::class,'brands']);
Route::post('/addbrands',[AdminController::class,'addbrands']);
Route::get('catarch/{id}',[AdminController::class,'catarch']);
Route::get('uncatarch/{id}',[AdminController::class,'uncatarch']);

Route::get('subcatarch/{id}',[AdminController::class,'subcatarch']);
Route::get('unsubcatarch/{id}',[AdminController::class,'unsubcatarch']);

Route::get('brandarch/{id}',[AdminController::class,'brandarch']);
Route::get('unbrandarch/{id}',[AdminController::class,'unbrandarch']);
Route::get('cat-data/{id}',[AdminController::class,'catdata']);
Route::get('subcat-data/{id}',[AdminController::class,'subcatdata']);
Route::get('brand-data/{id}',[AdminController::class,'branddata']);
