@extends('adminlte::page')

@section('title', 'Data Isu')

@section('content_header')
    <h1>Data Isu</h1>
@stop

@section('content')
<body style="background: lightgray">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('admin.isu.create') }}" class="btn btn-md btn-success mb-3">Tambah Isu</a>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Judul Isu</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col" style="width: 20%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($isu as $item)
                                        <tr>
                                            <td>{{ $item->isu }}</td>
                                            <td style="display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                                                <!-- Menampilkan deskripsi dengan format HTML -->
                                                <p>{!! $item->deskripsi !!}</p>
                                            </td>   
                                            <td class="text-center">
                                                <img src="{{ Storage::url('isu/'.$item->image) }}" class="rounded" style="width: 150px;">
                                            </td> 
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admin.isu.destroy', $item->id) }}" method="POST">
                                                    <a href="{{ route('admin.isu.show', $item->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                                    <a href="{{ route('admin.isu.edit', $item->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">
                                                <div class="alert alert-danger">Data Isu belum Tersedia.</div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        {{ $isu->onEachSide(1)->links('pagination::bootstrap-5') }}
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
{{-- Tambahkan style tambahan jika diperlukan --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script>
    console.log("Hi, I'm using the Laravel-AdminLTE package!");
</script>
@stop
