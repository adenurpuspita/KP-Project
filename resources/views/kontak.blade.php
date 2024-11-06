@extends('layouts.header')

@section('title', 'Kontak')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-8">
            <h1 class="fw-bold">Kontak</h1>
            <form action="{{ route('kontak') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Pesan</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
        </div>
        <div class="col-md-4">
            <h2 class="fw-bold">Alamat</h2>
            <p>Jl. Sukamaju No. 123<br>Desa Sukamaju, Kecamatan Sukajaya</p>
            <p><strong>Telepon:</strong> +62 838 2223 170</p>
            <p><strong>Email:</strong> info@desasukamaju.org</p>
        </div>
    </div>
</div>
@endsection
