@extends('layouts.app')

@section('title', 'Sejarah Desa')
    
@section('content')

<div class="container">
    <a href="/sejarah/create" class="btn btn-primary mb-3">Tambah Data</a>

    @if ($message = Session::get('message'))
    <div class="alert alert-success">
        <strong>Berhasil</strong>
        <p>{{$message}}</p>
    </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($sejarahs as $sejarah)
                    <td>{{ $i++ }}</td>
                    <td>{{ $sejarah->title }}</td>
                    <td>{{ $sejarah->description }}</td>
                    <td>
                        <img src="/image/{{ $sejarah->image}}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href="{{route('sejarahs.edit', $sejarah->id)}}" class="btn btn-warning">Edit</a>

                        <form action="{{route('sejarahs.destroy', $sejarah->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
@endsection