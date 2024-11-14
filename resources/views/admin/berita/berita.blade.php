@extends('adminlte::page')

@section('title', 'Data Berita')

@section('content_header')
    <h1>Data Berita</h1>
@stop

@section('content')
<body style="background: lightgray">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('admin.berita.create') }}" class="btn btn-md btn-success mb-3">Tambah Berita</a>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Penulis</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Tags</th>
                                        <th scope="col" style="width: 20%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($berita as $item)
                                        <tr>
                                            <td>{{ $item->judul }}</td>
                                            <td>{{ $item->penulis }}</td>
                                            <td>{{ $item->tanggal }}</td>
                                            <td class="text-center">
                                                <img src="{{ Storage::url('berita/'.$item->image) }}" class="rounded" style="width: 150px;">
                                            </td>
                                            <td style="display: -webkit-box; -webkit-line-clamp: 10; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                                                {{ $item->deskripsi }}
                                            </td>                                            
                                            <td>{{ $item->tags }}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admin.berita.destroy', $item->id) }}" method="POST">
                                                    <a href="{{ route('admin.berita.show', $item->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                                    <a href="{{ route('admin.berita.edit', $item->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">
                                                <div class="alert alert-danger">Data Berita belum Tersedia.</div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        {{ $berita->onEachSide(1)->links('pagination::bootstrap-5') }}
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
