<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $attr = $request->validate([
            'name' => 'required|min:1',
            'username' => 'required|min:1|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|min:3',
        ]);
        $attr['password'] = bcrypt($attr['password']);

        User::create($attr);

        return redirect('/login')->with('success', 'Register succeed, you can login now!');
    }
}
