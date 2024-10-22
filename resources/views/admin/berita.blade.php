@extends('adminlte::page')


@section('title', 'Data berita')

@section('content_header')
    <h1>Data berita</h1>
@stop

@section('content')
<body style="background: lightgray">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('berita.create') }}" class="btn btn-md btn-success mb-3">Tambah Berita</a>
                        
                        <!-- Tambahkan table-responsive untuk membuat tabel scrollable -->
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
                                    @forelse ($berita as $berita)
                                        <tr>
                                            <td>{{ $berita->judul }}</td>
                                            <td>{{ $berita->penulis }}</td>
                                            <td>{{ $berita->tanggal }}</td>
                                            <td class="text-center">
                                                <img src="{{ asset('/storage/beritas/'.$berita->image) }}" class="rounded" style="width: 150px">
                                            </td>
                                            <td>{{ $berita->deskripsi }}</td>
                                            <td>{{ $berita->tags }}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('beritas.destroy', $berita->id) }}" method="POST">
                                                    <a href="{{ route('berita.show', $berita->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                                    <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data Berita belum Tersedia.
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        
                        {{ $berita->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        //message with sweetalert
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
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop

</html>
