<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Models\Product;

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
    $products = Product::orderBy('created_at','desc')->get();

    return view('welcome',compact('products'));
});

Route::get('products/{product}', function(Product $product){
    return view('product_info', compact('product'));
})->name('prdouct.view');

Route::get('cart', [CartController::class, 'index'])->name('cart.index');
Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [CartController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove.from.cart');


Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('verify-login', [AuthController::class, 'verifyLogin'])->name('admin.verify.login');

    Route::group(['middleware' => 'auth'], function () {
        
        Route::get('/dashboard',[ProductController::class,'dashboard'])->name('admin.dashboard');
        Route::get('/logout',[ProductController::class,'logout'])->name('admin.logout');

        Route::get('/product-create',[ProductController::class,'create'])->name('admin.create.product');
        Route::post('/product-store',[ProductController::class,'store'])->name('admin.product.store');
        Route::get('/products',[ProductController::class,'index'])->name('admin.products');
    });
});
