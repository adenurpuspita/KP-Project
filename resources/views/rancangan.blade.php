@extends('layouts.header')

@section('title', 'Struktur Organisasi Desa Sukamaju')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->

<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="fw-bold">Struktur Organisasi Desa Sukamaju</h1>
            <p style="text-align: justify">
                Struktur organisasi Desa Sukamaju terdiri dari perangkat desa yang bekerja sama dalam menjalankan tugasnya untuk kesejahteraan masyarakat. Di bawah ini adalah struktur kepemimpinan desa yang memastikan pelayanan yang terbaik bagi warga.
            </p>
            <div class="row mt-4">
                <!-- Kepala Desa -->
                <div class="col-md-4 text-center mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Kepala Desa</h5>
                            <p class="card-text">Bapak Ahmad Setiawan</p>
                        </div>
                    </div>
                </div>
                <!-- Sekretaris Desa -->
                <div class="col-md-4 text-center mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Sekretaris Desa</h5>
                            <p class="card-text">Ibu Rina Mustika</p>
                        </div>
                    </div>
                </div>
                <!-- Bendahara Desa -->
                <div class="col-md-4 text-center mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Bendahara Desa</h5>
                            <p class="card-text">Bapak Surya Nugraha</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Other Staff -->
            <div class="row mt-4">
                <div class="col-md-3 text-center mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Kepala Seksi Pelayanan</h5>
                            <p class="card-text">Ibu Siti Aminah</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Kepala Seksi Pembangunan</h5>
                            <p class="card-text">Bapak Arief Wibowo</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Kepala Seksi Kesejahteraan</h5>
                            <p class="card-text">Ibu Lestari Rahmawati</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Kepala Seksi Keamanan</h5>
                            <p class="card-text">Bapak Bambang Seto</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
