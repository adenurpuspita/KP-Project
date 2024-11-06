<!-- resources/views/berita/catalog.blade.php -->

@extends('layouts.header')

@section('content')
<div class="container">
    <h1 class="mb-4">Katalog Berita</h1>

    <div class="row">
        @forelse ($berita as $beritas)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <!-- Tampilkan gambar jika ada -->
                    @if ($beritas->gambar)
                        <img src="{{ asset('images/' . $beritas->gambar) }}" alt="Gambar Berita" class="card-img-top" style="height: 200px; object-fit: cover;">
                    @endif

                    <div class="card-body d-flex flex-column">
                        <!-- Judul berita -->
                        <h5 class="card-title">{{ $beritas->judul }}</h5>
                        
                        <!-- Cuplikan deskripsi -->
                        <p class="card-text">{{ Str::limit($beritas->deskripsi, 100) }}</p>

                        <!-- Tombol untuk melihat detail berita -->
                        <a href="{{ route('ShowKatalog', $beritas->id) }}" class="btn btn-primary mt-auto">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p class="text-center">Tidak ada berita tersedia.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
