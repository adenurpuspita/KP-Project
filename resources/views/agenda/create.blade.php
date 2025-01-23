<!-- resources/views/berita/create.blade.php -->

@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<div class="container">
    <h1 class="mb-4">Tambah Agenda Baru</h1>

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
    <form action="{{ route('agenda.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Input untuk judul -->
        <div class="form-group mb-3">
            <label for="judul">Judul agenda</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul') }}" required>
        </div>

        <!-- Input untuk gambar -->
        <div class="form-group mb-3">
            <label for="gambar">Gambar agenda</label>
            <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
        </div>

        <!-- Input untuk deskripsi -->
        <div class="form-group mb-3">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5" required>{{ old('deskripsi') }}</textarea>
        </div>

        <!-- Tombol submit -->
        <button type="submit" class="btn btn-primary">Simpan agenda</button>
        <a href="{{ route('berita') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
