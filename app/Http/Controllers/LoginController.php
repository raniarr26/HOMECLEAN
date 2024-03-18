<?php
// app/Http/Controllers/LoginController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autentikasi berhasil
            return redirect()->intended('/');
        } else {
            // Autentikasi gagal
            return redirect()->back()->withInput()->withErrors(['email' => 'These credentials do not match our records.']);
        }
    }
}