<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Fungsi menampilkan halaman login
    public function tampilkan()
    {
        return view('login');
    }

    // Fungsi mengambil data user (dummy)
    public function getData()
    {
        return [
            [
                'username' => 'admin',
                'password' => '12345',
                'role' => 'admin'
            ],
            [
                'username' => 'guru',
                'password' => '12345',
                'role' => 'guru'
            ],
            [
                'username' => 'wali',
                'password' => '12345',
                'role' => 'wali_kelas'
            ]
        ];
    }

    // Proses login
    public function prosesLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        $dataUser = $this->getData();

        foreach ($dataUser as $user) {
            if (
                $request->username == $user['username'] &&
                $request->password == $user['password'] &&
                $request->role == $user['role']
            ) {
                return redirect('/dashboard')->with('success', 'Login berhasil!');
            }
        }

        return redirect('/login')->with('error', 'Login gagal!');
    }
}