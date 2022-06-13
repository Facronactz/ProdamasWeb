@extends('admin.master')
@section('wirausaha', 'active')
@section('title')
Edit E-Boost
@endsection
@section('content')

<form action="/admin/edit-wirausaha/{{$wirausaha->id}}" method="POST" enctype="application/x-www-form-urlencoded">
@csrf
@method('put')

    <div class="form-group">
        <label for="caption_tentang">Tentang</label>
        <textarea name="caption_tentang" class="form-control" name="caption_tentang" id="caption_tentang" placeholder="Caption Tentang">{{ $wirausaha->caption_tentang }}</textarea>
        @error('caption_tentang')
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
        <label for="caption_info">Caption Info</label>
        <textarea name="caption_info" class="form-control" name="caption_info" id="caption info" placeholder="Caption Info">{{ $wirausaha->caption_info }}</Textarea>
        @error('caption_info')
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

    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="/admin/list-wirausaha" class="btn btn-outline-primary">Kembali</a>
</form>
@endsection