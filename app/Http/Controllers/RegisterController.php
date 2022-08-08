<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('login.register', [
            'title' => 'Register'
        ]);
    }

    public function register(Request $request)
    {
        $register = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        $register['password'] = bcrypt($register['password']);

        User::create($register);

        $request->session()->flash('success', 'Akun berhasil ditambahkan');

        return redirect('/login');

    }
}
