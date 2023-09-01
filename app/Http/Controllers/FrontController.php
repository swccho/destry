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
}
