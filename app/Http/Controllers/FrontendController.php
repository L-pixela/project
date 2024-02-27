<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
        public function home()
    {
    return view('front_end.home');
    }
    public function about()
    {
    return view(' front_end.about');
    }
    public function contact()
    {
    return view(' front_end.contact');
    }

}
