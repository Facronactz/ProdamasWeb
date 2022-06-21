@extends('admin.master')

@section('englishmasive', 'active')

@section('title')
Edit English Masive
@endsection

@section('content')

<form action="/admin/edit-englishmasive/{{$english_masive->id}}" method="POST" enctype="multipart/form-data">
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
        <label for="tableau_tutor">Tableau Tutor</label>
        <textarea name="tableau_tutor" class="form-control tableau" id="tableau">{{$english_masive->tableau_tutor}}</textarea>
        @error('tableau_tutor')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="tableau_partisipan">Tableau Partisipan</label>
        <textarea name="tableau_partisipan" class="form-control tableau" id="tableau">{{$english_masive->tableau_partisipan}}</textarea>
        @error('tableau_partisipan')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="konten">Konten</label>
        <textarea name="konten" class="form-control summernote" name="konten" id="konten" placeholder="konten">{{ $english_masive->konten }}</Textarea>
        @error('konten')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="sumber">Sumber</label>
        <input type="text" name="sumber" class="form-control" id="sumber" value="{{$english_masive->sumber}}">
        @error('konten')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
<!--     
    <div class="form-group">
        <label for="gambar1">Gambar 1</label><br>
        <p>{{$english_masive->gambar1}}</p>
        <input type="file" accept="image/png, image/jpg, image/jpeg" name="gambar1" class="form-control" id="gambar1" value="{{$english_masive->gambar1}}">
        @error('gambar1')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="gambar2">Gambar 2</label><br>
        <p>{{$english_masive->gambar2}}</p>
        <input type="file" accept="image/png, image/jpg, image/jpeg" name="gambar2" class="form-control" id="gambar2" value="{{$english_masive->gambar2}}">
        @error('gambar2')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="gambar3">Gambar 3</label><br>
        <p>{{$english_masive->gambar3}}</p>
        <input type="file" accept="image/png, image/jpg, image/jpeg" name="gambar3" class="form-control" id="gambar3" value="{{$english_masive->gambar3}}">
        @error('gambar3')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
 -->
    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="/admin/list-englishmasive" class="btn btn-outline-primary">Back</a>
</form>
@endsection