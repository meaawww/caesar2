<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $user = DB::table('pengguna')
            ->where('username', $request->username)
            ->first();

        if ($user && Hash::check($request->password, $user->password)) {
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
