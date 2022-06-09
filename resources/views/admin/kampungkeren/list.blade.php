@extends('admin.master')

@section('kampungkeren', 'active')

@section('title')
Kampung Keren Submission
@endsection

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<div class="form-group">
    <label for="desc_kampungkeren">Deskripsi</label>
    <table class="table">
        @foreach ($descriptions ?? '' as $description)
        <tr>
            <td><?= $description->desc_kampungkeren ?></td>
            <td align="right">
                <form action="/admin/kampungkerens/{{ $description->id }}" method="POST">
                    <a href="/admin/kampungkerens/{{ $description->id }}" class="btn btn-info">Edit</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
<a href="/admin/add-kampungkeren" class="btn btn-primary mb-3">Tambah Kampung Keren</a>
<table class="table" id="tableFoto">
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Judul</th>
            <th scope="col">Foto</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($kampungkeren as $key=>$karen)
        <tr>
            <td>{{$key + 1}}</th>
            <td>{{$karen->created_at}}</td>
            <td>{{$karen->judul}}</td>
            <td>{{$karen->foto}}</td>
            <td>
                <form action="/admin/kampungkeren/{{$karen->id}}" method="POST">
                    <a href="/admin/kampungkeren/{{$karen->id}}" class="btn btn-info">Edit</a>
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger my-1" onclick="return confirm('Yakin Ingin Menghapus Kampung Keren?')" value="Delete">
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
    });
</script>
@endsection