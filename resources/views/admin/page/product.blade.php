@extends('admin.layout.index')

@section('title', 'Daftar Produk') <!-- Menentukan judul halaman -->

@section('content')
    <div class="container mt-4">
        <h1>Daftar Produk</h1>
        <div class="row">
            <!-- Produk 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('assets/super delta.png') }}" class="card-img-top" alt="Super Delta">
                    <div class="card-body">
                        <h5 class="card-title">Super Delta</h5>
                        <p class="card-text">Deskripsi singkat tentang produk ini.</p>
                        <p class="text-success">Sisa Stok: <strong>1</strong></p> <!-- Menampilkan sisa stok -->
                        @auth
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_name" value="Super Delta">
                            <input type="hidden" name="product_image" value="{{ asset('assets/super delta.png') }}">
                        </form>
                        @else
                        <p class="text-danger">Silakan <a href="{{ route('login') }}">login</a> untuk menambahkan produk ke keranjang.</p>
                        @endauth
                    </div>
                </div>
            </div>
            <!-- Tambahkan produk lain di sini -->
             <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('assets/Halfmoon.png') }}" class="card-img-top" alt="Super Delta">
                    <div class="card-body">
                        <h5 class="card-title">Halfmoon</h5>
                        <p class="card-text">Deskripsi singkat tentang produk ini.</p>
                        <p class="text-success">Sisa Stok: <strong>1</strong></p> <!-- Menampilkan sisa stok -->
                        @auth
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_name" value="Super Delta">
                            <input type="hidden" name="product_image" value="{{ asset('assets/super delta.png') }}">
                        </form>
                        @else
                        <p class="text-danger">Silakan <a href="{{ route('login') }}">login</a> untuk menambahkan produk ke keranjang.</p>
                        @endauth
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('assets/duble tail.png') }}" class="card-img-top" alt="Super Delta">
                    <div class="card-body">
                        <h5 class="card-title">Duble Tail</h5>
                        <p class="card-text">Deskripsi singkat tentang produk ini.</p>
                        <p class="text-success">Sisa Stok: <strong>1</strong></p> <!-- Menampilkan sisa stok -->
                        @auth
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_name" value="Super Delta">
                            <input type="hidden" name="product_image" value="{{ asset('assets/super delta.png') }}">
                        </form>
                        @else
                        <p class="text-danger">Silakan <a href="{{ route('login') }}">login</a> untuk menambahkan produk ke keranjang.</p>
                        @endauth
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('assets/Plakat.png') }}" class="card-img-top" alt="Super Delta">
                    <div class="card-body">
                        <h5 class="card-title">Plakat</h5>
                        <p class="card-text">Deskripsi singkat tentang produk ini.</p>
                        <p class="text-success">Sisa Stok: <strong>1</strong></p> <!-- Menampilkan sisa stok -->
                        @auth
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_name" value="Super Delta">
                            <input type="hidden" name="product_image" value="{{ asset('assets/super delta.png') }}">
                        </form>
                        @else
                        <p class="text-danger">Silakan <a href="{{ route('login') }}">login</a> untuk menambahkan produk ke keranjang.</p>
                        @endauth
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('assets/serit.png') }}" class="card-img-top" alt="Super Delta">
                    <div class="card-body">
                        <h5 class="card-title">Crown Tail</h5>
                        <p class="card-text">Deskripsi singkat tentang produk ini.</p>
                        <p class="text-success">Sisa Stok: <strong>1</strong></p> <!-- Menampilkan sisa stok -->
                        @auth
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_name" value="Super Delta">
                            <input type="hidden" name="product_image" value="{{ asset('assets/super delta.png') }}">
                        </form>
                        @else
                        <p class="text-danger">Silakan <a href="{{ route('login') }}">login</a> untuk menambahkan produk ke keranjang.</p>
                        @endauth
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('assets/rosetail.png') }}" class="card-img-top" alt="Super Delta">
                    <div class="card-body">
                        <h5 class="card-title">Rosetail</h5>
                        <p class="card-text">Deskripsi singkat tentang produk ini.</p>
                        <p class="text-success">Sisa Stok: <strong>1</strong></p> <!-- Menampilkan sisa stok -->
                        @auth
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_name" value="Super Delta">
                            <input type="hidden" name="product_image" value="{{ asset('assets/super delta.png') }}">
                        </form>
                        @else
                        <p class="text-danger">Silakan <a href="{{ route('login') }}">login</a> untuk menambahkan produk ke keranjang.</p>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection