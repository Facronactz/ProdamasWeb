@extends('admin.master')

@section('kampungkeren', 'active')

@section('title')
Edit Deskripsi Kampung Keren
@endsection

@section('content')

<form action="/admin/kampungkerens/{{ $descriptions->id }}" method="POST" enctype="application/x-www-form-urlencoded">
    @csrf
    @method('put')
    <div class="form-group">
        @error('desc_kampungkeren')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
        <label for="desc_kampungkeren">Description</label>
        <textarea name="desc_kampungkeren" id="description" class="form-control" cols="30" rows="3"><?= $descriptions->desc_kampungkeren ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="/admin/list-kampungkeren" class="btn btn-outline-primary">Back</a>
</form>
@endsection