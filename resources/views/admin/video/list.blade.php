@extends('admin.master')

@section('video', 'active')

@section('title')
Video Submission
@endsection

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<a href="/admin/add-video" class="btn btn-primary mb-3">Tambah Video</a>
<table class="table" id="tableVideo">
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Judul</th>
            <th scope="col">Konten Video</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($videos as $key=>$video)
        <tr>
            <td>{{$key + 1}}</th>
            <td>{{$video->created_at}}</td>
            <td>{{$video->judul}}</td>
            <!-- <td>{{Str::limit($video->video, 60)}}</td> -->
            <td>{{$video->konten}}</td>
            <td>
                <form action="/admin/video/{{$video->id}}" method="POST">
                    <a href="/admin/video/{{$video->id}}" class="btn btn-info">Edit</a>
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger my-1" onclick="return confirm('Yakin ingin menghapus video?')"
                        value="Hapus">
                </form>
            </td>
        </tr>
        @empty
        <tr colspan="3">
            <td>Tidak Ada Data</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection

@section('table')
    <script>
      $(document).ready(function() {
          $('#tableVideo').DataTable(); //sesuikan id tabel yg dibat
      } );
    </script>
@endsection