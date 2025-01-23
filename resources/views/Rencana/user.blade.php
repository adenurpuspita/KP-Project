<!-- resources/views/rencana_pembangunan/index.blade.php -->
@extends('layouts.header')


@section('content')
<br>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<div class="container mt-5">
    <h2>Daftar Rencana Pembangunan</h2>
    {{-- <a href="{{ route('Rencana.create') }}" class="btn btn-primary my-3">Tambah Rencana Pembangunan</a> --}}
    {{-- @if(auth()->user()?->role == 'users')  <!-- Tombol hanya muncul jika pengguna memiliki izin 'admin' --> --}}
    <a href="{{ route('Rencana.create') }}" class="btn btn-primary my-3">Tambah Rencana Pembangunan</a>
    {{-- @endif --}}

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>File PDF</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rencanaPembangunans as $index => $rencanaPembangunan)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $rencanaPembangunan->nama }}</td>
                    <td>{{ $rencanaPembangunan->email }}</td>
                    <td>{{ $rencanaPembangunan->alamat }}</td>
                    <td>
                        <!-- Link to view the PDF -->
                        <a href="{{ route('Rencana.viewPDF', $rencanaPembangunan->id) }}" target="_blank">
                            View PDF
                        </a>
                    </td>
                    <td>{{ $rencanaPembangunan->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
