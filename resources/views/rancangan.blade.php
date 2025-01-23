@section('content')
<br>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<div class="container mt-5">
    <h2>Daftar Rencana Pembangunan</h2>
    @can('admin')  <!-- Hanya tampil jika pengguna memiliki role 'admin' -->
        <a href="{{ route('Rencana.create') }}" class="btn btn-primary my-3">Tambah Rencana Pembangunan</a>
    @endcan
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <!-- kolom lainnya -->
            </tr>
        </thead>
        <tbody>
            <!-- data -->
        </tbody>
    </table>
</div>
@endsection
