<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MollieController;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[PaymentController::class,'productListPage'])->name('product.list');

Route::get('payment-form',[PaymentController::class,'paymentForm'])->name('payment.form');
// Route::get('product-list',[PaymentController::class,'productListPage'])->name('product.list');
Route::get('/product-details', function (Illuminate\Http\Request $request) {
    $product = $request->all();
    return view('product_details', compact('product'));
})->name('product.details');

Route::get('/cart', function (Illuminate\Http\Request $request) {
    $cart = $request->all(); // Sepet verilerini session'dan al
    return view('my_cart', compact('cart')); // Sepet görünümüne veriyi gönder
})->name('cart.index');

use Illuminate\Support\Facades\Session;

Route::post('/cart/add', [PaymentController::class, 'add'])->name('cart.add');


Route::post('mollie',[MollieController::class,'mollie'])->name('mollie');
Route::get('success',[MollieController::class,'success'])->name('success');
Route::get('cancel',[MollieController::class,'cancel'])->name('cancel');


