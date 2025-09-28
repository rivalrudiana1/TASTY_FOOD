<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman login.
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Menangani proses login TANPA HASH.
     * PERINGATAN: Sangat tidak aman, hanya untuk demonstrasi.
     */
    public function login(Request $request)
    {
        // 1. Validasi input dari form
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // 2. Cari pengguna berdasarkan email
        $user = User::where('email', $request->email)->first();

        // 3. Cek apakah pengguna ada DAN password teks biasa cocok
        if ($user && $user->password === $request->password) {

            // 4. Jika cocok, login pengguna menggunakan sistem Auth Laravel
            // Ini akan membuat session dan kita bisa menggunakan auth() helper
            Auth::login($user);

            // 5. Regenerate session untuk keamanan
            $request->session()->regenerate();

            // 6. Redirect ke halaman dashboard
            return redirect()->intended('dashboard');
        }

        // 7. Jika gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan salah.',
        ])->onlyInput('email');
    }

    /**
     * Menangani proses logout.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function register()
    {
        return view('register');
    }

    public function registerStore(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Create user (without hash, for demonstration only)
        $user = \App\Models\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // Set session
        $request->session()->put('user_id', $user->id);
        return redirect()->intended('dashboard');
    }
}
