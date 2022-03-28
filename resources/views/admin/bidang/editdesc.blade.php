@extends('admin.master')

@section('bidang', 'active')

@section('title')
Edit Deskripsi Bidang
@endsection

@section('content')

<form action="/admin/bidangs/{{ $descriptions->id }}" method="POST" enctype="application/x-www-form-urlencoded">
    @csrf
    @method('put')
    <div class="form-group">
        @error('desc_bidang')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
        <label for="desc_bidang">Description</label>
        <textarea name="desc_bidang" class="form-control" cols="30" rows="3"><?= $descriptions->desc_bidang ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="/admin/list-bidang" class="btn btn-outline-primary">Back</a>
</form>
@endsection