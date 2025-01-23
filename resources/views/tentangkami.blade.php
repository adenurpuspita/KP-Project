@extends('layouts.header')

@section('title', 'Tentang Kami')

@section('content')
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<div class="container mt-5 pt-5">
    <!-- Banner Section -->
    <div class="mb-5 text-center">
        <img src="assets/img/banner_web.png" class="img-fluid rounded shadow" alt="Banner Desa Sukamaju" width="2000">
        <h1 class="fw-bold mt-3">Tentang Desa Sukamaju</h1>
        <p class="text-muted">Profil desa yang asri, maju, dan penuh harapan</p>
    </div>

    <!-- Visi, Misi, dan Tujuan Section -->
    <div class="row">
        <!-- Visi -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body text-center">
                    <img src="https://via.placeholder.com/100?text=Visi" class="img-fluid mb-3" alt="Visi">
                    <h3 class="fw-bold text-primary">Visi</h3>
                    <p class="mt-3">
                        Menjadi desa yang mandiri, maju, dan sejahtera dengan masyarakat yang berdaya, berbudi pekerti luhur, serta memiliki lingkungan yang bersih, sehat, dan berkelanjutan.
                    </p>
                </div>
            </div>
        </div>

        <!-- Misi -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body text-center">
                    <img src="https://via.placeholder.com/100?text=Misi" class="img-fluid mb-3" alt="Misi">
                    <h3 class="fw-bold text-success">Misi</h3>
                    <ul class="list-unstyled mt-3">
                        <li>🔹 Mengembangkan potensi desa untuk kesejahteraan masyarakat.</li>
                        <li>🔹 Menjaga nilai-nilai budaya lokal.</li>
                        <li>🔹 Meningkatkan kualitas pendidikan dan kesehatan.</li>
                        <li>🔹 Membangun infrastruktur yang berkelanjutan.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Tujuan -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body text-center">
                    <img src="https://via.placeholder.com/100?text=Tujuan" class="img-fluid mb-3" alt="Tujuan">
                    <h3 class="fw-bold text-warning">Tujuan</h3>
                    <p class="mt-3">
                        Meningkatkan kualitas hidup masyarakat desa dengan pendidikan, kesehatan, dan ekonomi yang lebih baik.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Sejarah Section -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
            <h3 class="fw-bold">Sejarah Desa Sukamaju</h3>
            <p style="text-align: justify;">
                Desa Sukamaju didirikan pada tahun 1920 oleh sekelompok warga dari berbagai suku. Awalnya, desa ini merupakan kawasan pertanian yang subur dengan mata air yang digunakan untuk mengairi lahan. Kini, Desa Sukamaju telah berkembang menjadi komunitas yang mandiri dengan beragam potensi di bidang sosial, ekonomi, dan budaya.
            </p>
            <img src="https://via.placeholder.com/800x400?text=Sejarah+Desa+Sukamaju" class="img-fluid rounded shadow" alt="Sejarah Desa">
        </div>
    </div>

    <!-- Fasilitas Section -->
    <div class="row mt-5">
        <h3 class="text-center fw-bold mb-4">Fasilitas Desa</h3>
        <div class="col-md-3">
            <div class="card shadow-sm border-0 text-center">
                <img src="https://via.placeholder.com/300x200?text=Balai+Desa" class="card-img-top" alt="Balai Desa">
                <div class="card-body">
                    <h5 class="fw-bold">Balai Desa</h5>
                    <p class="text-muted">Pusat kegiatan administratif dan sosial bagi warga desa.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0 text-center">
                <img src="https://via.placeholder.com/300x200?text=Poskesdes" class="card-img-top" alt="Poskesdes">
                <div class="card-body">
                    <h5 class="fw-bold">Pos Kesehatan Desa</h5>
                    <p class="text-muted">Layanan kesehatan dasar untuk warga desa.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0 text-center">
                <img src="https://via.placeholder.com/300x200?text=Sekolah+Dasar" class="card-img-top" alt="Sekolah Dasar">
                <div class="card-body">
                    <h5 class="fw-bold">Sekolah Dasar</h5>
                    <p class="text-muted">Fasilitas pendidikan dasar untuk anak-anak desa.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0 text-center">
                <img src="https://via.placeholder.com/300x200?text=Tempat+Ibadah" class="card-img-top" alt="Tempat Ibadah">
                <div class="card-body">
                    <h5 class="fw-bold">Tempat Ibadah</h5>
                    <p class="text-muted">Kegiatan keagamaan untuk warga desa.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Komitmen Section -->
    <div class="card shadow-sm border-0 my-5">
        <div class="card-body">
            <h3 class="fw-bold text-center">Komitmen Kami</h3>
            <p style="text-align: justify;">
                Pemerintah Desa Sukamaju berkomitmen untuk menjaga kelestarian lingkungan, melestarikan budaya lokal, dan meningkatkan kesejahteraan masyarakat melalui pembangunan yang berkelanjutan. Dengan semangat gotong-royong, kami yakin dapat menciptakan desa yang lebih baik untuk generasi mendatang.
            </p>
        </div>
    </div>
</div>
@endsection
