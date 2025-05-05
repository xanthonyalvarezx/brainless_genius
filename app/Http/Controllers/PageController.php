<?php

namespace App\Http\Controllers;

use App\Models\Message;
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
    public function registerPage(){
        return view('register');

    }
    public function loginPage(){
        return view('login');

    }
    public function adminDash(){

        $newMessages = Message::all();
        return view('dashboard', ['messages' => $newMessages]);

    }

    
}
