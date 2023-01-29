<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\frontendcontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubcategoryController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/cartdetail-subhash', function () {
//     return view('frontend.pages.cartdetail');
// });
Route::get('/cartdetail-subhash-asdfg-asdf-asdf-asd', [frontendcontroller::class, 'laptop'])->name('subu.laptop');

// Route::get('/index', function () {
//     return view('backend.category.index');
// });
// Route::get('/category', function () {
//     return view('backend.category.create');
// });
Route::get('/', [frontendcontroller::class, 'homepage'])->name('front.home');
Route::get('/productlist/{sub_cat}', [frontendcontroller::class, 'subu'])->name('productlist.subu');
Route::get('/productdetails/{cat}', [frontendcontroller::class, 'subu1'])->name('productdetails.subu1');

Route::resource('/category', categoryController::class);
Route::resource('/subcategory', SubcategoryController::class);
Route::resource('/brand', App\Http\Controllers\brandController::class);
Route::resource('/product', App\Http\Controllers\ProductController::class);
Route::resource('/banner', App\Http\Controllers\BannerController::class);
Auth::routes([
    'verify' => true,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [HomeController::class, 'profile'])->name('self.profile');

    Route::get('/cart/store/{slug}', [CartController::class, 'store'])->name('cart.store');
    Route::delete('/cart/delete/{id}', [CartController::class, 'destroy'])->name('cart.delete');

    Route::get('/cart', [frontendcontroller::class, 'cartPage']);
});
