@extends('adminlte::page')

@section('content_header')
    <h1>Tambah Program</h1>
@stop

@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('admin.program.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Nama Program</label>
                            <input type="text" class="form-control @error('nama_program') is-invalid @enderror" name="nama_program" value="{{ old('nama_program') }}" placeholder="Masukkan Nama Program">
                        
                            @error('nama_program')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Lokasi</label>
                            <input type="text" class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" value="{{ old('lokasi') }}" placeholder="Masukkan Lokasi">
                        
                            @error('lokasi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Status</label>
                            <select class="form-control @error('status') is-invalid @enderror" name="status">
                                <option value="" disabled selected>Pilih Status</option>
                                <option value="Sedang Berlangsung" {{ old('status') == 'Sedang Berlangsung' ? 'selected' : '' }}>Sedang Berlangsung</option>
                                <option value="Telah Selesai" {{ old('status') == 'Telah Selesai' ? 'selected' : '' }}>Telah Selesai</option>
                            </select>
                        
                            @error('status')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Isu</label>
                            <select class="form-control @error('isu') is-invalid @enderror" name="isu">
                                <option value="" disabled selected>Pilih Isu</option>
                                @foreach ($listIsu as $isu)
                                    <option value="{{ $isu }}" {{ old('isu') == $isu ? 'selected' : '' }}>{{ $isu }}</option>
                                @endforeach
                            </select>                            
                        
                            @error('isu')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>                        

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Deskripsi</label>
                            <textarea id="deskripsi" name="deskripsi" rows="5" class="form-control" @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="5" placeholder="Masukkan Deskripsi Program">{{ old('deskripsi') }}</textarea>
                        
                            @error('deskripsi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Tujuan</label>
                            <input type="text" class="form-control @error('tujuan') is-invalid @enderror" name="tujuan" value="{{ old('tujuan') }}" placeholder="Masukkan Tujuan Program">
                        
                            @error('tujuan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Durasi</label>
                            <input type="text" class="form-control @error('durasi') is-invalid @enderror" name="durasi" value="{{ old('durasi') }}" placeholder="Masukkan Durasi Program">
                        
                            @error('durasi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Mitra</label>
                            <input 
                                type="file" 
                                class="form-control @error('mitra') is-invalid @enderror" 
                                name="mitra[]" 
                                multiple 
                                accept="image/*"
                            >
                            
                            @error('mitra.*')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                        
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
