@extends('admin.master')
@section('wirausaha', 'active')
@section('title')
Edit Wirausaha
@endsection
@section('content')

<form action="/admin/edit-wirausaha/{{$wirausaha->id}}" method="POST" enctype="multipart/form-data">
@csrf
@method('put')

    <div class="form-group">
        <label for="tentang">Tentang</label>
        <textarea name="tentang" class="form-control" name="tentang" id="tentang" placeholder="Tentang">{{ $wirausaha->tentang }}</textarea>
        @error('tentang')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="foto_tentang">Foto Tentang</label><br>
        <p>{{$wirausaha->foto_tentang}}</p>
        <input type="file" class="form-control" name="foto_tentang" id="foto_tentang">
        @error('foto_tentang')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="info">Info</label>
        <textarea name="info" class="form-control" name="info" id="info" placeholder="Info">{{ $wirausaha->info }}</Textarea>
        @error('info')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="foto_info">Foto Info</label><br>
        <p>{{$wirausaha->foto_info}}</p>
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
        <textarea name="deskripsi" id="description" class="form-control" cols="30" rows="3"><?= $wirausaha->deskripsi ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="/admin/list-wirausaha" class="btn btn-outline-primary">Kembali</a>
</form>
@endsection