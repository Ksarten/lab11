<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        return view('login', ['user' => Auth::user()]);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->withErrors([
            'success' => 'Вы успешно вышли из системы.',
        ]);
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->withErrors([
                'success' => 'Вы успешно вошли в систему.',
            ]);
        }

        return back()->withErrors([
            'error' => 'Неправильный логин или пароль.',
        ])->onlyInput('email', 'password');
    }
}
