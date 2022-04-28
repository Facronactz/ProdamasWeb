@extends('admin.master')

@section('prodamas', 'active')

@section('title')
Edit Transformasi Prodamas
@endsection

@section('content')

<form action="/admin/prodamas/" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="judul">Judul</label><br>
        <input type="text" class="form-control" name="judul" id="judul" value="{{$transform->judul}}">
        @error('judul')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="foto">Foto</label><br>
        <p>{{$transform->foto}}</p>
        <input type="file" class="form-control" accept="image/png, image/jpg, image/jpeg" name="foto" id="foto" value="{{$transform->foto}}">
        @error('foto')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="caption">Caption</label>
        <textarea name="caption" id="description" class="form-control" cols="30" rows="3">{{$transform->caption}}</textarea>
        @error('caption')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div><br>
    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="/admin/list-prodamas" class="btn btn-outline-primary">Back</a>
</form>
@endsection