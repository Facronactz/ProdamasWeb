@extends('admin.master')

@section('audio', 'active')

@section('title')
Edit Audio
@endsection

@section('content')

<form action="/admin/audio/{{$audio->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="gambar_sampul">Gambar Sampul</label><br>
        @if ($audio->gambar_sampul)
        <p>{{$audio->gambar_sampul}}</p>
        @endif
        <input type="file" accept="image/png, image/jpg, image/jpeg" name="gambar_sampul" class="form-control" id="gambar_sampul">
        @error('gambar_sampul')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul" placeholder="judul of audio" value="{{$audio->judul}}">
        @error('judul')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="konten">Konten</label>
        <input type="text" name="konten" class="form-control" cols="30" rows="10"value="{{$audio->konten}}">
        @error('audio')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="caption">Caption</label>
        <textarea name="caption" class="form-control" id="description" cols="30" rows="3" >{{$audio->caption}}</textarea>
        @error('caption')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="tags">Tag</label>
        <br>
        {{-- @foreach ($audio->tags as $tag)
                <label class="label label-info">{{ $tag->name }}</label>
        @endforeach --}}
        <input class="form-control" type="text" data-role="tagsinput" name="tags" value="{{$tagg}}">
        @error('tags')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Edit Audio</button>
    <a href="/admin/list-audio" class="btn btn-outline-primary">Back</a>
</form>
@endsection