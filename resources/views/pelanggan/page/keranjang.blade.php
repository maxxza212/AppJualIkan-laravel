@extends('pelanggan.layout.index')

@section('content')
<div class="container mt-4">
    <h2 class="text-center">Keranjang Belanja</h2></br>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        @if($carts->isEmpty())
            <div class="col-12 text-center">
                <p>Keranjang Anda kosong.</p>
            </div>
        @else
            @foreach($carts as $cart)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $cart->product_image }}" class="card-img-top" alt="{{ $cart->product_name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $cart->product_name }}</h5>
                            <p class="card-text">Jumlah: {{ $cart->quantity }}</p>
                            <form action="{{ route('cart.remove', $cart->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Tambahkan tombol Checkout di sini -->
            <div class="col-12 text-center mt-4">
                <a href="https://wa.me/085742800718" class="btn btn-lg" style="background-color: #006786e0; color: white; border: none; text-decoration: none;">Checkout</a>
            </div>
        @endif
    </div>
</div>
@endsection