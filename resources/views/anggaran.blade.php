@extends('layouts.header')

@section('title', 'Anggaran Keuangan Desa')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="fw-bold">Anggaran Keuangan Desa Sukamaju</h1>
            <p style="text-align: justify">
                Berikut ini adalah informasi anggaran keuangan Desa Sukamaju yang dikelola secara transparan dan akuntabel. Anggaran ini digunakan untuk berbagai program dan kegiatan desa dalam rangka meningkatkan kesejahteraan masyarakat.
            </p>

            <h3 class="mt-4">Pendapatan Desa</h3>
            <table class="table table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>Sumber Pendapatan</th>
                        <th>Jumlah (Rp)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dana Desa</td>
                        <td>500,000,000</td>
                    </tr>
                    <tr>
                        <td>Alokasi Dana Desa</td>
                        <td>300,000,000</td>
                    </tr>
                    <tr>
                        <td>Bantuan Provinsi</td>
                        <td>200,000,000</td>
                    </tr>
                    <tr>
                        <td>Bantuan Kabupaten</td>
                        <td>100,000,000</td>
                    </tr>
                    <tr>
                        <td>Pendapatan Asli Desa</td>
                        <td>50,000,000</td>
                    </tr>
                </tbody>
                <tfoot class="table-primary">
                    <tr>
                        <th>Total Pendapatan</th>
                        <th>1,150,000,000</th>
                    </tr>
                </tfoot>
            </table>

            <h3 class="mt-4">Belanja Desa</h3>
            <table class="table table-bordered">
                <thead class="table-success">
                    <tr>
                        <th>Jenis Belanja</th>
                        <th>Jumlah (Rp)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Belanja Pembangunan</td>
                        <td>500,000,000</td>
                    </tr>
                    <tr>
                        <td>Belanja Operasional</td>
                        <td>300,000,000</td>
                    </tr>
                    <tr>
                        <td>Belanja Pemberdayaan Masyarakat</td>
                        <td>200,000,000</td>
                    </tr>
                    <tr>
                        <td>Belanja Pembinaan Kemasyarakatan</td>
                        <td>100,000,000</td>
                    </tr>
                    <tr>
                        <td>Belanja Tak Terduga</td>
                        <td>50,000,000</td>
                    </tr>
                </tbody>
                <tfoot class="table-success">
                    <tr>
                        <th>Total Belanja</th>
                        <th>1,150,000,000</th>
                    </tr>
                </tfoot>
            </table>

            <h3 class="mt-4">Rincian Alokasi Dana</h3>
            <ul>
                <li><strong>Pembangunan Infrastruktur:</strong> Pembangunan jalan desa, drainase, jembatan kecil, dan fasilitas umum.</li>
                <li><strong>Pemberdayaan Masyarakat:</strong> Pelatihan kewirausahaan, bantuan UMKM, dan kelompok tani.</li>
                <li><strong>Pembinaan Kemasyarakatan:</strong> Kegiatan sosial, pendidikan, kesehatan, dan pelestarian budaya desa.</li>
                <li><strong>Belanja Operasional:</strong> Biaya administrasi desa, peralatan kantor, dan gaji perangkat desa.</li>
            </ul>

            <p class="mt-4" style="text-align: justify">
                Informasi ini dibuat dengan tujuan untuk meningkatkan transparansi pengelolaan keuangan desa dan mengajak masyarakat untuk berpartisipasi aktif dalam pengawasan penggunaan anggaran.
            </p>
        </div>
    </div>
</div>
@endsection
