<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Menampilkan halaman registrasi
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Menyimpan data registrasi
    public function register(Request $request)
    {
        $request->validate([
            // 'name' => 'required|string|max:255',
            'username' => 'required|string|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|in:admin,gurubk,walikelas,murid',
        ]);

        $user = User::create([
            // 'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        // Otentikasi pengguna setelah registrasi
        Auth::login($user);

        // Redirect ke dashboard yang sesuai berdasarkan peran (role) pengguna
        if ($request->role === 'admin') {
            return redirect('/login');
        } elseif ($request->role === 'gurubk') {
            return redirect('/login');
        } elseif ($request->role === 'walikelas') {
            return redirect('/login');
        } elseif ($request->role === 'murid') {
            return redirect('/login');
        }
    }

    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses otentikasi
    public function login(Request $request)
    {
        $credentials = $request->validate([
            // 'username' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Redirect ke dashboard yang sesuai berdasarkan peran (role) pengguna
            if ($user->role === 'admin') {
                return redirect('/dashboard');
            } elseif ($user->role === 'gurubk') {
                return redirect('/');
            } elseif ($user->role === 'walikelas') {
                return redirect('/');
            } elseif ($user->role === 'murid') {
                return redirect('/');
            }
        }

        // Jika otentikasi gagal, redirect kembali ke halaman login dengan pesan error
        return redirect('/login')->withErrors(['email' => 'Kemungkinan Email dan Password Anda salah, periksa kembali.']);
    }

    // Logout pengguna
    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
