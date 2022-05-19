@extends('admin.master')

@section('tuliscerita', 'active')

@section('title')
Edit Cerita
@endsection

@section('content')

<form action="/admin/tuliscerita/{{$tulis_ceritas->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    {{-- <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" value="{{ $tulis_ceritas->status }}" readonly>
    </div> --}}

    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" placeholder="nama of cerita" value="{{$tulis_ceritas->nama}}">
        @error('nama')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" id="email" placeholder="email of cerita" value="{{$tulis_ceritas->email}}">
        @error('email')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="nomor_telepon">No. Handphone</label>
        <input type="text" class="form-control" name="nomor_telepon" id="no_telepon" placeholder="nomor telepon" value="{{$tulis_ceritas->nomor_telepon}}">
        @error('email')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul" placeholder="judul of tuliscerita" value="{{$tulis_ceritas->judul}}">
        @error('judul')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="ringkasan">Ringkasan Cerita</label>
        <textarea name="ringkasan" class="form-control" cols="30" rows="10">{{$tulis_ceritas->ringkasan}}</textarea>
        @error('ringkasan')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="foto">Foto</label><br>
        @if ($tulis_ceritas->foto)
        <p>{{$tulis_ceritas->foto}}</p>
        @endif
        <input type="file" accept="image/png, image/jpg, image/jpeg" name="foto" id="foto">
        @error('foto')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="file">File</label><br>
        @if ($tulis_ceritas->file)
        <p>{{$tulis_ceritas->file}}</p>
        @endif
        <input type="file" accept="application/pdf" name="file" id="file">
        @error('file')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div><br>

    <button type="submit" class="btn btn-primary">Edit Cerita</button>
    <a href="/admin/list-tuliscerita" class="btn btn-outline-primary">Back</a>
</form>
@endsection
