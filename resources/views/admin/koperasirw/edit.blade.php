@extends('admin.master')

@section('koperasirw', 'active')

@section('title')
Edit Deskripsi Koperasi RW
@endsection

@section('content')

<form action="/admin/koperasirw/{{ $koperasi->id }}" method="POST" enctype="application/x-www-form-urlencoded">
    @csrf
    @method('put')
    <div class="form-group">
        @error('deskripsi')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
        <label for="deskripsi">Deskripsi Koperasi</label>
        <textarea name="deskripsi" id="description" class="form-control" cols="30" rows="3"><?= $koperasi->deskripsi ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="/admin/list-koperasirw" class="btn btn-outline-primary">Back</a>
</form>
@endsection

