<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showIndexLogin(){
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validate login credentials
        $credentials = $request->validate([
            'email' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);
        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect()->intended('/trang-chu');
        } else {
            // Authentication failed
            return back()->withErrors([
                'username' => 'Invalid credentials',
            ]);
        }
    }

    public function showIndexForgotPass(){
        return view('auth.forGotPass');
    }
}
