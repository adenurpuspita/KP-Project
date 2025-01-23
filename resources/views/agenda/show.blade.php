<!-- resources/views/berita/show.blade.php -->

@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<div class="container">
    <h1 class="mb-4">{{ $agenda->judul }}</h1>

    <!-- Tampilkan gambar jika ada -->
    @if ($agenda->gambar)
        <div class="mb-3">
            <img src="{{ asset('images/' . $agenda->gambar) }}" alt="Gambar agenda" class="img-fluid" style="max-width: 600px;">
        </div>
    @endif

    <!-- Deskripsi agenda -->
    <div class="mb-3">
        <p>{{ $agenda->deskripsi }}</p>
    </div>

    <!-- Tombol kembali ke daftar agenda -->
    <a href="{{ route('katalog') }}" class="btn btn-secondary">Kembali ke Daftar agenda</a>
    <!-- Tombol untuk mengedit agenda -->
    <a href="{{ route('agenda.edit', $agenda->id) }}" class="btn btn-warning">Edit agenda</a>

    <!-- Tombol untuk menghapus agenda -->
    <form action="{{ route('agenda.destroy', $agenda->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus agenda ini?')">Hapus</button>
    </form>
</div>
@endsection
