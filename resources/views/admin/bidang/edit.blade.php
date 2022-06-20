@extends('admin.master')

@section('bidang', 'active')

@section('title')
Edit Bidang
@endsection

@section('content')

<form action="/admin/bidang/{{$bidang->id}}" method="POST" enctype="application/x-www-form-urlencoded">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul" placeholder="judul of foto" value="{{$bidang->judul}}">
        @error('judul')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="konten">Foto</label><br>
        @if ($bidang->foto)
        <p>{{$bidang->foto}}</p>
        @endif
        <input type="file" class="form-control" name="foto" id="foto">
        @error('foto')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="caption">Caption</label>
        <textarea name="caption" id="description" class="form-control" cols="30" rows="3">{{$bidang->caption}}</textarea>
        @error('caption')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div><br>
    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="/admin/list-bidang" class="btn btn-outline-primary">Back</a>
</form>
@endsection