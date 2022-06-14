@extends('admin.master')

@section('kube', 'active')

@section('title')
Edit Informasi Kube
@endsection

@section('content')

<form action="/admin/kube/{{ $kube->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        @error('informasi')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
        <label for="informasi">Informasi Kube</label>
        <textarea name="informasi" id="description" class="form-control" cols="30" rows="3"><?= $kube->informasi ?></textarea>
    </div>
    <div class="form-group">
        <label for="syarat">Syarat Pembentukan</label><br>
        <p>{{$kube->foto_syarat}}</p>
        <input type="file" class="form-control" accept="image/png, image/jpg, image/jpeg" name="foto_syarat" id="foto_syarat" value="{{$kube->foto_syarat}}">
        @error('syarat')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="alur">Alur Pembentukan</label><br>
        <p>{{$kube->foto_alur}}</p>
        <input type="file" class="form-control" accept="image/png, image/jpg, image/jpeg" name="foto_alur" id="foto_alur" value="{{$kube->foto_alur}}">
        @error('alur')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="/admin/list-kube" class="btn btn-outline-primary">Back</a>
</form>
@endsection
