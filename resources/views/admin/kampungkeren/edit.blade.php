@extends('admin.master')

@section('kampungkeren', 'active')

@section('title')
Edit Kampung Keren
@endsection

@section('content')

<form action="/admin/kampungkeren/{{$kampungkeren->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul" placeholder="judul of foto" value="{{$kampungkeren->judul}}">
        @error('judul')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="warna">Warna</label>
        <input name="warna" class="form-control" name="warna" id="warna" placeholder="warna">
        @error('warna')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="konten">Foto</label><br>
        @if ($kampungkeren->foto)
        <p>{{$kampungkeren->foto}}</p>
        @endif
        <input type="file" class="form-control" name="foto[]" id="foto[]" value="{{$kampungkeren->foto}}">
        @error('foto')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="caption">Caption</label>
        <textarea name="caption" id="description" class="form-control" cols="30" rows="3">{{$kampungkeren->caption}}</textarea>
        @error('caption')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div><br>
    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="/admin/list-kampungkeren" class="btn btn-outline-primary">Back</a>
</form>
@endsection