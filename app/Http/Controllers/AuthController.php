<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function adminLogin()
    {
        if (Auth::check()) {
            return redirect()->intended('/dashboard');
        }
        return view('auth.AdminLogin', [
            'title' => 'Admin Login'
        ]);
    }

    public function authenticate()
    {
        $credential = request()->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credential)) {
            request()->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->with('loginError', 'Email atau Password salah! Silahkan Coba lagi');
    }

    public function userLogin()
    {
        if (Auth::check()) {
            return redirect()->intended('/index');
        }
        return view('auth.UserLogin', [
            'title' => 'Login'
        ]);
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }
}
