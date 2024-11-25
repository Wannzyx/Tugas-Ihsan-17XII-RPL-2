@extends('master.layout')


@section('title')
Education Platform-San
@endsection


@section('content')
<style>
    .font {
        font-family: "Poppins";
        
    }
    h1,{
        font-weight: 700;
        font-size: 45px;
    }


.c-button {
  color: #000;
  font-weight: 700;
  font-size: 16px;
  text-decoration: none;
  padding: 0.9em 1.6em;
  cursor: pointer;
  display: inline-block;
  vertical-align: middle;
  position: relative;
  z-index: 1;
}

.c-button--gooey {
  color: #06c8d9;
  text-transform: uppercase;
  letter-spacing: 2px;
  border: 4px solid #06c8d9;
  border-radius: 0;
  position: relative;
  transition: all 700ms ease;
}

.c-button--gooey .c-button__blobs {
  height: 100%;
  filter: url(#goo);
  overflow: hidden;
  position: absolute;
  top: 0;
  left: 0;
  bottom: -3px;
  right: -1px;
  z-index: -1;
}

.c-button--gooey .c-button__blobs div {
  background-color: #06c8d9;
  width: 34%;
  height: 100%;
  border-radius: 100%;
  position: absolute;
  transform: scale(1.4) translateY(125%) translateZ(0);
  transition: all 700ms ease;
}

.c-button--gooey .c-button__blobs div:nth-child(1) {
  left: -5%;
}

.c-button--gooey .c-button__blobs div:nth-child(2) {
  left: 30%;
  transition-delay: 60ms;
}

.c-button--gooey .c-button__blobs div:nth-child(3) {
  left: 66%;
  transition-delay: 25ms;
}

.c-button--gooey:hover {
  color: #fff;
}

.c-button--gooey:hover .c-button__blobs div {
  transform: scale(1.4) translateY(0) translateZ(0);
}

  /* Hover effect on card */
  .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    /* Title hover effect */
    .card-title:hover {
        color: #06c8d9; /* Color on hover */
    }

    /* Button hover effect */
    .btn-primary:hover {
        transform: scale(1.05);
        background-color: #0088cc;
    }

    /* Card shadow on load */
    .card {
        transition: box-shadow 0.3s ease;
    }
</style>
<div class="container-fluid" style="position: relative; height: 100vh; overflow: hidden;">
    <!-- Video Background -->
    <video autoplay muted loop id="background-video" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
        <source src="{{ asset('images/vid.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Dark Overlay (Gelap) -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);"></div>

    <!-- Content -->
    <div class="row d-flex justify-content-center align-items-center" style="position: relative; z-index: 1; height: 100vh;">
        <div class="col text-center text-white">
            <h1>Selamat Datang di Website Edukasi</h1>
            <!-- Deskripsi website -->
            <p class="ps-5 text-white-50" style="font-size: 1rem; line-height: 1.6;">
            Selamat datang di platform Pendidikan kami, tempat di mana siswa dapat menemukan sumber daya, tutorial, dan alat terbaik untuk pembelajaran yang efektif. <br>Kami bertujuan untuk membantu Anda mencapai kesuksesan akademik dan menjelajahi peluang belajar baru.
            </p>
<button class="c-button c-button--gooey bg-transparent"> Mulai !!
  <div class="c-button__blobs">
  <div></div>
  <div></div>
  <div></div>
  </div>
</button>
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display: block; height: 0; width: 0;">
  <defs>
    <filter id="goo">
      <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"></feGaussianBlur>
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo"></feColorMatrix>
      <feBlend in="SourceGraphic" in2="goo"></feBlend>
    </filter>
  </defs>
</svg>
        </div>
    </div>
</div>

<div class="container-fluid" style="padding-top: 50px;">
    <div class="row">
        <div class="col-md-12">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif


            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

           
            <h1 class="text-center">Kumpulan Postingan</h1>
        </div>
    </div>


    <div class="row mt-4">
    @foreach ($posts as $post)
        <div class="col-md-4 mb-4">
            <!-- Card with Shadow and Hover Effect -->
            <div class="card shadow-lg border-0 rounded-3 overflow-hidden h-100">
                <!-- Image with rounded corners -->
                @if ($post->image)
                    <img src="{{ asset('images/posts/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}" style="object-fit: cover; height: 250px;">
                @else
                    <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Placeholder Image" style="object-fit: cover; height: 250px;">
                @endif
                
                <div class="card-body">
                    <!-- Title with hover effect -->
                    <h5 class="card-title text-center text-dark fw-bold" style="font-size: 1.25rem; transition: color 0.3s;">
                        {{ $post->title }}
                    </h5>

                    <!-- Short description with ellipsis -->
                    <p class="card-text text-muted" style="font-size: 1rem; line-height: 1.6;">
                        {{ Str::limit($post->body, 100) }}
                    </p>

                    <!-- Button with custom style -->
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <a href="{{ route('posts.show', $post) }}" class="btn btn-primary text-white px-4 py-2 rounded-pill text-uppercase" style="transition: transform 0.2s ease;">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

</div>
@endsection
