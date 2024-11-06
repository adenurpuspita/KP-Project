<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="favicon/favicon.ico">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">
  <!-- fontawesome -->
  <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
  <!-- aos -->
  <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">
  <!-- custom css -->
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Desa Sukamaju</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm fixed-top fy-3">
    <div class="container">
      <a class="navbar-brand fw-bold" href="{{route ('home.index')}}"><span class="primary">Desa</span>Sukamaju</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link fw-bolder dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
              Profil Desa
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="StrukturOrganisasi.html">Tentang Kami</a></li>
              <li><a class="dropdown-item" href="{{route ('visimisi')}}">Visi dan Misi Desa</a></li>
              <li><a class="dropdown-item" href="{{route ('slider.show')}}">Sejarah Desa</a></li>
              <li><a class="dropdown-item" href="testimonials.html">Geografis Desa</a></li>
              <li><a class="dropdown-item" href="testimonials.html">Demografis Desa</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link fw-bolder dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Informasi Pemerintahan
            </a> 
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="StrukturOrganisasi.html">Struktur Organisasi</a></li>
              <li><a class="dropdown-item" href="team.html">Perangkat Desa</a></li>
              <li><a class="dropdown-item" href="testimonials.html">Lembaga Desa</a></li>
              <li><a class="dropdown-item" href="testimonials.html">Realisasi Program Kerja</a></li>
              <li><a class="dropdown-item" href="testimonials.html">Anggaran Keuangan Desa</a></li>
              <li><a class="dropdown-item" href="testimonials.html">Partisipasi Masyarakat</a></li>
              <li><a class="dropdown-item" href="testimonials.html">Kemitraan dan Kerjasama</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link fw-bolder dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Informasi Publik
            </a> 
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="about.html">Rancangan Pembangunan</a></li>
              <li><a class="dropdown-item" href="team.html">Pembangunan Desa</a></li>
              <li><a class="dropdown-item" href="testimonials.html">Potensi Desa</a></li>
              <li><a class="dropdown-item" href="testimonials.html">Produk Desa</a></li>
              <li><a class="dropdown-item" href="testimonials.html">Pengumuman</a></li>
              <li><a class="dropdown-item" href="testimonials.html">Galeri Kegiatan</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder" href="portfolio.html">Berita dan Acara</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder" href="contact.html">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> <br>
  <!-- end navbar -->

  <!-- Slider Section -->
  <div class="container mt-5">
    <h2 class="text-center">Slider</h2>
    <div class="row">
      @foreach($sliders as $slider)
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="{{ asset('storage/' . $slider->image) }}" class="card-img-top" alt="{{ $slider->title }}">
          <div class="card-body">
            <h5 class="card-title">{{ $slider->title }}</h5>
            <p class="card-text">{{ $slider->description }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>


  
    <div class="footer-down bg-darker text-white px-5 py-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-5">
            <div class="copyright">
              &copy; Copyright <strong>Company</strong>. All Right Reserved
            </div>
            <div class="credits">
              Design by me
            </div>
          </div>
          <div class="col-md-5">
            <div class="social-links float-end">
              <a href="" class="mx-2">
                <i class="fab fa-facebook fa-2x"></i>
              </a>
              <a href="" class="mx-2">
                <i class="fab fa-twitter fa-2x"></i>
              </a>
              <a href="" class="mx-2">
                <i class="fab fa-instagram fa-2x"></i>
              </a>
              <a href="" class="mx-2">
                <i class="fab fa-youtube fa-2x"></i>
              </a>
              <a href="" class="mx-2">
                <i class="fab fa-linkedin fa-2x"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- end footer  -->

  <!-- to top -->
  <a href="#" class="btn-to-top p-3">
    <i class="fa fa-chevron-up"></i>
  </a>
  <!-- end to top -->

  <script src="assets/vendor/jquery/jquery-3.6.0.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/fontawesome/js/all.min.js"></script>
  <script src="assets/vendor/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/vendor/aos/dist/aos.js"></script>
  <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
  <script src="assets/js/app.js"></script>
</body>

</html> 