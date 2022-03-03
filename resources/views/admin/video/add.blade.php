@extends('admin.master')

@section('video', 'active')

@section('title')
    Tambah Video Baru
@endsection

@section('content')
    @if(session('success')) 
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    <form action="/admin/list-video" method="POST"  enctype="multipart/form-data" >
        @csrf
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
            <label for="judul">Judul</label>
            <input name="judul" class="form-control" name="judul" id="judul" placeholder="Judul">
            @error('judul')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="konten">Upload Konten Video</label><br>
            <input type="file" class="form-control" name="konten" id="konten">
            @error('konten')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="caption">Caption</label>
            <textarea name="caption" class="form-control" cols="30" rows="10"></textarea>
            @error('caption')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary" value="submit">Tambah Video</button>
        <a href="/admin/list-video" class="btn btn-outline-primary">Kembali</a>
    </form>
@endsection