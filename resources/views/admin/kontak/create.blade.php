@extends('adminlte::page')

@section('content_header')
    <h1>Tambah Kontak</h1>
@stop

@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('admin.kontak.store') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Nomor Telepon (+62)</label>
                            <input type="text" class="form-control @error('telpon') is-invalid @enderror" name="telpon" value="{{ old('telpon', '-') }}" placeholder="Masukkan Nomor Telepon">
                        
                            @error('telpon')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Alamat</label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="3" placeholder="Masukkan Alamat">{{ old('alamat', '-') }}</textarea>
                        
                            @error('alamat')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', '-') }}" placeholder="Masukkan Email">
                        
                            @error('email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">URL Instagram</label>
                            <input type="text" class="form-control @error('url_instagram') is-invalid @enderror" name="url_instagram" value="{{ old('url_instagram', '-') }}" placeholder="Masukkan URL Instagram">
                        
                            @error('url_instagram')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">URL Facebook</label>
                            <input type="text" class="form-control @error('url_facebook') is-invalid @enderror" name="url_facebook" value="{{ old('url_facebook', '-') }}" placeholder="Masukkan URL Facebook">
                        
                            @error('url_facebook')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">URL TikTok</label>
                            <input type="text" class="form-control @error('url_tiktok') is-invalid @enderror" name="url_tiktok" value="{{ old('url_tiktok', '-') }}" placeholder="Masukkan URL TikTok">
                        
                            @error('url_tiktok')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">URL YouTube</label>
                            <input type="text" class="form-control @error('url_youtube') is-invalid @enderror" name="url_youtube" value="{{ old('url_youtube', '-') }}" placeholder="Masukkan URL YouTube">
                        
                            @error('url_youtube')
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
{{-- Tambahkan jika ada stylesheet tambahan --}}
@stop

@section('js')
{{-- Tambahkan jika ada script tambahan --}}
@stop
