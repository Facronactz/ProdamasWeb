@extends('admin.master')
@section('wirausaha', 'active')
@section('title')
Wirausaha
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

<form action="/admin/list-wirausaha" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="form-group">
        <label for="caption_tentang">Tentang</label>
        <textarea name="tentang" class="form-control" name="tentang" id="tentang" placeholder="Tentang"></textarea>
        @error('tentang')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="foto_tentang">Foto Tentang</label><br>
        <input type="file" class="form-control" name="foto_tentang" id="foto_tentang">
        @error('foto_tentang')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="info">Info</label>
        <textarea name="info" class="form-control" name="info" id="info" placeholder="Info"></Textarea>
        @error('info')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="foto_info">Foto Info</label><br>
        <input type="file" class="form-control" name="foto_info" id="foto_info">
        @error('foto_info')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Tambah</button>
    <a href="/admin/list-wirausaha" class="btn btn-outline-primary">Kembali</a>
</form>
@endsection