@extends('admin.master')

@section('foto', 'active')

@section('title')
Foto Submission
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
            <th scope="col">Tanggal</th>
            <th scope="col">Judul</th>
            <th scope="col">Konten</th>
            {{-- <th scope="col">Caption</th> --}}
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($fotos as $key=>$foto)
        <tr>
            <td>{{$key + 1}}</th>
            <td>{{$foto->created_at}}</td>
            <td>{{$foto->judul}}</td>
            <!-- <td>{{Str::limit($foto->konten, 60)}}</td> -->
            <td>{{$foto->konten}}</td>
            {{-- <td>{{$foto->caption}}</td> --}}
            <td>
                <form action="/admin/foto/{{$foto->id}}" method="POST">
                    <a href="/admin/foto/{{$foto->id}}" class="btn btn-info">Edit</a>
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