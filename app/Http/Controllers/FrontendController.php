<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //     public function home()
    // {
    // return view('front_end.home');
    // }
    // public function about()
    // {
    // return view(' front_end.about');
    // }
    // public function contact()
    // {
    // return view(' front_end.contact');
    // }

    public function home()
        {
        $title = 'Home Page';
        $content = 'This is the content of the home page.';
        return view('front_end.home', compact('title', 'content'));
        }

        public function about()
        {
        $data = [
        'title' => 'About Us',
        'content' => 'Learn more about our company.'
        ];
        return view('front_end.about', $data);
        }

        public function contact()
        {
        return view('front_end.contact')->with('message', 'Feel free to contact us.');
        }


}
