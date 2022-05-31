<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $r)
    {
        $cred = $r->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($cred)) {
            $r->session()->regenerate();

            return redirect()->intended('/data');
        }

        return back()->with('loginError', 'invalid credentials');
    }

    public function logout(Request $r) {
        Auth::logout();
        $r->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
