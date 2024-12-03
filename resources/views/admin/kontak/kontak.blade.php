@extends('adminlte::page')

@section('title', 'Data Kontak')

@section('content_header')
    <h1>Data Kontak</h1>
@stop

@section('content')
<body style="background: lightgray">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('admin.kontak.create') }}" class="btn btn-md btn-success mb-3">Tambah Kontak</a>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Telepon</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Instagram</th>
                                        <th scope="col">Facebook</th>
                                        <th scope="col">TikTok</th>
                                        <th scope="col">YouTube</th>
                                        <th scope="col" style="width: 20%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($kontak as $item)
                                        <tr>
                                            <td>{{ $item->telpon }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td><a href="{{ $item->url_instagram }}" target="_blank">Instagram</a></td>
                                            <td><a href="{{ $item->url_facebook }}" target="_blank">Facebook</a></td>
                                            <td><a href="{{ $item->url_tiktok }}" target="_blank">{{ $item->url_tiktok }}</a></td>
                                            <td><a href="{{ $item->url_youtube }}" target="_blank">{{ $item->url_youtube }}</a></td>
                                            <td class="text-center">
                                                <a href="{{ route('admin.kontak.edit', $item->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            </td>                                            
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center">
                                                <div class="alert alert-danger">Data Kontak belum Tersedia.</div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        {{ $kontak->onEachSide(1)->links('pagination::bootstrap-5') }}
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
