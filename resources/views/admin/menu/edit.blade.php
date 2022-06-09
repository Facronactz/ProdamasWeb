@extends('admin.master')

@section('menu', 'active')

@section('title')
Edit Menu
@endsection

@section('content')

<form action="/admin/menu/{{$menu->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul" placeholder="judul" value="{{$menu->judul}}">
        @error('judul')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="link">Link</label>
        <input name="link" class="form-control" name="link" id="link" value="{{$menu->link}}">
        @error('link')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="status">Status</label>
        <input type="text" class="form-control" value="{{ $menu->status }}" readonly>
    </div>
    
    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="/admin/list-menu" class="btn btn-outline-primary">Back</a>
</form>
@endsection