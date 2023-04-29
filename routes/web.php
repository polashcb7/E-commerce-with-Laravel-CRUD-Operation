<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;

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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[EcommerceController::class,'index'])->name('/');
Route::get('/details-product/{id}',[EcommerceController::class,'detailsProduct'])->name('details.product');
Route::get('/customer-register',[EcommerceController::class,'customerRegister'])->name('customer.register');
Route::post('/new-customer',[EcommerceController::class,'saveCustomer'])->name('new.customer');
Route::get('/customer-login',[EcommerceController::class,'customerLogin'])->name('customer.login');
Route::post('/customer-login-check',[EcommerceController::class,'customerLoginCheck'])->name('customer.loginCheck');
Route::get('/customer-logout',[EcommerceController::class,'customerLogout'])->name('customer.logout');


//Route::post('/add-to-cart',[EcommerceController::class,'addToCart'])->name('add.cart');

Route::group(['middleware' => 'userCheck'],function(){
    Route::post('/add-to-cart',[EcommerceController::class,'addToCart'])->name('add.cart');
    Route::get('/see-cart/{id}',[EcommerceController::class,'seeCart'])->name('see.cart');
    Route::post('delete-cart-item',[EcommerceController::class,'deleteCartItem'])->name('delete.cart_item');
    Route::get('/plus-to-cart',[EcommerceController::class,'plusCart'])->name('plus.cart');
    Route::get('/minus-to-cart',[EcommerceController::class,'minusCart'])->name('minus.cart');
    Route::post('/place-an-order',[EcommerceController::class,'placeOrder'])->name('place.order');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');

    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');

    Route::get('/manage-user',[AdminController::class,'manageUser'])->name('manage.user');
    Route::get('/edit-user/{id}',[AdminController::class,'editUser'])->name('edit.user');
    Route::post('/update-user',[AdminController::class,'updateUser'])->name('update.user');

    Route::get('/add-product',[ProductController::class,'index'])->name('add.product');
    Route::post('/new-product',[ProductController::class,'saveProduct'])->name('new.product');
    Route::get('/manage-product',[ProductController::class,'manageProduct'])->name('manage.product');
    Route::get('/edit-product/{id}',[ProductController::class,'editProduct'])->name('edit.product');
    Route::post('/update-product',[ProductController::class,'updateProduct'])->name('update.product');
    Route::post('/delete-product',[ProductController::class,'deleteProduct'])->name('delete.product');
    Route::get('/status-product/{id}',[ProductController::class,'statusProduct'])->name('status.product');

    Route::get('/add-category',[CategoryController::class,'addCategory'])->name('add.category');
    Route::post('/save-category',[CategoryController::class,'saveCategory'])->name('new.category');
    Route::get('/manage-category',[CategoryController::class,'manageCategory'])->name('manage.category');
    Route::get('/edit-category,{id}',[CategoryController::class,'editCategory'])->name('edit.category');
    Route::post('/delete-category',[CategoryController::class,'deleteCategory'])->name('delete.category');

    Route::get('/add-brand',[BrandController::class,'addBrand'])->name('add.brand');
    Route::post('/new-brand',[BrandController::class,'saveBrand'])->name('new.brand');
    Route::get('/manage-brand',[BrandController::class,'manageBrand'])->name('manage.brand');
    Route::get('/edit-brand/{id}',[BrandController::class,'editBrand'])->name('edit.brand');
    Route::post('/delete-brand',[BrandController::class,'deleteBrand'])->name('delete.brand');




});
