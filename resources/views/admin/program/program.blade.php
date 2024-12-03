@extends('adminlte::page')

@section('title', 'Data Program')

@section('content_header')
    <h1>Data Program</h1>
@stop

@section('content')
<body style="background: lightgray">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('admin.program.create') }}" class="btn btn-md btn-success mb-3">Tambah Program</a>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama Program</th>
                                        <th scope="col">Lokasi</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Durasi</th>
                                        <th scope="col">Isu</th> <!-- New column for isu -->
                                        <th scope="col">Image</th>
                                        <th scope="col" style="width: 20%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($program as $item)
                                        <tr>
                                            <td>{{ $item->nama_program }}</td>
                                            <td>{{ $item->lokasi }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>{{ $item->durasi }}</td>
                                            <td>{{ $item->isu ?? 'N/A' }}</td> <!-- Display isu field -->
                                            <td class="text-center">
                                                <img src="{{ Storage::url('program/'.$item->image) }}" class="rounded" style="width: 150px;">
                                            </td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admin.program.destroy', $item->id) }}" method="POST">
                                                    <a href="{{ route('admin.program.show', $item->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                                    <a href="{{ route('admin.program.edit', $item->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">
                                                <div class="alert alert-danger">Data Program belum Tersedia.</div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        {{ $program->onEachSide(1)->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>
</body>
@stop

@section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script>
    console.log("Hi, I'm using the Laravel-AdminLTE package!");
</script>
@stop
