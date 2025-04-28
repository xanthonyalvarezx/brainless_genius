<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;

class Createmessage extends Component
{
    public $name;
    public $email;
    public $message;

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
    public function render()
    {
        return view('livewire.createmessage');
    }
}
