<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landing(){
        return view('landing');

    }
    public function about(){
        return view('about');

    }
    public function contact(){
        return view('contact');

    }
}
