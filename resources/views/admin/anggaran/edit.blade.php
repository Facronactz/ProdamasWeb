@extends('admin.master')

@section('anggaran', 'active')

@section('title')
Edit Anggaran
@endsection

@section('content')

<form action="/admin/anggaran/{{$anggaran->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul" placeholder="judul" value="{{$anggaran->judul}}">
        @error('judul')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <input type="text" name="deskripsi" class="form-control" value="{{$anggaran->deskripsi}}">
        @error('deskripsi')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="tableau">Tableau</label>
        <textarea style="height:250px"name="tableau" class="form-control" id="tableau">{{$anggaran->tableau}}</textarea>
        @error('tableau')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="konten">Konten</label>
        <textarea name="konten" class="form-control" id="data">{{$anggaran->konten}}</textarea>
        @error('konten')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="sumber">Sumber</label>
        <input type="text" name="sumber" class="form-control" id="sumber" value="{{$anggaran->sumber}}">
        @error('konten')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="/admin/list-anggaran" class="btn btn-outline-primary">Back</a>
</form>
@endsection