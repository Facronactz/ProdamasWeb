@extends('admin.master')

@section('englishmasive', 'active')

@section('title')
Edit English Masive
@endsection

@section('content')

<form action="/admin/englishmasive/{{$english_masive->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul" placeholder="judul" value="{{$english_masive->judul}}">
        @error('judul')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <input type="text" name="deskripsi" class="form-control" value="{{$english_masive->deskripsi}}">
        @error('deskripsi')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="judul_tutor">Judul Tutor</label>
        <textarea name="judul_tutor" class="form-control" id="judul_tutor">{{$english_masive->judul_tutor}}</textarea>
        @error('judul_tutor')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="tableau_tutor">Tableau Tutor</label>
        <textarea name="tableau_tutor" class="form-control" id="tableau_tutor">{{$english_masive->tableau_tutor}}</textarea>
        @error('tableau_tutor')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="judul_partisipan">Judul Partisipan</label>
        <textarea name="judul_partisipan" class="form-control" id="judul_partisipan">{{$english_masive->judul_partisipan}}</textarea>
        @error('judul_partisipan')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="tableau_partisipan">Tableau Partisipan</label>
        <textarea name="tableau_partisipan" class="form-control" id="tableau_partisipan">{{$english_masive->tableau_partisipan}}</textarea>
        @error('tableau_partisipan')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="konten">Konten</label>
        <input type="text" name="konten" class="form-control" id="konten" value="{{$english_masive->konten}}">
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
    <a href="/admin/list-englishmasive" class="btn btn-outline-primary">Back</a>
</form>
@endsection