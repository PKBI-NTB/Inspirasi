@extends('adminlte::page')

@section('content_header')
    <h1>Edit Pengurus</h1>
@stop

@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('admin.profile.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Nama Pengurus</label>
                            <input type="text" 
                                   class="form-control @error('nama') is-invalid @enderror" 
                                   name="nama" 
                                   value="{{ old('nama', $profile->nama) }}" 
                                   placeholder="Masukkan Nama Pengurus">
                        
                            @error('nama')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Posisi</label>
                            <input type="text" 
                                   class="form-control @error('posisi') is-invalid @enderror" 
                                   name="posisi" 
                                   value="{{ old('posisi', $profile->posisi) }}" 
                                   placeholder="Masukkan Posisi/Jabatan">
                        
                            @error('posisi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Image</label>
                            <input type="file" 
                                   class="form-control @error('image') is-invalid @enderror" 
                                   name="image">
                            @if ($profile->image)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/profile/' . $profile->image) }}" 
                                         alt="Pengurus Image" 
                                         class="img-thumbnail" 
                                         style="width: 150px; height: 150px; object-fit: cover;">
                                </div>
                            @endif
                        
                            @error('image')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary me-3">Simpan Perubahan</button>
                        <a href="{{ route('admin.profile.index') }}" class="btn btn-md btn-secondary">Kembali</a>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <!-- Tambahkan CSS tambahan jika diperlukan -->
@stop

@section('js')
    <!-- Tambahkan JS tambahan jika diperlukan -->
@stop
