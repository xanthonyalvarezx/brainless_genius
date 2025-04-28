<?php

namespace App\Livewire;
use App\Models\Form;


use Livewire\Component;
use function PHPSTORM_META\map;

class Messages  extends Component
{
public $name;
public $email;
public $message;

public function form(){
    $validatedData = $this->validate([
        'name' => 'required',
        'email' => ['required', 'email'],
        'message' => 'required| max:1000'
    ]);

    $validatedData['name'] = strip_tags($validatedData['name']);
    $validatedData['email'] = strip_tags($validatedData['email']);
    $validatedData['message'] = strip_tags($validatedData['message']);

    $newMessage = Form::create($validatedData); 
    
    session()->flash('success', 'Message successfully sent.');
    return $this->redirect('/contact', navigate:true);

}
    public function render()
    {
        
        return view('livewire.form');
    }
}
