@extends('admin.master')

@section('artikel', 'active')

@section('title')
Artikel Baru
@endsection

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
    <button type="button" class="btn-close t" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<form action="/admin/list-article" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="status">Ststus</label>
        <select class="form-control" name="status" id="status" placeholder="Status">
            <option value="">- pilih -</option>
            <option value="published">Published</option>
            <option value="unpublished">Unpublished</option>
        </select>
        @error('status')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="gambar_sampul">Upload Gambar Sampul</label><br>
        <input type="file" class="form-control" name="gambar_sampul" id="gambar_sampul">
        @error('gambar_sampul')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="text_sampul">Caption Sampul</label>
        <input type="text" class="form-control" name="text_sampul" id="text_sampul" placeholder="Judul">
        @error('text_sampul')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="judul">Judul</label>
        <input name="judul" class="form-control" name="judul" id="judul" placeholder="Judul">
        @error('judul')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="slug">Slug</label>
        <input name="slug" class="form-control" name="slug" id="slug" placeholder="Slug">
        @error('slug')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="article">Konten</label>
        <textarea name="article" id="description" class="form-control" placeholder="Tulis cerita disini..." cols="30" rows="10"></textarea>
        @error('article')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="tags">Tag</label>
        <input class="form-control" type="text" data-role="tagsinput" name="tags">
        @error('tags')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Tambah Artikel</button>
    <a href="/admin/list-article" class="btn btn-outline-primary">Kembali</a>
</form>
@endsection