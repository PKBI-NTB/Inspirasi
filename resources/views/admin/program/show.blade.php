@extends('adminlte::page')

@section('title', 'Detail Program')

@section('content_header')
    <h1>Detail Program</h1>
@stop

@section('content')
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <img src="{{ asset('storage/program/' . $program->image) }}" class="rounded" style="width: 100%">
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3>{{ $program->nama_program }}</h3>
                        <hr/>
                        <p><strong>Lokasi:</strong> {{ $program->lokasi }}</p>
                        <p><strong>Status:</strong> {{ $program->status }}</p>
                        <p><strong>Durasi:</strong> {{ $program->durasi }}</p>
                        <p><strong>Tujuan:</strong> {{ $program->tujuan }}</p>
                        <hr/>
                        <p><strong>Deskripsi:</strong></p>
                        <p>{!! ($program->deskripsi)!!}</p>
                        <hr/>
                        <p><strong>Mitra:</strong></p>
                        <div class="d-flex flex-wrap">
                            @foreach (json_decode($program->mitra, true) as $mitraImage)
                                <div class="me-2 mb-2">
                                    <img src="{{ asset('storage/program/mitra/' . $mitraImage) }}" 
                                         alt="Mitra Image" 
                                         class="img-thumbnail" 
                                         style="width: 100px; height: 100px; object-fit: cover;">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('admin.program.index') }}" class="btn btn-secondary mt-3 mb-3">Kembali ke Daftar Program</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
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
