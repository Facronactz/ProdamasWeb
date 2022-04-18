@extends('admin.master')

@section('tuliscerita', 'active')

@section('title')
Edit Deskripsi Tulis Cerita
@endsection

@section('content')

<form action="/admin/tulis_cerita/{{ $descriptions->id}}" method="POST" enctype="application/x-www-form-urlencoded">
    @csrf
    @method('put')
    <div class="form-group">
        @error('desc_tuliscerita')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
        <label for="desc_tuliscerita">Description</label>
        <textarea name="desc_tuliscerita" id="description" class="form-control" cols="30" rows="3"><?= $descriptions->desc_tuliscerita ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="{{url('admin/list-tuliscerita')}}" class="btn btn-outline-primary">Back</a>
</form>
@endsection 