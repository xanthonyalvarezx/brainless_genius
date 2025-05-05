<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function DeleteMessage(Message $id)
    {
        $id->delete();
        return redirect('/dashboard')->with('success', "Message deleted successfully");
    }
}
