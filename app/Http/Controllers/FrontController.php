<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class FrontController extends BaseController
{
    public function home(Request $request)
    {
        return view('front.pages.home');
    }
    public function about(Request $request)
    {
        return view('front.pages.about');
    }
    public function contact(Request $request)
    {
        return view('front.pages.contact');
    }
    public function faq(Request $request)
    {
        return view('front.pages.faq');
    }
    public function profile(Request $request)
    {
        return view('front.pages.profile');
    }
    public function product(Request $request)
    {
        return view('front.pages.product');
    }
    public function productSingle(Request $request)
    {
        return view('front.pages.product-single');
    }
    public function blog(Request $request)
    {
        return view('front.pages.blog-list');
    }
    public function blogDetails(Request $request)
    {
        return view('front.pages.blog-details');
    }
    public function blogDetailsSidebar(Request $request)
    {
        return view('front.pages.blog-details-sidebar');
    }
    public function blogLeft(Request $request)
    {
        return view('front.pages.blog-left');
    }
    public function blogRight(Request $request)
    {
        return view('front.pages.blog-right');
    }
    public function auth(Request $request)
    {
        return view('front.pages.auth');
    }
    public function wishlist(Request $request)
    {
        return view('front.pages.wishlist');
    }
    public function compare(Request $request)
    {
        return view('front.pages.compare');
    }
    public function cart(Request $request)
    {
        return view('front.pages.cart');
    }
    public function checkout(Request $request)
    {
        return view('front.pages.checkout');
    }
    public function notFound(Request $request)
    {
        return view('front.pages.not-found');
    }
}
