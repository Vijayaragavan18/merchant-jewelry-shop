<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\pageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;
use Surfsidemedia\Shoppingcart\Facades\Cart;
use App\models\UserAddress;
use App\Http\Controllers\OrderController;
use App\Models\order_request;
use App\Models\userOrder;
use App\Models\packageUser;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
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



// In routes/web.php (or routes/auth.php if using Breeze/Jetstream)







Route::post('/place-order', [OrderController::class, 'placeOrder'])->middleware('auth')->name('place.order');

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.update');





Route::get('/', function () {
    return view('welcome');
});




Route::get('/emailCon', [pageController::class, 'sendMail'])->name('contact.sendMail');


Route::post('/emailContact', [pageController::class, 'sendEnquiry'])->name('contact.sendEnquiry');



// Route::get('/allJewelry', '\App\Http\Controllers\pageController@showAllProduct');
Route::get('/wishlist', '\App\Http\Controllers\pageController@Wishlist_Page');



Route::get('/blog/{showBlogs}/showBlog', '\App\Http\Controllers\pageController@Show_Blog');

Route::get('/dashboard', function () {





    $userId = auth()->id();
    $packageUser = PackageUser::where('user_id', $userId)->first();
    $cartContent = collect();
    $addresses = collect();
    $adminCheckOrders = UserOrder::all();


    if ($packageUser && in_array($packageUser->plan_id, [1, 2, 3])) {

        $orders = UserOrder::where('wishlist_id', $userId)->get();
        $userIds = $orders->pluck('user_id')->unique();
        $addresses = UserAddress::whereIn('user_id', $userIds)->get()->keyBy('user_id');
        $cartContent = $orders;
    } else {

        $cartContent = UserOrder::where('user_id', $userId)->orderBy('created_at', 'desc')->get();
        $address = UserAddress::where('user_id', $userId)->latest()->first();
        $addresses = $address ? collect([$address])->keyBy('user_id') : collect();
    }


    return view('dashboard', compact('cartContent', 'addresses', 'packageUser', 'adminCheckOrders'));
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/address/edit/{id}', [pageController::class, 'edit'])->name('address.edit');

Route::get('/dashboard-show-address', function () {
    session(['showDashboardAddress' => true]);
    return redirect('/dashboard');
})->name('dashboard.showAddress');

Route::get('/package-plan/platinum', function () {
    session(['planPlatinum' => true]);
    return redirect('/dashboard');
})->name('package.platinum');

Route::get('/package-plan/gold', function () {
    session(['planGold' => true]);
    return redirect('/dashboard');
})->name('package.gold');

Route::get('/package-plan/diamond', function () {
    session(['planDiamond' => true]);
    return redirect('/dashboard');
})->name('package.diamond');


Route::post('/wish/add', 'App\Http\Controllers\pageController@addWishList');
Route::get('/showWishList', 'App\Http\Controllers\pageController@wishListPage');
Route::get('/blog/createBlog', '\App\Http\Controllers\pageController@index');
Route::get('/about', 'App\Http\Controllers\pageController@aboutFunction');
Route::POST('/blog/stores', '\App\Http\Controllers\pageController@store');
Route::get('/check', '\App\Http\Controllers\pageController@checkList');
Route::get('/packageUser/buy/{planId}/{package}', [pageController::class, 'packagePlanStore'])->name('package.buy');

// Route::patch('/blog/{showBlogs}', [pageController::class, 'update']);
Route::patch('/blog/{showBlogs}', [\App\Http\Controllers\pageController::class, 'update'])->name('blog.update');
Route::delete('/blog/{blog}', [\App\Http\Controllers\pageController::class, 'destroy'])->name('blog.destroy');


Route::get('/blog/{create}/editPage', '\App\http\Controllers\pageController@create');
Route::post('/card', [pageController::class, 'Cart'])->name('views.cardPage');
Route::post('/addCart', [pageController::class, 'addToCart'])->name('views.addCart');
Route::post('/update_cart', [pageController::class, 'updateCart'])->name('views.updateCart');
Route::post('/delete_cart', [pageController::class, 'delateCart'])->name('views.deleteCart');
Route::post('/wish/store', '\App\Http\Controllers\pageController@wishStore');
Route::get('/wish/productDetailAdd', '\App\Http\Controllers\pageController@productList');

Route::get('/download-invoice', [pageController::class, 'downloadPdf'])->name('download-invoice');
Route::get('/allJewelry', [pageController::class, 'allJewelry'])->name('views.allJewelry');

Route::post('/apply-coupon', [pageController::class, 'applyCoupon'])->name('views.applyCoupon');

// add wishlist
Route::post('/addWish', [pageController::class, 'addWishlist'])->name('views.addWish');
Route::get('/wish', '\App\Http\Controllers\pageController@Wish');
Route::POST('/wish', [pageController::class, 'Wish'])->name('views.addWishlist');
Route::post('/deleteCart', [pageController::class, 'delateCart2'])->name('views.deleteCart2');





Route::post('/order-Accept', [OrderController::class, 'orderAccept'])->name('views.orderAccept');
Route::post('/order-cancel', [OrderController::class, 'orderCancel'])->name('views.orderCancel');
Route::post('/dashboard', [pageController::class, 'dashEdit'])->name('views.dashEdit');

Route::middleware('auth')->group(function () {
    Route::get('/packages', function () {
        return view('packagePage');
    });


    Route::get('/card', '\App\Http\Controllers\pageController@Cart');
    Route::post('/reCheckOnce', [pageController::class, 'addAddress'])->name('views.addAddress');
    Route::get('/reCheck', [PageController::class, 'reCheck'])->name('views.reCheck');
    Route::post('/addWish/myWish',  'App\Http\Controllers\pageController@addMyWish');
    // Route::get('/blog', '\App\Http\Controllers\pageController@showBlog');
    Route::get('/blog', '\App\Http\Controllers\pageController@showBlog')->name('blog.show');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
