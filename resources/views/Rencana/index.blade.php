@extends('layouts.app')

@section('title', 'Daftar Rencana Pembangunan')

@section('content')
<br>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<div class="container mt-5">
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
                    <td>
                        @if($rencanaPembangunan->status == 'Pending')
                            <form action="{{ route('Rencana.updateStatus', ['id' => $rencanaPembangunan->id, 'status' => 'Accepted']) }}" method="post">
                                @csrf
                                @method('PATCH')
                                <button>setujui</button>
                            </form>
                            <form action="{{ route('Rencana.updateStatus', ['id' => $rencanaPembangunan->id, 'status' => 'Rejected']) }}" method="post">
                                @csrf
                                @method('PATCH')
                                <button>tolak</button>
                            </form>
                        @else
                            {{ $rencanaPembangunan->status }}
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
