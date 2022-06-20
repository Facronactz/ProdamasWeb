@extends('admin.master')

@section('trend', 'active')

@section('title')
Edit Data Trend
@endsection

@section('content')

<form action="/admin/trend/{{1}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <!-- <div class="form-group">
        <label for="kota">Kota</label>
        <textarea name="kota" class="form-control tableau">{{$trend->kota}}</textarea>
        @error('kota')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div> -->

    <div class="form-group">
        <label for="kecamatan">Kecamatan</label>
        <textarea name="kecamatan" class="form-control tableau">{{$trend->kecamatan}}</textarea>
        @error('kecamatan')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <!-- <div class="form-group">
        <label for="kelurahan">Kelurahan</label>
        <textarea name="kelurahan" class="form-control tableau">{{$trend->kelurahan}}</textarea>
        @error('kelurahan')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div> -->

    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="/admin/trend/{{1}}" class="btn btn-outline-primary">Back</a>
</form>
@endsection