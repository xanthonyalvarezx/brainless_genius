<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function loginAdmin(){
        
    }
    public function registerAdmin(Request $request){
           $registerData = $request->validate([
            "name" => ['required', ' min:4', ' max:20'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "password" => ['required', 'min:8', 'confirmed']
        ]);
        $newUser = User::create($registerData);
        auth()->login($newUser);

        return redirect('/')->with('success', 'Thank you for signing up!');




    }
   
    
}
