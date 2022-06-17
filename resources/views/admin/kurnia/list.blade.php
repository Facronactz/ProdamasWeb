@extends('admin.master')
@section('kurnia', 'active')
@section('title')
Kurnia Submission
@endsection

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

{{-- <div class="form-group">
    <label for="desc_kurnia">Deskripsi</label>
    <!-- <table class="table">
        @foreach ($kurnia ?? '' as $kurnias)
        <tr>
            <td><?= $kurnias->desc_kurnia ?></td>
            <td align="right">
                <form action="/admin/kurnia/{{ $kurnias->id }}" method="POST">
                    <a href="/admin/kurnia/{{ $kurnias->id }}" class="btn btn-info">Edit</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table> -->
</div> --}}
{{-- <a href="/admin/add-kurnia" class="btn btn-primary mb-3">Tambah Kurnia</a> --}}
<table class="table" id="tableKurnia">
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Judul Alur</th>
            <th scope="col">Caption Alur</th>
            <th scope="col">Foto Alur</th>
            <th scope="col">Judul Info</th>
            <th scope="col">Caption Info</th>
            <th scope="col">Foto Info</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($kurnia as $key=>$kurnias)
        <tr>
            <td>{{$key + 1}}</th>
            <td>{{$kurnias->judul_alur}}</td>
            <td><?= substr($kurnias->caption_alur, 0, 150) ?></td>
            <td>{{$kurnias->foto_alur}}</td>
            <td>{{$kurnias->judul_info}}</td>
            <td><?= substr($kurnias->caption_info, 0, 150) ?></td>
            <td>{{$kurnias->foto_info}}</td>
            <td><?= substr($kurnias->deskripsi, 0, 150) ?></td>
            <td>
                <form action="/admin/edit-kurnia/{{$kurnias->id}}" method="POST">
                    <a href="/admin/edit-kurnia/{{$kurnias->id}}" class="btn btn-info">Edit</a>
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger my-1" onclick="return confirm('Yakin Ingin Menghapus Kurnia?')" value="Delete">
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
        $('#tableKurnia').DataTable(); //sesuikan id tabel yg dibat
    });
</script>
@endsection
