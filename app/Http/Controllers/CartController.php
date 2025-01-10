<?php

// app/Http/Controllers/CartController.php
namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $cart = new Cart();
        $cart->product_name = $request->product_name;
        $cart->product_image = $request->product_image;
        $cart->quantity = 1; // Atur jumlah default
        $cart->save();

        return redirect()->route('cart.index')->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

// app/Http/Controllers/CartController.php

public function index(Request $request)
{
    $carts = Cart::all();
    $title = "Keranjang Belanja"; // Atur judul sesuai kebutuhan
    return view('pelanggan.page.keranjang', compact('carts', 'title'));
}

    public function removeFromCart($id)
{
    $cart = Cart::findOrFail($id);
    $cart->delete();

    return redirect()->route('cart.index')->with('success', 'Produk berhasil dihapus dari keranjang!');
}
}