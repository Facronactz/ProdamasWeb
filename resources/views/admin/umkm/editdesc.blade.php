@extends('admin.master')

@section('umkm', 'active')

@section('title')
Edit Deskripsi UMKM
@endsection

@section('content')

<form action="/admin/editdesc/{{ $descriptions->id }}" method="POST" enctype="application/x-www-form-urlencoded">
    @csrf
    @method('put')
    <div class="form-group">
        @error('desc_umkm')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
        <label for="desc_umkm">Description</label>
        <textarea name="desc_umkm" id="description" class="form-control" cols="30" rows="3"><?= $descriptions->desc_umkm ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="/admin/list-umkm" class="btn btn-outline-primary">Back</a>
</form>
@endsection