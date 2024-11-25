<style>
  /* Styling untuk form pencarian */
  .form {
    --input-text-color: #fff;
    --input-bg-color: #283542;
    --focus-input-bg-color: transparent;
    --text-color: #949faa;
    --active-color: #1b9bee;
    --width-of-input: 200px;
    --inline-padding-of-input: 1.2em;
    --gap: 0.9rem;
  }

  /* Form pencarian */
  .form {
    font-size: 0.9rem;
    display: flex;
    gap: 0.5rem;
    align-items: center;
    width: var(--width-of-input);
    position: relative;
    isolation: isolate;
  }

  /* Background fancy saat fokus */
  .fancy-bg {
    position: absolute;
    width: 100%;
    inset: 0;
    background: var(--input-bg-color);
    border-radius: 30px;
    height: 100%;
    z-index: -1;
    pointer-events: none;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
  }

  /* Label input pencarian */
  label {
    width: 100%;
    padding: 0.8em;
    height: 40px;
    padding-inline: var(--inline-padding-of-input);
    display: flex;
    align-items: center;
  }

  .search,.close-btn {
    position: absolute;
  }

  /* Styling icon pencarian */
  .search {
    fill: var(--text-color);
    left: var(--inline-padding-of-input);
  }

  svg {
    width: 17px;
    display: block;
  }

  /* Styling tombol close */
  .close-btn {
    border: none;
    right: var(--inline-padding-of-input);
    box-sizing: border-box;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    padding: 0.1em;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background: var(--active-color);
    opacity: 0;
    visibility: hidden;
  }

  /* Styling input pencarian */
  .input {
    color: var(--input-text-color);
    width: 100%;
    margin-inline: min(2em,calc(var(--inline-padding-of-input) + var(--gap)));
    background: none;
    border: none;
  }

  .input:focus {
    outline: none;
  }

  .input::placeholder {
    color: var(--text-color)
  }

  /* Mengubah background input saat fokus */
  .input:focus ~ .fancy-bg {
    border: 1px solid var(--active-color);
    background: var(--focus-input-bg-color);
  }

  /* Menampilkan tombol close saat mengetik */
  .input:valid ~ .close-btn {
    opacity: 1;
    visibility: visible;
  }

  /* CSS tambahan untuk tombol */
  .shadow__btn {
    padding: 10px 20px;
    border: none;
    font-size: 13px;
    color: #fff;
    border-radius: 7px;
    font-weight: 500;
    transition: 0.5s;
    transition-property: box-shadow;
    background: rgb(0,140,255);
    box-shadow: 0 0 25px rgb(0,140,255);
  }

  .shadow__btn:hover {
    box-shadow: 0 0 5px rgb(0,140,255),
                0 0 25px rgb(0,140,255),
                0 0 50px rgb(0,140,255),
                0 0 100px rgb(0,140,255);
  }

  .paste-button {
  position: relative;
  display: block;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.button {
  background-color: #4CAF50; /* Button tetap hijau */
  color: #212121;
  padding: 10px 15px;
  font-size: 15px;
  font-weight: bold;
  border: 2px solid transparent;
  border-radius: 15px;
  cursor: pointer;
}

.dropdown-content {
  display: none;
  font-size: 13px;
  position: absolute;
  z-index: 1;
  min-width: 200px;
  background-color: rgb(0, 140, 255); /* Background dropdown berwarna biru */
  border: 2px solid #212121;
  border-radius: 0px 15px 15px 15px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
  color: #fff; /* Warna teks putih */
  padding: 8px 10px;
  text-decoration: none;
  display: block;
  transition: 0.1s;
}

.dropdown-content a:hover {
  background-color: #212121; /* Warna latar belakang hitam saat hover */
  color: #fff; /* Teks tetap putih */
}

.dropdown-content a:focus {
  background-color: rgb(0, 140, 255); /* Tetap biru saat fokus */
  color: #fff;
}

.dropdown-content #top:hover {
  border-radius: 0px 13px 0px 0px;
}

.dropdown-content #bottom:hover {
  border-radius: 0px 0px 13px 13px;
}

.paste-button:hover button {
  border-radius: 15px 15px 0px 0px;
}

.paste-button:hover .dropdown-content {
  display: block;
}

</style>

<nav class="navbar navbar-expand-lg bg-dark sticky-top">
  <div class="container-fluid">
    <!-- Logo Navbar di kiri -->
    <a class="navbar-brand text-light" href="#">
      <img src="https://i.postimg.cc/NfpmB777/c.png" alt="Logo" width="30" height="auto">
    </a>

    <!-- Tombol toggle untuk mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu Navigasi di kiri -->
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link text-light" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="{{ route('profile') }}">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="{{ route('about') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="{{ route('contact') }}">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="{{ route('users') }}">Users</a>
        </li>
      </ul>
    </div>

    <!-- Form Pencarian di tengah -->
    <form class="form position-absolute start-50 translate-middle-x">
      <label for="search">
        <input class="input" type="text" required="" placeholder="Cari kategori" id="search">
        <div class="fancy-bg"></div>
        <div class="search">
          <svg viewBox="0 0 24 24" aria-hidden="true" class="r-14j79pv r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-4wgw6l r-f727ji r-bnwqim r-1plcrui r-lrvibr">
            <g>
              <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>
            </g>
          </svg>
        </div>
        <button class="close-btn" type="reset">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </label>
    </form>

    <!-- Tombol Sign In dan Sign Up di pojok kanan -->
    <div class="d-flex ml-auto">
<div class="paste-button me-4">
  <button class="shadow__btn text-decoration-none">Menu &nbsp; ▼</button>
  <div class="dropdown-content">
  <a id="Home" href="{{ route('home') }}">home</a>
  <a id="Categories" href="{{ route('categories.index') }}">Categories</a>
  <a id="Post" href="{{ route('posts') }}">Post</a>
  </div>
</div>

      @if(!Auth::check())
        <a href="{{ route('signup') }}" class="shadow__btn mx-2 text-decoration-none">Sign Up</a>
        <a href="{{ route('signin') }}" class="shadow__btn text-decoration-none">Sign In</a>
      @else
        <a href="{{ route('logout')}}" class="shadow__btn text-decoration-none">Logout</a>
      @endif
    </div>
  </div>
</nav>

