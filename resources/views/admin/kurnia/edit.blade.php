@extends('admin.master')
@section('kurnia', 'active')
@section('title')
Edit Kurnia
@endsection
@section('content')

<form action="/admin/edit-kurnia/{{$kurnia->id}}" method="POST" enctype="multipart/form-data">
@csrf
@method('put')
    <div class="form-group">
        <label for="judul_alur">Judul Alur</label>
        <input name="judul_alur" class="form-control" name="judul_alur" id="judul_alur" placeholder="Judul Alur" value="{{ $kurnia->judul_alur }}">
        @error('judul_alur')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="caption_alur">Caption Alur</label>
        <textarea name="caption_alur" class="form-control summernote" placeholder="Caption Alur">{{ $kurnia->caption_alur }}</textarea>
        @error('caption_alur')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="foto_alur">Foto Alur</label><br>
        <p>{{$kurnia->foto_alur}}</p>
        <input type="file" class="form-control" name="foto_alur" id="foto_alur">
        @error('foto_alur')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="judul_info">Judul Info</label>
        <input name="judul_info" class="form-control" id="judul_info" placeholder="Judul info" value="{{ $kurnia->judul_info }}">
        @error('judul_info')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="caption_info">Caption Info</label>
        <textarea name="caption_info" class="form-control summernote" name="caption_info" placeholder="Caption Info">{{ $kurnia->caption_info }}</Textarea>
        @error('caption_info')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="foto_info">Foto Info</label><br>
        <p>{{$kurnia->foto_info}}</p>
        <input type="file" class="form-control" name="foto_info" id="foto_info">
        @error('foto_info')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        @error('deskripsi')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" class="form-control summernote" cols="30" rows="3"><?= $kurnia->deskripsi ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="/admin/list-kurnia" class="btn btn-outline-primary">Kembali</a>
</form>
@endsection
