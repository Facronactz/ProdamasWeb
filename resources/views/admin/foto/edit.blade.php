@extends('admin.master')

@section('post', 'active')

@section('title')
Edit Foto
@endsection

@section('content')

<!-- batas -->

<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-lg-3">
            <p>Foto Sampul Kegiatan:</p>
            {{-- <form action="/deletecover/{{ $posts->id }}" method="post">
            <button class="btn text-danger">X</button>
            @csrf
            @method('delete')
            </form> --}}
            <img src="/cover/{{ $posts->cover }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
            <br>
            @if (count($posts->images)>0)
            <p>Foto Isi Kegiatan:</p>
            @foreach ($posts->images as $img)
            <form action="/deleteimage/{{ $img->id }}" method="post">
                <button class="btn text-danger">X</button>
                @csrf
                @method('delete')
            </form>
            <img src="/images/{{ $img->image }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
            @endforeach
            @endif
        </div>
        <div class="col-lg-6">
            <form action="/update/{{ $posts->id }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    @csrf
                    @method("post")
                    <input type="text" name="title" class="form-control m-2" placeholder="title" value="{{ $posts->title }}">
                    <Textarea name="body" cols="20" rows="4" class="form-control m-2" placeholder="body">{{ $posts->body }}</Textarea>
                    <label class="m-2">Sampul Foto Kegiatan</label>
                    <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">

                    <label class="m-2">Isi Foto Kegiatan (*maksimal 8 foto kegiatan)</label>
                    <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>
                    <label class="m-2">Tag</label>
                    <input id="input-file-now-custom-3" class="form-control m-2" type="text" data-role="tagsinput" name="tags" value="{{$tagg ?? ''}}">
                </div>

                <button type="submit" class="btn btn-primary">Edit Foto</button>
                <a href="/admin/list-foto" class="btn btn-outline-primary">Kembali</a>
            </form>
        </div>
    </div>
    </body>

    <!-- batas -->
    @endsection