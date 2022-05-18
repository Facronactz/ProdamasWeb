@extends('admin.master')

@section('video', 'active')

@section('title')
Edit Video
@endsection

@section('content')

<form action="/admin/video/{{$video->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="gambar_sampul">Gambar Sampul</label><br>
        @if ($video->gambar_sampul)
        <p>{{$video->gambar_sampul}}</p>
        @endif
        <input type="file" class="form-control" accept="image/png, image/jpg, image/jpeg" name="gambar_sampul" id="gambar_sampul">
        @error('gambar_sampul')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul" placeholder="judul of video" value="{{$video->judul}}">
        @error('judul')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="konten">Konten</label>
        @endif
        <input type="text" name="konten" class="form-control" cols="30" rows="10"value="{{$video->konten}}">
        @error('konten')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="caption">Caption</label>
        <textarea name="caption" id="description" class="form-control" cols="30" rows="3">{{$video->caption}}</textarea>
        @error('caption')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="tags">Tag</label>
        <input class="form-control" type="text" data-role="tagsinput" name="tags" value="{{$tagg}}">
        @error('tags')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Edit Video</button>
    <a href="/admin/list-video" class="btn btn-outline-primary">Back</a>
</form>
@endsection