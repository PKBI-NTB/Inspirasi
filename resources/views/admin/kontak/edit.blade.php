@extends('adminlte::page')

@section('title', 'Edit Kontak')

@section('content_header')
    <h1>Edit Kontak</h1>
@stop

@section('content')
<body style="background: lightgray">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('admin.kontak.update', $kontak->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="telpon" class="form-label">Telepon</label>
                                <input type="text" name="telpon" class="form-control" value="{{ old('telpon', $kontak->telpon) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea name="alamat" class="form-control" rows="3" required>{{ old('alamat', $kontak->alamat) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email', $kontak->email) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="url_instagram" class="form-label">Instagram URL</label>
                                <input type="text" name="url_instagram" class="form-control" value="{{ old('url_instagram', $kontak->url_instagram) }}">
                            </div>

                            <div class="mb-3">
                                <label for="url_facebook" class="form-label">Facebook URL</label>
                                <input type="text" name="url_facebook" class="form-control" value="{{ old('url_facebook', $kontak->url_facebook) }}">
                            </div>

                            <div class="mb-3">
                                <label for="url_tiktok" class="form-label">TikTok URL</label>
                                <input type="text" name="url_tiktok" class="form-control" value="{{ old('url_tiktok', $kontak->url_tiktok) }}">
                            </div>

                            <div class="mb-3">
                                <label for="url_youtube" class="form-label">YouTube URL</label>
                                <input type="text" name="url_youtube" class="form-control" value="{{ old('url_youtube', $kontak->url_youtube) }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('admin.kontak.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@stop
