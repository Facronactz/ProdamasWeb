@extends('admin.master')

@section('carousel', 'active')

@push('link_summer')
    <!-- Summernote -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@section('title')
    Edit Carousel
@endsection

@section('content')
    @if(session('success')) 
        <div class="alert alert-success">
            {{session('success')}}
            <button type="button" class="btn-close t" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form action="{{ url('admin/edit-carousel/'.$carousel->id)}}" method="POST"  enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="{{ $carousel->nama}}">
            @error('nama')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="foto">Foto</label><br>
            <input type="file" class="form-control" name="foto" id="foto">
            @error('foto')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Edit Carousel</button>
        <a href="{{ url('admin/list-carousel')}}" class="btn btn-outline-primary">Kembali</a>
    </form>
@endsection

@push('summernote')
    <!-- Summernote -->
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <script>
    $('#summernote').summernote({
      placeholder: 'Article...',
      fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Merriweather', 'Montserrat', 'Scheherazade', 'Helvetica', 'Impact', 'Tahoma', 'Times New Roman', 'Verdana'],
      fontNamesIgnoreCheck: ['Merriweather', 'Montserrat', 'Scheherazade'],
      height: 400,
      popatmouse: true
    });
  </script>
@endpush