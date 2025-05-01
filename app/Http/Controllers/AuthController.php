<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function loginAdmin(Request $request):RedirectResponse{
         $loginData = $request->validate([
            "email" => 'required',
            "password" => 'required'
        ]);

        if (auth()->attempt(['email' => $loginData['email'], 'password' => $loginData['password']])) {
            $request->session()->regenerate();
            // event(new exampleEvent(['username' => auth()->user()->username, 'action' => 'login']));
            return redirect('/')->with('success', auth()->user()->name . " you've successfully logged in");
        } else {
            return redirect('/')->with('error', 'Invalid credentials');
        }

        
    }
    public function registerAdmin(Request $request):RedirectResponse{
           $registerData = $request->validate([
            "name" => ['required', ' min:4', ' max:20'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "password" => ['required', 'min:8', 'confirmed']
        ]);
        $newUser = User::create($registerData);
        auth()->login($newUser);

        return redirect('/')->with('success', 'New admin registered successfully!');




    }
   
    
}
