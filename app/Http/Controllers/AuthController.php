<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('apps.app-login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
                            'username' => "required",
                            'password' => "required",
        ],
        ['username.required'=> 'Username tidak bpleh kosong!',
         'password.required'=> 'Password tidak bpleh kosong!',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }
}
