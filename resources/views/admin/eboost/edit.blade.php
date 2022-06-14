@extends('admin.master')
@section('eboost', 'active')
@section('title')
Edit E-Boost
@endsection
@section('content')

<form action="/admin/edit-eboost/{{$eboost->id}}" method="POST" enctype="multipart/form-data">
@csrf
@method('put')
    <div class="form-group">
        <label for="judul_tentang">Judul Tentang</label>
        <input name="judul_tentang" class="form-control" name="judul_tentang" id="judul_tentang" placeholder="Judul Tentang" value="{{ $eboost->judul_tentang }}">
        @error('judul_tentang')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="caption_tentang">Caption Tentang</label>
        <textarea name="caption_tentang" id="description" class="form-control" placeholder="Caption Tentang">{{ $eboost->caption_tentang }}</textarea>
        @error('caption_tentang')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="foto_tentang">Foto Tentang</label><br>
        <p>{{$eboost->foto_tentang}}</p>
        <input type="file" class="form-control" name="foto_tentang" id="foto_tentang">
        @error('foto_tentang')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="judul_info">Judul Info</label>
        <input name="judul_info" class="form-control" id="judul_info" placeholder="Judul info" value="{{ $eboost->judul_info }}">
        @error('judul_info')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="caption_info">Caption Info</label>
        <textarea name="caption_info" id="description" class="form-control" name="caption_info" placeholder="Caption Info">{{ $eboost->caption_info }}</Textarea>
        @error('caption_info')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="foto_info">Foto Info</label><br>
        <p>{{$eboost->foto_info}}</p>
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
        <textarea name="deskripsi" id="description" class="form-control" cols="30" rows="3"><?= $eboost->deskripsi ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="/admin/list-eboost" class="btn btn-outline-primary">Kembali</a>
</form>
@endsection