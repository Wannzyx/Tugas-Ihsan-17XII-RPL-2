@extends('master.layout')

@section('title')
    Profil Saya
@endsection

@section('content')

<!-- Profil Section -->
<div class="container py-5">
    <div class="row justify-content-center">
        <!-- Profil Pribadi -->
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-body">
                    <!-- Judul Profil -->
                    <h2 class="text-center text-dark">Tentang Saya</h2>
                    <div class="d-flex justify-content-center mb-4">
                        <!-- Gambar Profil -->
                        <img src="{{ asset('images/vincent.jpg') }}" alt="Profil Picture" class="rounded-circle" width="150">
                    </div>

                    <!-- Deskripsi Diri -->
                    <h4 class="text-center">Muhammad Ihsan Miftachur Ridhwan</h4>
                    <p class="text-center text-muted">Web Developer, Designer, Gamer</p>
                    <p class="text-center">
                        Halo! Nama saya Wannz, saya seorang Web Developer yang fokus pada pembuatan aplikasi dan situs web modern dengan pengalaman dalam berbagai teknologi web. Saya bersemangat dalam belajar teknologi baru dan berbagi pengetahuan dengan orang lain.
                    </p>
                    
                    <!-- Keahlian -->
                    <div class="my-4">
                        <h5 class="text-dark">Keahlian Saya</h5>
                        <ul class="list-group">
                            <li class="list-group-item">HTML <span class="float-end">90%</span></li>
                            <li class="list-group-item">CSS <span class="float-end">80%</span></li>
                            <li class="list-group-item">JavaScript <span class="float-end">10%</span></li>
                            <li class="list-group-item">PHP / Laravel <span class="float-end">45%</span></li>
                        </ul>
                    </div>

                    <!-- Tombol Kontak -->
                    <div class="text-center mt-4">
                        <a href="mailto:emailanda@example.com" class="btn btn-primary">Kontak Saya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
