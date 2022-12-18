<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller

{
    public function ShowLoginForm()
    {
        return view('auth.login');

    }
    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);


        $user = \App\Models\User::where('email', $request->email)->first();

        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => 'These credentials do not match our records.',
            ]);
        }
        $request->session()->regenerate();
        session()->flash('status', 'Link verification email has been sent into your email
        address.');
        return back();
    }
}
