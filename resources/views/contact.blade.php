@extends('master.layout')

@section('title')
    Kontak Kami
@endsection

@section('content')

<style>
    /* Style for Map Container */
.map-container {
    position: relative;
    padding-bottom: 56.25%; /* Maintain 16:9 aspect ratio */
    height: 0;
    overflow: hidden;
    max-width: 100%;
    height: 100%;
    padding-top: 25px; /* Adjust padding for positioning */
}

/* Make the map responsive */
.map-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

/* Custom styles for Contact Form */
form .form-control {
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    border: 1px solid #ddd;
}

form .form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
}

/* Button Styling */
button.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    border-radius: 25px;
    padding: 10px 30px;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

button.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

</style>
<!-- Hero Section -->
<div class="container-fluid bg-info text-white text-center py-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="display-4 font-weight-bold">Hubungi Kami</h1>
            <p class="lead">Kami selalu siap membantu Anda. Silakan kirimkan pesan atau pertanyaan Anda di sini.</p>
        </div>
    </div>
</div>

<!-- Contact Section with Two Columns: Form on Left, Map on Right -->
<div class="container py-5">
    <div class="row">
        <!-- Left Side: Contact Form -->
        <div class="col-md-6">
            <h2 class="font-weight-bold mb-4">Formulir Kontak</h2>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="name" class="font-weight-bold">Nama</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Anda" required>
                </div>
                <div class="form-group mt-3">
                    <label for="email" class="font-weight-bold">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukkan Email Anda" required>
                </div>
                <div class="form-group mt-3">
                    <label for="message" class="font-weight-bold">Pesan</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Masukkan Pesan Anda" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Kirim Pesan</button>
            </form>
        </div>

        <!-- Right Side: Google Map -->
        <div class="col-md-6">
            <h2 class="font-weight-bold mb-4">Lokasi Kami</h2>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.243667852883!2d111.4672044744799!3d-7.8545473943308965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78b9e11db59adf%3A0x68db5390c5f0d1f5!2sJl.%20Pendidikan%20No.123%2C%20Ponorogo!5e0!3m2!1sen!2sid!4v1617362790249!5m2!1sen!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>

@endsection
