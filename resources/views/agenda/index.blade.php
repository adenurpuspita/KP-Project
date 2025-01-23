<!-- resources/views/berita/index.blade.php -->

@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<div class="container">
    <h1 class="mb-4">Daftar Agenda</h1>

    <!-- Tampilkan pesan sukses jika ada -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tombol untuk menambah berita baru -->
    <a href="{{ route('agenda.create') }}" class="btn btn-primary mb-3">Tambah agenda Baru</a>

    <!-- Tabel untuk menampilkan daftar agenda -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($agendas as $agenda)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $agenda->judul }}</td>
                    <td>
                        @if ($agenda->gambar)
                            <img src="{{ asset('images/' . $agenda->gambar) }}" alt="Gambar agenda" width="100">
                        @else
                            <span>Tidak ada gambar</span>
                        @endif
                    </td>
                    <td>{{ Str::limit($agenda->deskripsi, 50) }}</td>
                    <td>
                        <!-- Tombol untuk melihat detail agenda -->
                        <a href="{{ route('agenda.showAdmin', $agenda->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        
                        <!-- Tombol untuk mengedit agenda -->
                        <a href="{{ route('agenda.edit', $agenda->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Tombol untuk menghapus agenda -->
                        <form action="{{ route('agenda.destroy', $agenda->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus agenda ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada agenda tersedia.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
