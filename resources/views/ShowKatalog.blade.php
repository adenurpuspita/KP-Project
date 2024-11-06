<!-- resources/views/berita/show.blade.php -->

@extends('layouts.header')

@section('content')
<div class="container">
    <h1 class="mb-4">{{ $beritas->judul }}</h1>

    <!-- Tampilkan gambar jika ada -->
    @if ($beritas->gambar)
        <div class="mb-3">
            <img src="{{ asset('images/' . $beritas->gambar) }}" alt="Gambar Berita" class="img-fluid" style="max-width: 600px;">
        </div>
    @endif

    <!-- Deskripsi berita -->
    <div class="mb-3">
        <p>{{ $beritas->deskripsi }}</p>
    </div>

    <!-- Tombol kembali ke daftar berita -->
    {{-- <a href="{{ route('berita.index') }}" class="btn btn-secondary">Kembali ke Daftar Berita</a>
    <!-- Tombol untuk mengedit berita -->
    <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-warning">Edit Berita</a>

    <!-- Tombol untuk menghapus berita -->
    <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Hapus</button>
    </form> --}}
</div>
@endsection
