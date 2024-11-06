<!-- resources/views/berita/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Berita Baru</h1>

    <!-- Tampilkan pesan error jika ada -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form untuk menambah berita baru -->
    <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Input untuk judul -->
        <div class="form-group mb-3">
            <label for="judul">Judul Berita</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul') }}" required>
        </div>

        <!-- Input untuk gambar -->
        <div class="form-group mb-3">
            <label for="gambar">Gambar Berita</label>
            <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
        </div>

        <!-- Input untuk deskripsi -->
        <div class="form-group mb-3">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5" required>{{ old('deskripsi') }}</textarea>
        </div>

        <!-- Tombol submit -->
        <button type="submit" class="btn btn-primary">Simpan Berita</button>
        <a href="{{ route('berita') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
