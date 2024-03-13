<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminProductCategoryController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Resources\AdminProfileController;
use App\Imports\DataImport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

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

Route::get('test',function(){

    // storage link
    symlink('/home/tem0jydr5cc0/public_html/storage/app/public','/home/tem0jydr5cc0/public_html/storage');

});

// Example Routes
Route::match(['get', 'post'], '/', function () {
    return view('front.index');
})->name('home');

Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');

Route::resource('cart', CartController::class)->only(['index', 'store', 'destroy']);

Route::get('categories/{id}', [ProductCategoryController::class, 'show'])->name('categories.show');

Auth::routes(['register' => false, 'reset' => false, 'verify' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(["auth"])->group(function () {

    Route::prefix("admin")->name("admin.")->group(function () {
        Route::get("", [AdminDashboardController::class, "index"])->name("dashboard.index");


        Route::resource('product-categories', AdminProductCategoryController::class);

        Route::resource('products', AdminProductController::class);


        Route::resource("profile", AdminProfileController::class)->only(["index", "update"]);
    });
});
