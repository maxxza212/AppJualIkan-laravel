@extends('pelanggan.layout.index')

@section('content')
<div class="container my-5">
    <!-- <h1 class="text-center mb-4">Contact Us</h1> -->

    <div class="row g-4">
        <!-- Contact Form -->
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h3 class="card-title mb-3">Send Us a Message</h3>
                    <form method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h3 class="card-title mb-3">Contact Information</h3>
                    <p>If you have any questions or concerns, feel free to reach out to us:</p>
                    <ul class="list-unstyled mb-4">
                        <li><strong>Address:</strong>Kaliwiro RT/RW 1/2,Kaliwiro kab. Wonosobo, Provinsi Jawa tengah, Indonesia.</li></br>
                        <li><strong>Email:</strong> TokoIkan@gmail.com</li></br>
                        <li><strong>Phone:</strong> +62 857 4280 0718</li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
