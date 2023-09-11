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
Route::get('/products', [FrontController::class, 'product'])->name('front.product');
Route::get('/products/{id}', [FrontController::class, 'productSingle'])->name('front.product-single');
Route::get('/blogs', [FrontController::class, 'blog'])->name('front.blog');
Route::get('/blog-details', [FrontController::class, 'blogDetails'])->name('front.blog-details');
Route::get('/blog-details-sidebar', [FrontController::class, 'blogDetailsSidebar'])->name('front.blog-details-sidebar');
Route::get('/blog-left-sidebar', [FrontController::class, 'blogLeft'])->name('front.blog-left');
Route::get('/blog-right-sidebar', [FrontController::class, 'blogRight'])->name('front.blog-right');
Route::get('/not-found', [FrontController::class, 'notFound'])->name('front.not-found');
