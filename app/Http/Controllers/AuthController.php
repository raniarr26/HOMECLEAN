<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('modal.login');
    }

    public function showRegister()
    {
        return view('modal.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'alamat' => 'required|string|max:255',
            'tlp' => 'required|string|max:15',
        ]);

        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'username' => $request->email,
            'password' => Hash::make($request->password),
            'alamat' => $request->alamat,
            'tlp' => $request->tlp,
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil, silahkan login.');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
