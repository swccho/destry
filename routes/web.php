<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\FrontController;
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


Route::get('/', [FrontController::class, 'home'])->name('front.home');
Route::get('/about', [FrontController::class, 'about'])->name('front.about');
Route::get('/contact', [FrontController::class, 'contact'])->name('front.contact');
Route::get('/faq', [FrontController::class, 'faq'])->name('front.faq');
Route::get('/profile', [FrontController::class, 'profile'])->name('front.profile');
Route::get('/products', [FrontController::class, 'product'])->name('front.product');
Route::get('/products/{id}', [FrontController::class, 'productSingle'])->name('front.product-single');
Route::get('/blogs', [FrontController::class, 'blog'])->name('front.blog');
Route::get('/blog-details', [FrontController::class, 'blogDetails'])->name('front.blog-details');
Route::get('/blog-details-sidebar', [FrontController::class, 'blogDetailsSidebar'])->name('front.blog-details-sidebar');
Route::get('/blog-left-sidebar', [FrontController::class, 'blogLeft'])->name('front.blog-left');
Route::get('/blog-right-sidebar', [FrontController::class, 'blogRight'])->name('front.blog-right');
Route::get('/wishlist', [FrontController::class, 'wishlist'])->name('front.wishlist');
Route::get('/compare', [FrontController::class, 'compare'])->name('front.compare');
Route::get('/cart', [FrontController::class, 'cart'])->name('front.cart');
Route::get('/checkout', [FrontController::class, 'checkout'])->name('front.checkout');
Route::get('/auth', [FrontController::class, 'auth'])->name('front.auth');
Route::get('/not-found', [FrontController::class, 'notFound'])->name('front.not-found');
