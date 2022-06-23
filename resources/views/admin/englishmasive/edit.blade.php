@extends('admin.master')

@section('englishmasive', 'active')

@section('title')
Edit English Masive
@endsection

@section('content')

<form action="/admin/edit-englishmasive/{{$dataemas->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul" placeholder="judul" value="{{$dataemas->judul}}">
        @error('judul')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <input type="text" name="deskripsi" class="form-control" value="{{$dataemas->deskripsi}}">
        @error('deskripsi')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="tableau_tutor">Tableau Tutor</label>
        <textarea name="tableau_tutor" class="form-control tableau" id="tableau">{{$dataemas->tableau_tutor}}</textarea>
        @error('tableau_tutor')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="tableau_partisipan">Tableau Partisipan</label>
        <textarea name="tableau_partisipan" class="form-control tableau" id="tableau">{{$dataemas->tableau_partisipan}}</textarea>
        @error('tableau_partisipan')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="konten">Konten</label>
        <textarea name="konten" class="form-control summernote" name="konten" id="konten" placeholder="konten">{{ $dataemas->konten }}</Textarea>
        @error('konten')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="sumber">Sumber</label>
        <input type="text" name="sumber" class="form-control" id="sumber" value="{{$dataemas->sumber}}">
        @error('konten')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="/admin/list-englishmasive" class="btn btn-outline-primary">Back</a>
</form>
@endsection