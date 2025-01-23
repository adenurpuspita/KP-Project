
@extends('layouts.header')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<div class="container">
    <h1 class="mb-4">{{ $berita->judul }}</h1>

    <!-- Tampilkan gambar jika ada -->
    @if ($berita->gambar)
        <div class="mb-3">
            <img src="{{ asset('images/' . $berita->gambar) }}" alt="Gambar Berita" class="img-fluid" style="max-width: 600px;">
        </div>
    @endif

    <!-- Deskripsi berita -->
    <div class="mb-3">
        <p>{{ $berita->deskripsi }}</p>
    </div>

    <!-- Tombol kembali ke daftar berita -->
    <a href="{{ route('katalog') }}" class="btn btn-secondary">Kembali ke Daftar Berita</a>

</div>
@endsection
