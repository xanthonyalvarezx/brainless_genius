<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function checkboxSubmit(Request $request, Message $message)
    {
        switch ($request) {
            case $request->has('saved'):
                Message::where('id', $message->id)->update(['saved' =>  1]);
                return redirect()->back()->with('success', "Message saved successfully");
                break;
            case $request->has('reply'):
                Message::where('id', $message->id)->update(['reply' =>  1]);
                return redirect()->back()->with('success', "Message updated successfully");
                break;
            case $request->has('job'):
                Message::where('id', $message->id)->update(['job' =>  1]);
                return redirect()->back()->with('success', "Message updated successfully");
                break;
            default:
                # code...
                break;
        }
    }
    public function DeleteMessage(Message $id)
    {
        $id->delete();
        return redirect('/dashboard/messages/new')->with('success', "Message deleted successfully");
    }
}
