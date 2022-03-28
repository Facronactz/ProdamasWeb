@extends('admin.master')

@section('pokmas', 'active')

@section('title')
Edit Deskripsi Pokmas
@endsection

@section('content')

<form action="/admin/pokmas/" method="POST" enctype="application/x-www-form-urlencoded">
    @csrf
    @method('put')
    <div class="form-group">
        @error('desc_pokmas')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
        <label for="desc_pokmas">Deskripsi</label>
        <textarea name="desc_pokmas" id="description" class="form-control" cols="30" rows="3">{{ $descriptions->desc_pokmas }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="/admin/list-pokmas" class="btn btn-outline-primary">Back</a>
</form>
@endsection