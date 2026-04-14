<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    // Tampilkan semua user
    public function index()
    {
        $users = DB::table('pengguna')->get();
        return view('dashboard', compact('users'));
    }

    // Form tambah user
    public function create()
    {
        return view('create');
    }

    // Simpan user baru
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|min:3|max:50',
            'password' => 'required|min:3'
        ]);

        DB::table('pengguna')->insert([
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/dashboard');
    }

    // Form edit user
    public function edit($id)
    {
        $user = DB::table('pengguna')
            ->where('id_pengguna', $id)
            ->first();

        return view('edit', compact('user'));
    }

    // Update user
    public function update(Request $request, $id)
    {
        // ✅ TARUH DI SINI JUGA
        $request->validate([
            'username' => 'required|min:3|max:50',
            'password' => 'nullable|min:3'
        ]);

        $data = [
            'username' => $request->username
        ];

        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        }

        DB::table('pengguna')
            ->where('id_pengguna', $id)
            ->update($data);

        return redirect('/dashboard');
    }

    // Hapus user
    public function delete($id)
    {
        DB::table('pengguna')
            ->where('id_pengguna', $id)
            ->delete();

        return redirect('/dashboard');
    }
}
