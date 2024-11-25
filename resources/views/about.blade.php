@extends('master.layout')

@section('title')
    Tentang Kami
@endsection

@section('content')



<!-- Hero Section -->
<div class="container-fluid bg-info text-white text-center py-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="display-4 font-weight-bold">Mengapa Kami Membuat Platform Edukasi Ini?</h1>
            <p class="lead">Kami percaya bahwa pendidikan adalah kunci masa depan. Platform ini dibuat untuk memberikan akses yang lebih mudah dan efisien kepada semua pelajar di seluruh dunia.</p>
        </div>
    </div>
</div>

<!-- Alasan Kami Membangun Edukasi Platform -->
<div class="container py-5">
    <div class="row text-center">
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-body">
                    <i class="fa fa-graduation-cap fa-3x text-info mb-4"></i>
                    <h4 class="card-title">Akses Pendidikan untuk Semua</h4>
                    <p class="card-text">Kami ingin menyediakan platform yang bisa diakses oleh siapa saja, kapan saja, dan di mana saja. Pendidikan tidak harus terbatas oleh tempat atau waktu.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-body">
                    <i class="fa fa-users fa-3x text-info mb-4"></i>
                    <h4 class="card-title">Mendukung Komunitas Pembelajar</h4>
                    <p class="card-text">Kami percaya bahwa belajar bersama lebih efektif. Platform ini dirancang untuk menciptakan komunitas pembelajar yang saling mendukung dan berbagi pengetahuan.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-body">
                    <i class="fa fa-laptop-code fa-3x text-info mb-4"></i>
                    <h4 class="card-title">Teknologi Terdepan</h4>
                    <p class="card-text">Dengan memanfaatkan teknologi terkini, <br>kami menciptakan pengalaman belajar yang lebih interaktif dan menyenangkan melalui video, quiz, dan lainnya.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Visi dan Misi -->
<div class="container py-5">
    <div class="row text-center">
        <div class="col-md-12">
            <h2 class="font-weight-bold">Visi dan Misi Kami</h2>
            <p class="lead text-muted">Kami ingin menciptakan platform edukasi yang memberikan pengalaman belajar yang lebih baik, lebih mudah, dan lebih menyenangkan bagi setiap siswa di dunia.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h3 class="font-weight-bold">Visi</h3>
            <p class="text-muted">Menjadi platform pendidikan terdepan yang dapat memberikan akses pendidikan berkualitas kepada setiap orang, tanpa batasan.</p>
        </div>
        <div class="col-md-6">
            <h3 class="font-weight-bold">Misi</h3>
            <ul class="list-unstyled">
                <li><i class="fa fa-check-circle text-info"></i> Menyediakan sumber daya edukasi yang berkualitas tinggi dan relevan.</li>
                <li><i class="fa fa-check-circle text-info"></i> Menciptakan pengalaman belajar yang interaktif dan menyenangkan.</li>
                <li><i class="fa fa-check-circle text-info"></i> Menghubungkan pelajar dengan mentor dan komunitas untuk saling belajar dan berbagi.</li>
            </ul>
        </div>
    </div>
</div>

<!-- Progress Bar (Tujuan dan Progres Platform) -->
<div class="container py-5 bg-light">
    <div class="row text-center">
        <div class="col-md-12">
            <h2 class="font-weight-bold">Mencapai Tujuan Kami</h2>
            <p class="lead text-muted">Kami berkomitmen untuk terus berkembang dan memberikan nilai lebih kepada pengguna kami. Berikut adalah progres yang telah kami capai:</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h5>Pengguna Aktif</h5>
            <div class="progress">
                <div class="progress-bar bg-success" style="width: 80%" role="progressbar">80%</div>
            </div>
        </div>
        <div class="col-md-4">
            <h5>Kursus Tersedia</h5>
            <div class="progress">
                <div class="progress-bar bg-warning" style="width: 65%" role="progressbar">65%</div>
            </div>
        </div>
        <div class="col-md-4">
            <h5>Mentor Terdaftar</h5>
            <div class="progress">
                <div class="progress-bar bg-info" style="width: 50%" role="progressbar">50%</div>
            </div>
        </div>
    </div>
</div>

<!-- Testimoni Pengguna -->
<div class="container py-5">
    <div class="row text-center">
        <div class="col-md-12">
            <h2 class="font-weight-bold">Testimoni Pengguna</h2>
            <p class="lead text-muted">Berikut adalah beberapa testimoni dari pengguna kami yang telah merasakan manfaat dari platform ini:</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body">
                    <p class="text-muted">"Platform ini sangat membantu saya dalam memahami konsep-konsep yang sulit. Dengan cara yang lebih interaktif, belajar menjadi lebih menyenangkan!"</p>
                    <footer class="blockquote-footer">Siti, Mahasiswa</footer>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body">
                    <p class="text-muted">"Saya bisa belajar kapan saja dan di mana saja. Platform ini memungkinkan saya untuk terus berkembang sesuai dengan kebutuhan saya."</p>
                    <footer class="blockquote-footer">Budi, Profesional</footer>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body">
                    <p class="text-muted">"Saya sangat merekomendasikan platform ini! Sumber daya yang tersedia sangat lengkap dan mudah diakses." </p>
                    <footer class="blockquote-footer">Ana, Pelajar</footer>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
