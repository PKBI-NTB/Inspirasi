@extends('adminlte::page')

@section('content_header')
    <h1>Edit Isu</h1>
@stop

@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('admin.isu.update', $isu->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        {{-- Judul Isu --}}
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Judul Isu</label>
                            <input 
                                type="text" 
                                class="form-control @error('isu') is-invalid @enderror" 
                                name="isu" 
                                value="{{ old('isu', $isu->isu) }}" 
                                placeholder="Masukkan Judul Isu">
                            @error('isu')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Deskripsi --}}
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Deskripsi</label>
                            <textarea 
                                id="deskripsi"
                                class="form-control @error('deskripsi') is-invalid @enderror" 
                                name="deskripsi" 
                                rows="5" 
                                placeholder="Masukkan Deskripsi">{{ old('deskripsi', $isu->deskripsi) }}</textarea>
                            @error('deskripsi')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Image --}}
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Gambar</label>
                            <input 
                                type="file" 
                                class="form-control @error('image') is-invalid @enderror" 
                                name="image">
                            @error('image')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                            @if($isu->image)
                                <small class="text-muted mt-2 d-block">Gambar Saat Ini:</small>
                                <img src="{{ Storage::url('isu/'.$isu->image) }}" alt="Gambar Isu" class="img-thumbnail" style="width: 200px;">
                            @endif
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
