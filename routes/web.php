<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//routes for admin
Route::prefix('admin')->group(function () {
    
});

//routes for admin
Route::get('admin/login', [AdminController::class,'login']) ;
Route::post('admin/login', [AdminController::class,'store'])->name('adminLogin') ;
Route::get('admin/dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard');


// routes for editor
Route::get('editor/login', [EditorController::class,'login']) ;
Route::post('editor/login', [EditorController::class,'store'])->name('editorLogin') ;
Route::get('editor/dashboard', [EditorController::class,'dashboard'])->name('editor.dashboard');


// cart
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');
Route::get('checkout', [ProductController::class, 'checkout'])->name('checkout.page');
Route::post('order', [ProductController::class, 'order'])->name('checkout.order');

// brand
Route::resource('brands', BrandController::class);

require __DIR__.'/auth.php';
