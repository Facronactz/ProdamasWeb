@extends('admin.master')

@section('tuliscerita', 'active')

@section('title')
Cerita Baru
@endsection

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
    <button type="button" class="btn-close t" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<form action="{{url('admin/list-tuliscerita')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
        @error('nama')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="nomor_telepon">Nomor Telepon</label>
        <input name="nomor_telepon" class="form-control" name="nomor_telepon" id="nomor_telepon" placeholder="Nomor Telepon">
        @error('nomor_telepon')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
        @error('email')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul">
        @error('judul')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="foto">Upload Foto</label><br>
        <input type="file" class="form-control" accept="image/png, image/jpg, image/jpeg" name="foto" id="Foto">
        @error('foto')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="file">File Cerita</label>
        <input type="file" class="form-control" accept="application/pdf" name="file" id="file">
        @error('file')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="ringkasan">Ringkasan Cerita</label>
        <textarea name="ringkasan" class="form-control" placeholder="Tulis cerita disini..." cols="30" rows="10"></textarea>
        @error('ringkasan')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Tambah Cerita</button>
    <a href="{{url('admin/list-tuliscerita')}}" class="btn btn-outline-primary">Kembali</a>
</form>
@endsection
