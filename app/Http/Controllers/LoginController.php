<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login', [
            'title' => 'Login'
        ]);
    }

    public function login(Request $request)
    {
        $login = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($login)) 
        {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return  back()->with('loginError', 'Login Error');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->regenerate();
        $request->session()->invalidate();

        return redirect('/login');
    }
}
