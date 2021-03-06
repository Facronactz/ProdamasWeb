@extends('admin.master')

@section('prodamas', 'active')

@section('title')
Edit Regulasi
@endsection

@section('content')
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
    </symbol>
</svg>

@if(session('success'))
<div class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
        <use xlink:href="#check-circle-fill" />
    </svg>
    <div>
        {{session('success')}}
        <button type="button" class="btn-close t" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif

<form action="/admin/prodamass/{{$regulasi->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="judul">Judul</label>
        <textarea name="judul" class="form-control" id="description" name=" judul">{{$regulasi->judul}}</textarea>
        @error('judul')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="foto">File</label><br>
        <p>{{$regulasi->file}}</p>
        <input type="file" class="form-control" name="file" id="file">
        @error('file')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="sumber">Sumber</label>
        <input name="sumber" class="form-control" name="sumber" value="{{$regulasi->sumber}}">
        @error('sumber')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
    <a href="/admin/list-prodamas" class="btn btn-outline-primary">Kembali</a>
</form>
@endsection