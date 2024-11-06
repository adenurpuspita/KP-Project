@extends('layouts.header')

@section('title', 'Agenda Kegiatan')

{{-- @section('content')
<div class="container mt-5 pt-5">
    <h1 class="fw-bold">Agenda Kegiatan Desa Sukamaju</h1>
    <div class="list-group mt-4">
        @foreach ($agenda as $item)
            <a href="{{ route('agenda.show', $item->id) }}" class="list-group-item list-group-item-action">
                <h5 class="mb-1">{{ $item->judul }}</h5>
                <p class="mb-1">{{ Str::limit($item->deskripsi, 100) }}</p>
                <small class="text-muted">Tanggal: {{ $item->tanggal }}</small>
            </a>
        @endforeach
    </div>
</div>
@endsection --}}
