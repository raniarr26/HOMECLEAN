<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dashboard', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required',
            'level' => 'required',
        ]);

        User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'level' => $request->level,
        ]);

        return redirect()->route('dashboard');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('edit_users', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:users,username,'.$id,
            'level' => 'required',
        ]);

        $user = User::find($id);
        $user->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => $request->password ? bcrypt($request->password) : $user->password,
            'level' => $request->level,
        ]);

        return redirect()->route('dashboard');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('dashboard');
    }
}
