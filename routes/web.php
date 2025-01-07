<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\pageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Http;
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
    return view('welcome');
});

Route::get('/allJewelry', '\App\Http\Controllers\pageController@showWish');
Route::get('/wishlist', '\App\Http\Controllers\pageController@Wishlist_Page');
Route::get('/card', '\App\Http\Controllers\pageController@Cart');

Route::get('/blog/{showBlogs}/showBlog', '\App\Http\Controllers\pageController@Show_Blog');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::post('/wish/add', 'App\Http\Controllers\pageController@addWishList');

Route::get('/blog/createBlog', '\App\Http\Controllers\pageController@index');
Route::POST('/blog/stores', '\App\Http\Controllers\pageController@store');

Route::PATCH('/blog/{showBlogs}', '\App\Http\Controllers\pageController@update');

Route::get('/blog/{create}/editPage', '\App\http\Controllers\pageController@create');
Route::post('/card', [pageController::class, 'Cart'])->name('views.cardPage');
Route::post('/addCart', [pageController::class, 'addToCart'])->name('views.addCart');
Route::post('/update_cart', [pageController::class, 'updateCart'])->name('views.updateCart');
Route::post('/delete_cart', [pageController::class, 'delateCart'])->name('views.deleteCart');
Route::post('/wish/store', '\App\Http\Controllers\pageController@wishStore');
// Route::get('/goBack', '\App\Http\Controllers\pageController@go');

// add wishlist
Route::post('/addWish', [pageController::class, 'addWishlist'])->name('views.addWish');
Route::get('/wish', '\App\Http\Controllers\pageController@Wish');
Route::POST('/wish', [pageController::class, 'Wish'])->name('views.addWishlist');
Route::post('/deleteCart', [pageController::class, 'delateCart2'])->name('views.deleteCart2');







Route::middleware('auth')->group(function () {
    Route::post('/addWish/myWish', 'App\Http\Controllers\pageController@addMyWish');
    Route::get('/blog', '\App\Http\Controllers\pageController@showBlog');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
