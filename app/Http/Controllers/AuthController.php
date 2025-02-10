<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Masyarakat;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
{
    $credentials = $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    $user = Masyarakat::where('username', $request->username)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return back()->withErrors(['login' => 'Username atau password salah.'])->withInput();
    }

    Auth::login($user); // Login manual pakai model
    $request->session()->regenerate();

    return redirect()->intended('/');
}


    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:tb_masyarakat,username',
            'password' => 'required|min:6',
            'nama_lengkap' => 'required',
            'telp' => 'required',
        ]);

        $user = Masyarakat::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'nama_lengkap' => $request->nama_lengkap,
            'telp' => $request->telp,
        ]);

        if (!$user) {
            return back()->withErrors(['register' => 'Gagal menyimpan data!']);
        }

        Auth::guard('web')->login($user);
        $request->session()->regenerate();

        return redirect('/');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
