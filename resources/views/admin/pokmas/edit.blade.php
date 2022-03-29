@extends('admin.master')

@section('pokmas', 'active')

@section('title')
Edit Pokmas
@endsection

@section('content')

<form action="/admin/pokmas/{{$pokmas->id}}" method="POST" enctype="application/x-www-form-urlencoded">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="konten">Foto</label><br>
        @if ($pokmas->foto)
        <p>{{$pokmas->foto}}</p>
        
        @else
        <input type="file" class="form-control" name="foto[]" id="foto[]" value="{{$pokmas->foto}}">
        @error('foto')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
        @endif
    </div>
    <div class="form-group">
        <label for="caption">Caption</label>
        <textarea name="caption" id="description" class="form-control" cols="30" rows="3">{{$pokmas->caption}}</textarea>
        @error('caption')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div><br>
    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="/admin/list-pokmas" class="btn btn-outline-primary">Back</a>
</form>
@endsection