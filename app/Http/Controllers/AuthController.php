<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
      return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8',
        ]);


        $login = auth()->attempt($credentials);

        if(!$login) {
            return back()->withErrors(['password' => 'Incorrect password!']);
        }

        return redirect()->route('dashboard');
    }

    // Logout redirection
    public function logout()
    {
        auth()->logout();
        session()->invalidate();
        return redirect()->route('login');
    }
}
