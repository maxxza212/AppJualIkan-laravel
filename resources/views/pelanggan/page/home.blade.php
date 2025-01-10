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
<!-- Section for Images -->
<div class="container mt-4">
    <h2 class="text-center">Jenis Ikan</h2></br>
    <div class="row">
        <!-- Baris 1 -->
        <div class="col-md-4 mb-4"> <!-- Menggunakan mb-4 untuk memberikan margin bawah -->
            <img src="{{ asset('assets/Ikan Halfmoon.png') }}" class="img-fluid" alt="Image 1" style="height: 300px; object-fit: cover;">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('assets/Ikan Plakat.png') }}" class="img-fluid" alt="Image 2" style="height: 300px; object-fit: cover;">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('assets/Ikan serit.png') }}" class="img-fluid" alt="Image 3" style="height: 300px; object-fit: cover;">
        </div>
    </div>
    <div class="row">
        <!-- Baris 2 -->
        <div class="col-md-4 mb-4">
            <img src="{{ asset('assets/Ikan duble tail.png') }}" class="img-fluid" alt="Image 4" style="height: 300px; object-fit: cover;">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('assets/Ikan rosetail.png') }}" class="img-fluid" alt="Image 5" style="height: 300px; object-fit: cover;">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('assets/Ikan super delta.png') }} " class="img-fluid" alt="Image 6" style="height: 300px; object-fit: cover;">
        </div>
    </div>
</div>
@endsection