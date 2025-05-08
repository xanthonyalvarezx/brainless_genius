<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Events\authLog;
use Illuminate\Http\Request;
use App\Jobs\sendRegisterEmail;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function loginAdmin(Request $request): RedirectResponse
    {
        $loginData = $request->validate([
            "email" => 'required',
            "password" => 'required'
        ]);

        if (auth()->attempt(['email' => $loginData['email'], 'password' => $loginData['password']])) {
            $request->session()->regenerate();
            event(new authLog(['name' => auth()->user()->name, 'action' => 'login']));
            return redirect('/dashboard/messages/new')->with('success', auth()->user()->name . " you've successfully logged in");
        } else {
            event(new authLog(['name' => '', 'email' => $loginData['email'], 'action' => 'failed login']));
            return redirect('/login')->with('error', 'Invalid credentials');
        }
    }
    public function registerAdmin(Request $request): RedirectResponse
    {
        $registerData = $request->validate([
            "name" => ['required', ' min:4', ' max:20'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "password" => ['required', 'min:8', 'confirmed']
        ]);
        $newUser = User::create($registerData);
        dispatch(new sendRegisterEmail(['sendTo' => $registerData['email'], 'email' => $registerData['email'], 'password' => $registerData['password']]));

        return redirect('/register')->with('success', 'New admin registered successfully!');
    }

    public function logout()
    {
        event(new authLog(['name' => auth()->user()->name, 'action' => 'logout']));
        auth()->logout();
        return redirect('/login')->with('success', 'You are now logged out');
    }
}
