<!-- resources/views/berita/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Berita</h1>

    <!-- Tampilkan pesan sukses jika ada -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tombol untuk menambah berita baru -->
    <a href="{{ route('berita.create') }}" class="btn btn-primary mb-3">Tambah Berita Baru</a>

    <!-- Tabel untuk menampilkan daftar berita -->
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
            @forelse ($beritas as $berita)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $berita->judul }}</td>
                    <td>
                        @if ($berita->gambar)
                            <img src="{{ asset('images/' . $berita->gambar) }}" alt="Gambar Berita" width="100">
                        @else
                            <span>Tidak ada gambar</span>
                        @endif
                    </td>
                    <td>{{ Str::limit($berita->deskripsi, 50) }}</td>
                    <td>
                        <!-- Tombol untuk melihat detail berita -->
                        <a href="{{ route('berita.show', $berita->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        
                        <!-- Tombol untuk mengedit berita -->
                        <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Tombol untuk menghapus berita -->
                        <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada berita tersedia.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
