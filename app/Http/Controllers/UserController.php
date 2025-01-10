<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showRegisterForm()
    {
        return view('pelanggan.modal.registerPelanggan ', [
            'title' => 'Register',
        ]);
    }

    public function register(Request $request)
    {
        // Validasi dan proses pendaftaran
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Buat pengguna baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }

     public function index(Request $request)
    {
        // Arahkan ke halaman yang diinginkan, misalnya halaman utama
        return view('welcome', [
            'title' => 'Welcome Page',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Mengeluarkan pengguna
        return redirect()->route('Home')->with('success', 'You have been logged out.'); // Redirect to the home route
    }

}