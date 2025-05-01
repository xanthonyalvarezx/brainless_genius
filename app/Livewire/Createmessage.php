<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;

class Createmessage extends Component
{
    // public variables contain data from livewire form submission
    public $name;
    public $email;
    public $message;

    /**
     * Summary of saveMessage
     * 
     * Validates submitted data with the buillt in validator
     * Strips tags for security
     * creates new message row in the database with the submitted data
     * returns a flash message to the front end of success
     * redirects to landing page
     */
    public function saveMessage()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'message' => 'required| max:1000'
        ]);

        $validatedData['name'] = strip_tags($validatedData['name']);
        $validatedData['email'] = strip_tags($validatedData['email']);
        $validatedData['message'] = strip_tags($validatedData['message']);

        $newMessage = Message::create($validatedData);

        session()->flash('success', 'Message successfully sent.');
        return $this->redirect('/', navigate: true);
    }

    /**
     * Summary of render
     * renders livewire createmessage form view
     */
    public function render()
    {
        return view('livewire.createmessage');
    }
}
