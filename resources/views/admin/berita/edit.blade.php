@extends('adminlte::page')

@section('content_header')
    <h1>Edit Berita</h1>
@stop

@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        {{-- Judul --}}
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Judul</label>
                            <input 
                                type="text" 
                                class="form-control @error('judul') is-invalid @enderror" 
                                name="judul" 
                                value="{{ old('judul', $berita->judul) }}" 
                                placeholder="Masukkan Judul">
                            @error('judul')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Penulis --}}
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Penulis</label>
                            <input 
                                type="text" 
                                class="form-control @error('penulis') is-invalid @enderror" 
                                name="penulis" 
                                value="{{ old('penulis', $berita->penulis) }}" 
                                placeholder="Masukkan Nama Penulis">
                            @error('penulis')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Tanggal --}}
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Tanggal</label>
                            <input 
                                type="date" 
                                class="form-control @error('tanggal') is-invalid @enderror" 
                                name="tanggal" 
                                value="{{ old('tanggal', $berita->tanggal) }}">
                            @error('tanggal')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Image --}}
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Image</label>
                            <input 
                                type="file" 
                                class="form-control @error('image') is-invalid @enderror" 
                                name="image">
                            @error('image')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                            @if($berita->image)
                                <small class="text-muted mt-2 d-block">Gambar Saat Ini: {{ $berita->image }}</small>
                            @endif
                        </div>

                        {{-- Deskripsi --}}
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Deskripsi</label>
                            <textarea 
                                id="deskripsi"
                                class="form-control @error('deskripsi') is-invalid @enderror" 
                                name="deskripsi" 
                                rows="5" 
                                placeholder="Masukkan Deskripsi Berita">{{ old('deskripsi', $berita->deskripsi) }}</textarea>
                            @error('deskripsi')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Tags --}}
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Tags (Pisahkan dengan koma (,))</label>
                            <input 
                                type="text" 
                                class="form-control @error('tags') is-invalid @enderror" 
                                name="tags" 
                                value="{{ old('tags', $berita->tags) }}" 
                                placeholder="Masukkan Tags">
                            @error('tags')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Buttons --}}
                        <button type="submit" class="btn btn-md btn-primary me-3">Update</button>
                        <button type="reset" class="btn btn-md btn-warning">Reset</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    {{-- Summernote CSS --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote.min.css" rel="stylesheet">
@stop

@section('js')
    {{-- Summernote JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote.min.js"></script>
    <script>
        // Inisialisasi Summernote
        $(document).ready(function() {
            $('#deskripsi').summernote({
                height: 300, // Tinggi editor
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
    </script>
@stop
