<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FreshCartController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\CourierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KilogramController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SslCommerzPaymentController;

Route::get('/',                         [FreshCartController::class,'index'])               ->name('home');
Route::get('/fresh/{id}',               [FreshCartController::class,'product'])             ->name('fresh');
Route::get('/sub-category-fresh/{id}',  [FreshCartController::class,'subCategoryProduct'])  ->name('sub-category-fresh');
Route::get('/product/details/{id}',     [FreshCartController::class,'productDetails'])      ->name('product.details');

Route::get('/product/cart',             [CartController::class,'productCart'])  ->name('product.cart');
Route::post('/product/store',           [CartController::class,'store'])        ->name('cart.store');
Route::put('/cart/update/{rowId}',      [CartController::class, 'update'])      ->name('cart.update');
Route::delete('/cart/remove/{rowId}',   [CartController::class, 'destroy'])     ->name('cart.destroy');


Route::post('/checkout/new-order',      [CheckoutController::class,'newOrder'])     ->name('checkout.order');
Route::get('/checkout/complete-order',  [CheckoutController::class,'completeOrder'])->name('complete.order');
Route::get('/product/checkout',         [CheckoutController::class,'index'])        ->name('product.checkout');

Route::get('/customer/register', [CustomerController::class,'register'])        ->name('customer.register');
Route::post('/customer/register',[CustomerController::class,'saveNewCustomer']) ->name('customer.register');
Route::get('/customer/login',    [CustomerController::class,'login'])           ->name('customer.login');
Route::post('/customer/login',   [CustomerController::class,'loginCheck'])      ->name('customer.login');
Route::post('/logout',           [CustomerController::class, 'logout'])         ->name('customer.logout');


Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay',          [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail',    [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel',  [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);



Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified',])->group(function () {

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::resource('category',     CategoryController::class);
    Route::resource('sub-category', SubCategoryController::class);
    Route::resource('brand',        BrandController::class);
    Route::resource('unit',         UnitController::class);
    Route::resource('kilogram',     KilogramController::class);
    Route::resource('color',        ColorController::class);
    Route::resource('size',         SizeController::class);
    Route::resource('courier',      CourierController::class);
    Route::resource('product',      ProductController::class);

    Route::get('/order',                        [OrderController::class,'index'])           ->name('order');
    Route::get('/order/details/{id}',           [OrderController::class,'details'])         ->name('order.details');
    Route::get('/order/edit/{id}',              [OrderController::class,'edit'])            ->name('order.edit');
    Route::post('/order/update/{id}',           [OrderController::class,'update'])          ->name('order.update');
    Route::get('/order/invoice/{id}',           [OrderController::class,'invoice'])         ->name('order.invoice');
    Route::get('/order/download-invoice/{id}',  [OrderController::class,'downloadInvoice']) ->name('order.download-invoice');
    Route::post('/order/destroy/{id}',          [OrderController::class,'destroy'])         ->name('order.destroy');

});
