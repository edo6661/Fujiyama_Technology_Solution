<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }
    public function signIn(LoginRequest $request)
    {
        // Autentikasi user
        $request->authenticate();

        // Regenerasi session ID untuk keamanan
        $request->session()->regenerate();

        // Redirect berdasarkan intended URL atau ke dashboard
        return redirect()->intended(route('dashboard'));
    }
    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidasi session untuk keamanan
        $request->session()->invalidate();
        
        // Regenerasi token CSRF
        $request->session()->regenerateToken();

        // Redirect ke halaman login
        return redirect()->route('login');
    }

}
