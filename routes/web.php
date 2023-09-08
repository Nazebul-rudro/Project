<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// fontend start
Route::get('/', function(){
    return View('index');
})->name('home');
Route::get('/contact', function(){
    return View('fontend.contact');
})->name('contact');
Route::get('/category',  function(){
    return view('fontend.category');
})->name('category');
Route::get('/login', function(){
    return view('fontend.login');
})->name('login');
Route::get('/register', function(){
    return view('fontend.register');
})->name('register');
Route::get('/cart', function(){
    return view('fontend.cart');
})->name('cart');
Route::get('/checkout', function(){
    return view('fontend.checkout');
})->name('checkout');
Route::get('/confirmation', function(){
    return view('fontend.confirmation');
})->name('confirmation');
Route::get('/productdetails', function(){
    return view('fontend.single-product');
})->name('productdetails');



Route::resource('/users', UserController::class);

// fontend end



// backend start
Route::get('admin', function(){
return view('backend.index');
})->name('Admin');
// Route::get('/product', function(){
//     return view('backend.product.index');
//     })->name('AdminProduct');

Route::get('/product', [ProductController::class, 'index'])->name('AdminProduct');
Route::get('/product-create', [ProductController::class, 'create'])->name('AdminProduct-create');
Route::post('/product', [ProductController::class, 'store'])->name('AdminProduct-store');

// backend end

