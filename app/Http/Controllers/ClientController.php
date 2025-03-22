<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function showLoginForm()
    {
        return view('client.login'); // Mengarahkan ke view login client
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Redirect ke halaman dashboard
            return redirect()->intended('dashboard');
        }

        // Jika login gagal
        return back()->withErrors([
            'username' => 'Kredensial yang diberikan tidak cocok.',
        ]);
    }

    public function showRegistrationForm()
{
    return view('client.register'); // Mengarahkan ke view registrasi client
}

public function register(Request $request)
{
    $request->validate([
        'username' => 'required|string|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
        'email' => 'required|string|email|max:255|unique:users',
    ]);

    // Buat pengguna baru
    \App\Models\User::create([
        'username' => $request->username,
        'password' => bcrypt($request->password),
        'email' => $request->email,
    ]);

    // Redirect ke halaman login atau dashboard
    return redirect()->route('client.login')->with('success', 'Registrasi berhasil! Silakan login.');
}
public function clientForgetPassword()
{
    return view('client.forget_password'); // Mengarahkan ke view lupa password client
}

}