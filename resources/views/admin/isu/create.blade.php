@extends('adminlte::page')

@section('content_header')
    <h1>Tambah Isu</h1>
@stop

@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('admin.isu.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Judul Isu</label>
                            <input type="text" class="form-control @error('isu') is-invalid @enderror" name="isu" value="{{ old('isu') }}" placeholder="Masukkan Judul Isu">
                        
                            <!-- Error message untuk judul -->
                            @error('isu')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Deskripsi</label>
                            <textarea id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="5" placeholder="Masukkan Deskripsi">{{ old('deskripsi') }}</textarea>
                        
                            <!-- Error message untuk deskripsi -->
                            @error('deskripsi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                        
                            <!-- Error message untuk image -->
                            @error('image')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary me-3">Simpan</button>
                        <button type="reset" class="btn btn-md btn-warning">Reset</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote.min.css" rel="stylesheet">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#deskripsi').summernote({
                height: 300, // Tinggi editor
                minHeight: null, // Tinggi minimal
                maxHeight: null, // Tinggi maksimal
                focus: true, // Fokus otomatis pada editor
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
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
