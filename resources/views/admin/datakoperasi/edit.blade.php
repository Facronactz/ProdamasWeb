@extends('admin.master')

@section('datakoperasi', 'active')

@section('title')
Edit Data Koperasi
@endsection

@section('content')

<form action="/admin/datakoperasi/{{$datakoperasi->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul" placeholder="judul" value="{{$datakoperasi->judul}}">
        @error('judul')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <input type="text" name="deskripsi" class="form-control" value="{{$datakoperasi->deskripsi}}">
        @error('deskripsi')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="code">Tableau</label>
        <textarea name="tableau" class="form-control" id="tableau">{{$datakoperasi->tableau}}</textarea>
        @error('tableau')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="konten">Konten</label>
        <textarea name="konten" class="form-control" id="data">{{$datakoperasi->konten}}</textarea>
        @error('konten')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="sumber">Sumber</label>
        <input type="text" name="sumber" class="form-control" id="sumber" value="{{$datakoperasi->sumber}}">
        @error('konten')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="/admin/list-datakoperasi" class="btn btn-outline-primary">Back</a>
</form>
@endsection