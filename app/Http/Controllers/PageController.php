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
    public function landing()
    {
        return view('landing');
    }
    /**
     * Summary of about
     * @return View about page view
     */
    public function about()
    {
        return view('about');
    }
    /**
     * Returns the  contact page view
     *
     * @return View contact page view
     */
    public function contact()
    {
        return view('contact');
    }
    public function registerPage()
    {
        return view('register');
    }
    public function loginPage()
    {
        return view('login');
    }
    public function adminDash($tab)
    {
        switch ($tab) {
            case 'new':
                $newMessages = Message::where('saved', '!=', 1)->where('reply', '!=', 1)->where('job', '!=', 1)->orderBy('created_at', 'DESC')->paginate(5);
                return view('dashboard', ['messages' => $newMessages, 'task' => '', 'default' => 'There are no messages at this time!']);
                break;
            case 'read':
                $readMessages = Message::where('saved', '=', 1)->orWhere('reply', '=', 1)->orWhere('job', '=', 1)->orderBy('created_at', 'DESC')->paginate(5);
                return view('dashboard', ['messages' => $readMessages, 'task' => '', 'default' => 'There are no read at yet!']);
                break;
            case 'tasks':
                $tasks = Message::where('reply', '=', 1)->orWhere('job', '=', 1)->orderBy('created_at', 'DESC')->paginate(5);
                return view('dashboard', ['messages' => $tasks, 'task' => 'Reply to message ASAP!', 'default' => 'There are no tasks at this time!']);
                break;
            default:
                # code...
                break;
        }
    }

    public function email()
    {
        return view('register-email');
    }
}
