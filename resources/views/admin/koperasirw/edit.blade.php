@extends('admin.master')

@section('koperasirw', 'active')

@section('title')
Edit Informasi Koperasi RW
@endsection

@section('content')

<form action="/admin/koperasirw/{{ $koperasi->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        @error('informasi')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
        <label for="informasi">Informasi Koperasi</label>
        <textarea name="informasi" id="description" class="form-control" cols="30" rows="3"><?= $koperasi->informasi ?></textarea>
    </div>
    <div class="form-group">
        <label for="syarat">Syarat Pembentukan</label><br>
        <p>{{$koperasi->foto_syarat}}</p>
        <input type="file" class="form-control" accept="image/png, image/jpg, image/jpeg" name="foto_syarat" id="foto_syarat" value="{{$koperasi->foto_syarat}}">
        @error('syarat')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="alur">Alur Pembentukan</label><br>
        <p>{{$koperasi->foto_alur}}</p>
        <input type="file" class="form-control" accept="image/png, image/jpg, image/jpeg" name="foto_alur" id="foto_alur" value="{{$koperasi->foto_alur}}">
        @error('alur')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="legalitas">Legalitas</label><br>
        <p>{{$koperasi->foto_legalitas}}</p>
        <input type="file" class="form-control" accept="image/png, image/jpg, image/jpeg" name="foto_legalitas" id="foto_legalitas" value="{{$koperasi->foto_legalitas}}">
        @error('legalitas')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="/admin/list-koperasirw" class="btn btn-outline-primary">Back</a>
</form>
@endsection

