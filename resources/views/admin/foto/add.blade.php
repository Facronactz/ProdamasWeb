@extends('admin.master')

@section('foto', 'active')

@section('title')
Foto Baru
@endsection

@section('content')
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
  </symbol>
</svg>

@if(session('success'))
<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="26" height="26" role="img" aria-label="Success:">
    <use xlink:href="#check-circle-fill" />
  </svg>
  <div>
    {{session('success')}}
    <button type="button" class="btn-close t" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
@endif

<form action="/admin/list-foto" method="POST" enctype="multipart/form-data">
  @csrf
  <input type="text" name="title" class="form-control m-2" placeholder="Judul Kegiatan">
  <Textarea name="body" cols="20" rows="4" class="form-control m-2" placeholder="Deskripsi Kegiatan"></Textarea>
  <label class="m-2">Sampul Foto Kegiatan</label>
  <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">
  <label class="m-2">Isi Foto Kegiatan (*maksimal 8 foto kegiatan)</label>
  <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>
  <label class="m-2" for="tags">Tag</label>
  <input id="input-file-now-custom-3" class="form-control m-2" type="text" data-role="tagsinput" name="tags">
  <button type="submit" class="btn btn-primary">Tambah Foto</button>
  <a href="/admin/list-foto" class="btn btn-outline-primary">Kembali</a>
</form>
@endsection