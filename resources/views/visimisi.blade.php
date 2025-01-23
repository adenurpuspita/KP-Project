@extends('layouts.header')

@section('title', 'Visi Misi')

@section('content')
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<div class="container mt-5 pt-5">
    <!-- Header Section -->
    <div class="text-center mb-5">
        <h1 class="fw-bold">Visi dan Misi Desa Sukamaju</h1>
        <p class="text-muted">Visi Misi lengkap desa yang asri, maju, dan sejahtera</p>
    </div>

    <!-- Image Banner -->
    <div class="mb-5">
        <img src="assets/img/banner_web.png" class="img-fluid rounded shadow" alt="Banner Desa Sukamaju" width="2000">
    </div>

    <!-- Content Section -->
    <div class="row">
        <!-- Visi dan Misi -->
        <div class="col-md-12">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    <h2 class="fw-bold text-center">Visi dan Misi Desa Sukamaju</h2>
                    <p style="text-align: justify;" class="mt-3">
                        Desa Sukamaju adalah sebuah desa yang asri dan berkembang, terletak di kawasan dataran tinggi yang subur. Desa ini memiliki penduduk yang ramah, kompak, dan sebagian besar hidup dari hasil pertanian serta usaha kecil. Berbagai komoditas utama di desa ini meliputi padi, sayur-mayur, dan buah-buahan segar yang tumbuh subur berkat iklim yang mendukung.
                    </p>
                </div>
            </div>
        </div>

        <!-- Visi -->
        <div class="col-md-6">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    <div class="text-center">
                        <img src="assets/img/visi.png" alt="Visi" class="img-fluid mb-2" width="160">
                    </div>
                    <h3 class="text-center fw-bold text-primary">Visi</h3>
                    <p class="text-center">Menjadi desa yang mandiri, maju, dan sejahtera, dengan masyarakat yang berdaya dan berbudi pekerti luhur.</p>
                </div>
            </div>
        </div>

        <!-- Misi -->
        <div class="col-md-6">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    <div class="text-center">
                        <img src="assets/img/misi.png" alt="Misi" class="img-fluid mb-3" width="150">
                    </div>
                    <h3 class="text-center fw-bold text-primary">Misi</h3>
                    <p class="text-center">Berikut adalah misi Desa Sukamaju</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Mengembangkan potensi desa untuk kesejahteraan masyarakat.</li>
                        <li class="list-group-item">Menjaga nilai-nilai budaya lokal.</li>
                        <li class="list-group-item">Meningkatkan akses pendidikan dan kesehatan.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Highlights Section -->
    <div class="row mt-5">
        <h2 class="text-center fw-bold mb-4">Apa yang Membuat Desa Kami Istimewa?</h2>
        <div class="col-md-4">
            <div class="card shadow-sm border-0 mb-4">
                <img src="assets/img/cianjur.jpg" class="card-img-top" alt="Keindahan Alam">
                <div class="card-body">
                    <h5 class="card-title text-center">Keindahan Alam</h5>
                    <p class="card-text text-center">Dataran tinggi yang subur, udara segar, dan pemandangan yang memukau menjadi daya tarik utama desa kami.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-0 mb-4">
                <img src="assets/img/cianjur.jpg" class="card-img-top" alt="Komunitas Desa">
                <div class="card-body">
                    <h5 class="card-title text-center">Komunitas Harmonis</h5>
                    <p class="card-text text-center">Warga yang ramah dan solidaritas yang tinggi menciptakan lingkungan yang harmonis.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-0 mb-4">
                <img src="assets/img/cianjur.jpg" class="card-img-top" alt="Budaya Lokal">
                <div class="card-body">
                    <h5 class="card-title text-center">Budaya Lokal</h5>
                    <p class="card-text text-center">Beragam tradisi dan budaya yang diwariskan turun-temurun memperkaya kehidupan di desa kami.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
