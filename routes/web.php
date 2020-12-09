<?php

use App\Http\Controllers\back\adminController;
use App\Http\Controllers\back\categoryController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['as'=>'admin.' , 'prefix' => 'admin'], function () {
    Route::get('/', [adminController::class, 'get_index'])->name("admin.index");

    //kategori işlemleri buradan yapılıyor.
    Route::resource('/category', categoryController::class);
});
