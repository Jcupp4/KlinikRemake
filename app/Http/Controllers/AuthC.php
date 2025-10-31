<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthC extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }
        return view('auth.login');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        // Menghapus session & token lama
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/'); // arahkan ke halaman awal
    }

    public function register()
    {
        if (Auth::check()) {
            return redirect('/dashboard'); // Atau route yang kamu pakai
        }
        return view('auth.register');
    }

    public function registerStore(Request $request)
    {
        // 1) Validate
        $data = $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // 2) Create
        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        // 3) (Optional) Log them in
        auth()->login($user);

        // 4) Redirect
        return redirect()->route('/login')
            ->with('success', 'Registration successful!');
    }


    public function loginStore(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->has('remember'))) {
            $request->session()->regenerate();

            $user = Auth::user();
            // Simpan roles ke session
            $roles = $user->roles->pluck('name')->toArray();
            session(['roles' => $roles]);

            // Redirect sesuai role utama (ambil role pertama saja)
            if (in_array('admin', $roles)) {
                return redirect()->route('dashboard');
            } elseif (in_array('resepsionis', $roles)) {
                return redirect()->route('resepsionis.dashboard');
            } elseif (in_array('farmasi', $roles)) {
                return redirect()->route('farmasi.dashboard');
            } elseif (in_array('dokter', $roles)) {
                return redirect()->route('dokter.dashboard');
            } else {
                // Default fallback
                return redirect('/dashboard');
            }
        }

        return back()->with('loginError', 'Login Failed');
    }
}
