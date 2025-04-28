<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Summary of landing
     * @return View Landing view
     */
    public function landing(){
        return view('landing');

    }
    /**
     * Summary of about
     * @return View about page view
     */
    public function about(){
        return view('about');

    }
    /**
     * Returns the  contact page view
     *
     * @return View contact page view
     */
    public function contact(){
        return view('contact');

    }
}
