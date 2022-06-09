@extends('admin.master')

@section('umkm', 'active')

@section('title')
UMKM Baru
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

<form action="/admin/editlist-umkm/{{$umkm->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="judul">Judul</label>
        <input name="judul" class="form-control" name="judul" id="judul" value="{{$umkm->judul}}">
        @error('judul')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="foto">Foto</label><br>
        <p>{{$umkm->foto}}</p>
        <input type="file" class="form-control" accept="image/png, image/jpg, image/jpeg" name="foto" id="foto">
        @error('foto')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="kecamatan">Kecamatan</label>
        <input name="kecamatan" class="form-control" name="kecamatan" id="kecamatan" value="{{$umkm->kecamatan}}">
        @error('kelurahan')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="kelurahan">Kelurahan</label>
        <input name="kelurahan" class="form-control" name="kelurahan" id="kelurahan" value="{{$umkm->kelurahan}}">
        @error('kelurahan')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="jenis">Jenis</label>
        <input name="jenis" class="form-control" name="jenis" id="jenis" value="{{$umkm->jenis}}">
        @error('jenis')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="tahun">Tahun</label>
        <input name="tahun" class="form-control" name="tahun" id="tahun" value="{{$umkm->tahun}}">
        @error('tahun')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="contact">Contact</label>
        <input name="contact" class="form-control" name="contact" id="contact" value="{{$umkm->contact}}">
        @error('contact')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input name="alamat" class="form-control" name="alamat" id="alamat" value="{{$umkm->alamat}}">
        @error('alamat')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="/admin/list-umkm" class="btn btn-outline-primary">Kembali</a>
</form>
@endsection