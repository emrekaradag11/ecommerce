<?php

use App\Http\Controllers\back\{adminController,categoryController,brandController,productController,statusController,discountController,productUnitController,currencyController,userController};
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
    Route::post('/categorySortable', [categoryController::class,"sortable"])->name("categorySortable");

    //marka işlemleri buradan yapılıyor.
    Route::resource('/brand', brandController::class);

    //admin paneli kullanıcı işlemleri buradan yapılıyor.
    Route::resource('/users', userController::class)->names([
        "index" => "users.index",
        "create" => "users.create",
        "store" => "users.store",
    ]);

    //ürün işlemleri buradan yapılıyor.
    Route::resource('/product', productController::class);

    //İndirim tipi işlemleri buradan yapılıyor.
    Route::resource('/discount', discountController::class);

    //Ürün Birimi işlemleri buradan yapılıyor.
    Route::resource('/unit', productUnitController::class);

    //Para birimi işlemleri buradan yapılıyor.
    Route::resource('/currency', currencyController::class);

    //status işlemleri buradan yapılıyor.
    Route::get('/status', [statusController::class,"index"])->name("statusIndex");
    Route::post('/addStatusListType', [statusController::class,"addStatusListType"])->name("addStatusListType");
    Route::post('/addStatusList', [statusController::class,"addStatusList"])->name("addStatusList");
});
