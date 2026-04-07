<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if ($request->username === 'admin' && $request->password === '123') {
            session(['login' => true]);
            return redirect('/dashboard');
        }

        return back()->with('error', 'Login gagal!');
    }

    public function dashboard()
    {
        if (!session('login')) {
            return redirect('/');
        }

        return view('dashboard');
    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }
}
 