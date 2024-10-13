<?php

use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Front(client)
Route::get('/', [HomeController::class, 'index']);
Route::prefix('shop')->group(function () {
    Route::get('product/{id}',[\App\Http\Controllers\Front\ShopController::class,'show']);
    Route::post('product/{id}',[\App\Http\Controllers\Front\ShopController::class,'postComment']);
    Route::get('',[\App\Http\Controllers\Front\ShopController::class,'index']);
});

Route::prefix('account')->group(function () {
    Route::get('login',[\App\Http\Controllers\Front\AccountController::class,'login']);
    Route::post('login',[\App\Http\Controllers\Front\AccountController::class,'checkLogin']);
    Route::get('logout',[\App\Http\Controllers\Front\AccountController::class,'logout']);
    Route::get('register',[\App\Http\Controllers\Front\AccountController::class,'register']);
    Route::post('register',[\App\Http\Controllers\Front\AccountController::class,'postRegister']);
});


 //Dashbard (admin)
Route::prefix('admin')->middleware('CheckAdminLogin')->group(function (){
    Route::redirect('', 'admin/user');

    Route::resource('user', App\Http\Controllers\Admin\UserController::class);
    Route::resource('category', \App\Http\Controllers\Admin\ProductCategoryController::class);
    Route::resource('brand', \App\Http\Controllers\Admin\BrandController::class);
    Route::resource('product/{product_id}/image', \App\Http\Controllers\Admin\ProductImageController::class);
    Route::resource('product/{product_id}/detail', \App\Http\Controllers\Admin\ProductDetailController::class);
    Route::resource('product', \App\Http\Controllers\Admin\ProductController::class);


    Route::prefix('login')->group(function (){
        Route::get('',[\App\Http\Controllers\Admin\HomeController::class, 'getLogin'])->withoutMiddleware('CheckAdminLogin');
        Route::post('',[\App\Http\Controllers\Admin\HomeController::class, 'postLogin'])->withoutMiddleware('CheckAdminLogin');
    });

    Route::get('logout', [\App\Http\Controllers\Admin\HomeController::class, 'logout']);
});
