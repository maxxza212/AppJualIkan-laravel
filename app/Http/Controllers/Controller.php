<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\modelDetailTransaksi;
use App\Models\product;
use App\Models\tblCart;
use App\Models\transaksi;
use App\Models\User;
use Illuminate\Http\Request; // Pastikan ini ada
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(Request $request) {
    return view('pelanggan.page.home', [
        'title' => 'Home',
        'success' => $request->session()->get('success'),
    ]);
}

    public function shop(){
        return view('pelanggan.page.shop',[
            'title' => 'Shop',
        ]);
    }

    public function contact(){
        return view('pelanggan.page.contact',[
            'title' => 'Contact',
        ]);
    }

    public function keranjang(){
        return view('pelanggan.page.keranjang',[
            'title' => 'Keranjang',
        ]);
    }

    public function login()
    {
        return view('pelanggan.modal.loginPelanggan', [
            'title' => 'Login',
        ]);
    }

    public function loginProses(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek kredensial
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();

            // Cek apakah pengguna adalah admin
            if ($user->email === 'admingacor@gmail.com' && $request->password === 'admin123') {
                // Jika admin, redirect ke halaman admin
                return redirect()->route('admin.index2')->with('success', 'Login successful as admin.');
            } else {
                // Jika bukan admin, redirect ke halaman home
                return redirect()->route('Home')->with('success', 'Login successful.');
            }
        } else {
            // Jika login gagal, kembali ke halaman login dengan pesan error
            return back()->with('error', 'Invalid email or password.');
        }
    }

    public function index2()
    {
        $name='Admin';
        return view('admin.layout.index', [
            'title' => 'Admin Dashboard',
            'name' => $name,
        ]);
    }

    public function dashboard()
    {
        $totalUsers = User::count(); // Menghitung total pengguna
        $name = 'Admin'; // Definisikan variabel $name

        return view('admin.page.dashboard', [
            'title' => 'Admin Dashboard',
            'totalUsers' => $totalUsers,
            'totalProducts' => 6, // Contoh data statis
            'name' => $name, // Kirim variabel $name ke tampilan
        ]);
    }


    public function storePelanggan(Request $request)
{
    // Validate the request data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:pelanggans,email',
        'password' => 'required|string|min:8|confirmed',
    ]);

    // Create a new customer
    $pelanggan = new Pelanggan();
    $pelanggan->name = $request->name;
    $pelanggan->email = $request->email;
    $pelanggan->password = bcrypt($request->password); // Hash the password
    $pelanggan->save();

    // Redirect or return response
    return redirect()->route('Home')->with('success', 'Registration successful!');
}

    public function registerPelanggan()
    {
        return view('pelanggan.modal.registerPelanggan', [
            'title' => 'Register Pelanggan',
        ]);
    }
}
