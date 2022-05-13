@extends('admin.master')

@section('post', 'active')

@section('title')
    Foto Kegiatan
@endsection

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<a href="/admin/add-foto" class="btn btn-primary mb-3">Tambah Foto</a>
<table class="table" id="tableFoto">
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Judul</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Sampul</th>
            {{-- <th scope="col">Caption</th> --}}
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($posts as $post)
        <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->body }}</td>
            <!-- <td>{{ $post->cover }}</td> -->
            <td><img src="/cover/{{ $post->cover }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td>
            <td>
                <form action="/admin/foto/{{$post->id}}" method="POST">
                    <a href="/admin/foto/{{$post->id}}" class="btn btn-info">Edit</a>
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger my-1" onclick="return confirm('Yakin Ingin Menghapus Foto?')"
                        value="Delete">
                </form>
            </td>
        </tr>
        @empty
        <tr colspan="3">
            <td>No data</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection

@section('table')
    <script>
      $(document).ready(function() {
          $('#tableFoto').DataTable(); //sesuikan id tabel yg dibat
      } );
    </script>
@endsection