@extends('admin.layout.index') <!-- Menggunakan index.blade.php sebagai layout -->

@section('content')
    <div class="container mt-4">
        <!-- <h1>{{ $title }}</h1> -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Statistik Pengguna</h5>
                    </div>
                    <div class="card-body">
                        <p>Total Pengguna: {{ $totalUsers }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Statistik Produk</h5>
                    </div>
                    <div class="card-body">
                        <p>Total Produk: {{ $totalProducts }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tambahkan grafik di sini -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Grafik Statistik</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="myChart"></canvas> <!-- Elemen canvas untuk grafik -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Data untuk grafik
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar', // Jenis grafik (bar, line, pie, dll)
            data: {
                labels: ['Pengguna', 'Produk'], // Label untuk sumbu X
                datasets: [{
                    label: 'Jumlah',
                    data: [{{ $totalUsers }}, {{ $totalProducts }}], // Data untuk grafik
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true // Memulai sumbu Y dari 0
                    }
                }
            }
        });
    </script>
@endsection