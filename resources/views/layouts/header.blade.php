<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Fontawesome -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome/css/all.min.css') }}">
  <!-- AOS -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/aos/dist/aos.css') }}">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


  <title>@yield('title', 'Desa Sukamaju')</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" width="30" height="30" class="d-inline-block align-text-top me-2">
            <span class="primary">Desa</span>Sukamaju
        </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link fw-bolder dropdown-toggle" href="#" id="navbarDropdownProfil" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Profil Desa
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownProfil">
              <li><a class="dropdown-item" href="{{ route('tentangkami') }}">Tentang Kami</a></li>
              <li><a class="dropdown-item" href="{{ route('visimisi') }}">Visi dan Misi</a></li>
              <li><a class="dropdown-item" href="{{ route('sejarahdesa') }}">Sejarah Desa</a></li>
              <li><a class="dropdown-item" href="{{ route('geografis') }}">Geografis Desa</a></li>
              <li><a class="dropdown-item" href="{{ route('demografis') }}">Demografis Desa</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link fw-bolder dropdown-toggle" href="#" id="navbarDropdownPemerintahan" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Informasi Pemerintahan
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownPemerintahan">
              <li><a class="dropdown-item" href="{{ route('struktur') }}">Struktur Organisasi</a></li>
              <li><a class="dropdown-item" href="{{ route('perangkat') }}">Perangkat Desa</a></li>
              <li><a class="dropdown-item" href="{{ route('lembaga') }}">Lembaga Desa</a></li>
              <li><a class="dropdown-item" href="{{ route('realisasi') }}">Realisasi Program Kerja</a></li>
              <li><a class="dropdown-item" href="{{ route('anggaran') }}">Anggaran Keuangan Desa</a></li>
              <li><a class="dropdown-item" href="{{ route('partisipasi') }}">Partisipasi Masyarakat</a></li>
              <li><a class="dropdown-item" href="{{ route('kemitraan') }}">Kemitraan dan Kerjasama</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link fw-bolder dropdown-toggle" href="#" id="navbarDropdownPublik" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Informasi Publik
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownPublik">
              <li><a class="dropdown-item" href="{{ route('Rencana.user') }}">Rancangan Pembangunan</a></li>
              <li><a class="dropdown-item" href="{{ route('pembangunan') }}">Pembangunan Desa</a></li>
              <li><a class="dropdown-item" href="{{ route('potensi') }}">Potensi Desa</a></li>
              <li><a class="dropdown-item" href="{{ route('produk') }}">Produk Desa</a></li>
              <li><a class="dropdown-item" href="{{ route('pengumuman') }}">Pengumuman</a></li>
              <li><a class="dropdown-item" href="{{ route('galeri') }}">Galeri Kegiatan</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link fw-bolder dropdown-toggle" href="#" id="navbarDropdownBerita" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Berita dan Acara
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownBerita">
              <li><a class="dropdown-item" href="{{ route('agenda') }}">Agenda Kegiatan</a></li>
              <li><a class="dropdown-item" href="{{ route('katalog') }}">Berita Desa</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder" href="{{ route('kontak') }}">Kontak</a>
          </li>
          {{-- <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link fw-bolder">
              <i class='fas fa-user-alt'></i>
            </a>
          </li> --}}
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  @yield('content')


  {{-- footer --}}
  <footer class="bg-dark text-white py-4 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5 class="fw-bold">Desa Sukamaju</h5>
                <p>Alamat : Jl. Sukamaju No. 168, Kp. Cikaret Hilir, RT 004 RW. 011, Kecamatan Cianjur, Kabupaten Cianjur, Provinsi Jawa Barat.</p>
                <p>&copy; 2024 Desa Sukamaju. Semua hak cipta dilindungi.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <h5 class="fw-bold">Kontak</h5>
                <ul class="list-unstyled">
                    <li><a href="tel:+628123456789" class="text-white">Telepon: +62 812 3456 789</a></li>
                    <li><a href="mailto:desa.sukamaju@gmail.com" class="text-white">Email: desa.sukamaju@gmail.com</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

  <!-- To Top -->
  <a href="#" class="btn-to-top p-3">
    <i class="fa fa-chevron-up"></i>
  </a>
  <!-- End To Top -->

  <script src="{{ asset('assets/vendor/jquery/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/fontawesome/js/all.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/masonry/masonry.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/dist/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
