<!-- resources/views/berita/catalog.blade.php -->

@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<div class="container">
    <h1 class="mb-4">Katalog Agenda</h1>

    <div class="row">
        @forelse ($agendas as $agenda)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <!-- Tampilkan gambar jika ada -->
                    @if ($agenda->gambar)
                        <img src="{{ asset('images/' . $agenda->gambar) }}" alt="Gambar agenda" class="card-img-top" style="height: 200px; object-fit: cover;">
                    @endif

                    <div class="card-body d-flex flex-column">
                        <!-- Judul agenda -->
                        <h5 class="card-title">{{ $agenda->judul }}</h5>
                        
                        <!-- Cuplikan deskripsi -->
                        <p class="card-text">{{ Str::limit($agenda->deskripsi, 100) }}</p>

                        <!-- Tombol untuk melihat detail agenda -->
                        <a href="{{ route('agenda.show', $agenda->id) }}" class="btn btn-primary mt-auto">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p class="text-center">Tidak ada agenda tersedia.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
