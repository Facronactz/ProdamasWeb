@extends('admin.master')

@section('foto', 'active')

@section('title')
    Edit Artikel
@endsection

@section('content')

    <form action="/admin/foto/{{$foto->id}}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('put')
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="judul of foto" value="{{$foto->judul}}">
            @error('judul')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="konten">Konten</label><br>
            @if ($foto->konten)
                <p>{{$foto->konten}}</p>
            @endif
            <input type="file" class="form-control" name="konten" id="konten" value="{{$foto->konten}}">
            @error('konten')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="caption">Caption</label>
            <textarea name="caption" class="form-control" cols="30" rows="3">{{$foto->caption}}</textarea>
            @error('caption')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div><br>
        <button type="submit" class="btn btn-primary">Edit Foto</button>
        <a href="/admin/list-foto" class="btn btn-outline-primary">Back</a>
    </form>
@endsection