@extends('pelanggan.layout.index')

@section('content')
<div id="bannerCarousel" class="carousel slide container-fluid p-0" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- Item 1 -->
        <div class="carousel-item active">
            <img src="{{ asset('assets/Jumbotron 1.svg') }}" alt="Banner 1" class="d-block w-100" style="height: 400px; object-fit: cover;">
        </div>
        <!-- Item 2 -->
        <div class="carousel-item">
            <img src="{{ asset('assets/Jumbotron 2.svg') }}" alt="Banner 2" class="d-block w-100" style="height: 400px; object-fit: cover;">
        </div>
    </div>

    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Section for Products -->
<div class="container mt-4">
    <h2 class="text-center">Produk Kami</h2></br>
    <div class="row">
        <!-- Product Item 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('assets/duble tail.png') }}" class="card-img-top" alt="Double Tail">
                <div class="card-body">
                    <h5 class="card-title"> Double Tail</h5>
                    <p class="card-text" style="color:#006786e0;">Harga : Rp. 100.000</p>
                    @auth
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_name" value="Double Tail">
                        <input type="hidden" name="product_image" value="{{ asset('assets/duble tail.png') }}">
                        <button type="submit" class="btn btn-custom">
                            <i class="fas fa-shopping-cart"></i> Tambah ke Keranjang
                        </button>
                    </form>
                    @else
                    <p class="text-danger">Silakan <a href="{{ route('login') }}">login</a> untuk menambahkan produk ke keranjang.</p>
                    @endauth
                </div>
            </div>
        </div>
        <!-- Product Item 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('assets/Halfmoon.png') }}" class="card-img-top" alt="Halfmoon">
                <div class="card-body">
                    <h5 class="card-title">Halfmoon</h5>
                    <p class="card-text" style="color:#006786e0;">Harga : Rp. 100.000.</p>
                    @auth
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_name" value="Halfmoon">
                        <input type="hidden" name="product_image" value="{{ asset('assets/Halfmoon.png') }}">
                        <button type="submit" class="btn btn-custom">
                            <i class="fas fa-shopping-cart"></i> Tambah ke Keranjang
                        </button>
                    </form>
                    @else
                    <p class="text-danger">Silakan <a href="{{ route('login') }}">login</a> untuk menambahkan produk ke keranjang.</p>
                    @endauth
                </div>
            </div>
        </div>
        <!-- Product Item 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('assets/Plakat.png') }}" class="card-img-top" alt="Plakat">
                <div class="card-body">
                    <h5 class="card-title">Plakat</h5>
                    <p class="card-text" style="color:#006786e0;">Harga : Rp. 100.000</p>
                    @auth
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_name" value="Plakat">
                        <input type="hidden" name="product_image" value="{{ asset('assets/Plakat.png') }}">
                        <button type="submit" class="btn btn-custom">
                            <i class="fas fa-shopping-cart"></i> Tambah ke Keranjang
                        </button>
                    </form>
                    @else
                    <p class="text-danger">Silakan <a href="{{ route('login') }}">login</a> untuk menambahkan produk ke keranjang.</p>
                    @endauth
                </div>
            </div>
        </div>
        <!-- Product Item 4 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('assets/rosetail.png') }}" class="card-img-top" alt="Rosetail">
                <div class="card-body">
                    <h5 class="card-title">Rosetail</h5>
                    <p class="card-text" style="color:#006786e0;">Harga : Rp. 100.000</p>
                    @auth
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_name" value="Rosetail">
                        <input type="hidden" name="product_image" value="{{ asset('assets/rosetail.png') }}">
                        <button type="submit" class="btn btn-custom">
                            <i class="fas fa-shopping-cart"></i> Tambah ke Keranjang
                        </button>
                    </form>
                    @else
                    <p class="text-danger">Silakan <a href="{{ route('login') }}">login</a> untuk menambahkan produk ke keranjang.</p>
                    @endauth
                </div>
            </div>
        </div>
        <!-- Product Item 5 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('assets/serit.png') }}" class="card-img-top" alt="Crown Tail">
                <div class="card-body">
                    <h5 class="card-title">Crown Tail</h5>
                    <p class="card-text" style="color:#006786e0;">Harga : Rp. 100.000</p>
                    @auth
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_name" value="Crown Tail">
                        <input type="hidden" name="product_image" value="{{ asset('assets/serit.png') }}">
                        <button type="submit" class="btn btn-custom">
                            <i class="fas fa-shopping-cart"></i> Tambah ke Keranjang
                        </button>
                    </form>
                    @else
                    <p class="text-danger">Silakan <a href="{{ route('login') }}">login</a> untuk menambahkan produk ke keranjang.</p>
                    @endauth
                </div>
            </div>
        </div>
        <!-- Product Item 6 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('assets/super delta.png') }}" class="card-img-top" alt="Super Delta">
                <div class="card-body">
                    <h5 class="card-title">Super Delta</h5>
                    <p class="card-text" style="color:#006786e0;">Harga : Rp. 100.000</p>
                    @auth
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_name" value="Super Delta">
                        <input type="hidden" name="product_image" value="{{ asset('assets/super delta.png') }}">
                        <button type="submit" class="btn btn-custom">
                            <i class="fas fa-shopping-cart"></i> Tambah ke Keranjang
                        </button>
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