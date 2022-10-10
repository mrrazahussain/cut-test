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
Route::get('price-range',[AdminController::class,'pricerange']);
Route::get('/employees',[AdminController::class,'employees']);
Route::get('/category-tracking',[AdminController::class,'categorytrack']);
Route::post('/range-submit',[AdminController::class,'addrange']);
Route::get('/get-range/{id}',[AdminController::class,'getrange']);

Route::get('pricerangearch/{id}',[AdminController::class,'pricerangearch']);
Route::get('unpricerangearch/{id}',[AdminController::class,'unpricerangearch']);

Route::get('users',[AdminController::class,'allusers']);
Route::get('/usersdata',[AdminController::class,'usersdata']);

Route::get('/display-users/{id}',[AdminController::class,'displayusers']);
Route::get('/user-display/{id}',[AdminController::class, 'userdisplay']);

Route::get('employeearch/{id}',[AdminController::class,'employeearch']);
Route::get('unemployeearch/{id}',[AdminController::class,'unemployeearch']);
Route::get('fetch-employees/{id}',[AdminController::class,'fetchemployees']);
Route::post('add-staff',[AdminController::class,'addstaff']);
