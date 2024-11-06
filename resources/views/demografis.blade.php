@extends('layouts.header')

@section('title', 'Demografis Desa')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="fw-bold">Demografis Desa Sukamaju</h1>
            <p style="text-align: justify">
                Desa Sukamaju memiliki keragaman penduduk yang didominasi oleh petani, dengan latar belakang sosial dan ekonomi yang beragam. Berikut ini adalah rincian demografis penduduk Desa Sukamaju.
            </p>

            <h3 class="mt-4">Jumlah Penduduk</h3>
            <p>
                Berdasarkan data terbaru, jumlah penduduk Desa Sukamaju adalah sekitar <strong>3,500 jiwa</strong>, terdiri dari <strong>1,800 laki-laki</strong> dan <strong>1,700 perempuan</strong>.
            </p>

            <h3 class="mt-4">Mata Pencaharian</h3>
            <ul>
                <li><strong>Pertanian:</strong> 60% (padi, sayuran, buah-buahan)</li>
                <li><strong>Peternakan:</strong> 15% (ternak ayam, sapi, kambing)</li>
                <li><strong>Kerajinan dan Industri Rumahan:</strong> 10% (tenun, anyaman, produksi makanan lokal)</li>
                <li><strong>Jasa dan Perdagangan:</strong> 15% (toko, transportasi, layanan umum)</li>
            </ul>

            <h3 class="mt-4">Pendidikan</h3>
            <ul>
                <li><strong>Tidak Sekolah:</strong> 5%</li>
                <li><strong>Tamatan SD:</strong> 40%</li>
                <li><strong>Tamatan SMP:</strong> 25%</li>
                <li><strong>Tamatan SMA:</strong> 20%</li>
                <li><strong>Perguruan Tinggi:</strong> 10%</li>
            </ul>

            <h3 class="mt-4">Kelompok Umur</h3>
            <ul>
                <li><strong>0 - 14 tahun:</strong> 25%</li>
                <li><strong>15 - 29 tahun:</strong> 20%</li>
                <li><strong>30 - 49 tahun:</strong> 35%</li>
                <li><strong>50 tahun ke atas:</strong> 20%</li>
            </ul>

            <h3 class="mt-4">Agama</h3>
            <p>
                Penduduk Desa Sukamaju memiliki keyakinan agama yang mayoritas adalah <strong>Islam (90%)</strong>, diikuti oleh <strong>Kristen (5%)</strong>, <strong>Hindu (3%)</strong>, dan <strong>Buddha (2%)</strong>.
            </p>
        </div>
    </div>
</div>
@endsection
