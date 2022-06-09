@extends('admin.master')

@section('prodamas', 'active')

@section('title')
Prodamas Submission
@endsection

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<label style="display:block">Konten</label>
<a href="/admin/addcont-prodamas" class="btn btn-primary mb-3">Tambah Konten</a>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Judul</th>
            <th scope="col">Foto</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($prodamass as $key=>$prodamas)
        <tr>
            <td>{{$key + 1}}</th>
            <td>{{$prodamas->judul}}</td>
            <td>{{$prodamas->foto}}</td>
            <td>
                <form action="/admin/prodamas/{{$prodamas->id}}" method="POST">
                    <a href="/admin/prodamas/{{$prodamas->id}}" class="btn btn-info">Edit</a>
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger my-1" onclick="return confirm('Yakin Ingin Menghapus Foto?')" value="Delete">
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

<label style="display:block; margin-top: 3%">Transformasi</label>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">Judul</th>
            <th scope="col">Foto</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($transforms as $transform)
        <tr>
            <td>{{$transform->judul}}</td>
            <td>{{$transform->foto}}</td>
            <td align="right">
                <form action="/admin/prodamas/" method="POST">
                    <a href="/admin/prodamas/" class="btn btn-info">Edit</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<label style="display:block; margin-top: 3%">Regulasi</label>
<a href="/admin/addreg-prodamas" class="btn btn-primary mb-3">Tambah Regulasi</a>
<table class="table" id="tableFoto">
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tanggal</th>
            <th scope="col">File</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($regulasis as $key=>$regulasi)
        <tr>
            <td>{{$key + 1}}</th>
            <td>{{$regulasi->created_at}}</td>
            <td>{{$regulasi->file}}</td>
            <td>
                <form action="/admin/prodamass/{{$regulasi->id}}" method="POST">
                    <a href="/admin/prodamass/{{$regulasi->id}}" class="btn btn-info">Edit</a>
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger my-1" onclick="return confirm('Yakin Ingin Menghapus Prodamas?')" value="Delete">
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