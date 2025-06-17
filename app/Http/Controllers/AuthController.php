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
        $request->authenticate();
        $request->session()->regenerate();
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
