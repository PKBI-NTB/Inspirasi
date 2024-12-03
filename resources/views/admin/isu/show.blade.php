@extends('adminlte::page')

@section('title', 'Detail Isu')

@section('content_header')
    <h1>Detail Isu</h1>
@stop

@section('content')
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <img src="{{ asset('storage/isu/'.$isu->image) }}" class="rounded" style="width: 100%">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3>{{ $isu->isu }}</h3>
                        <hr/>
                        <hr/>
                        <p>Deskripsi:</p>
                        <p>{!! $isu->deskripsi !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

@stop

@section('css')
{{-- Tambahkan stylesheet tambahan di sini --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script>
    console.log("Hi, I'm using the Laravel-AdminLTE package!");
</script>
@stop
