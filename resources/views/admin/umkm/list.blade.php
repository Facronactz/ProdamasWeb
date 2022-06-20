@extends('admin.master')

@section('umkm', 'active')

@section('title')
UMKM Submission
@endsection

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif
<div class="form-group">
    <label for="desc_umkm">Deskripsi</label>
    <table class="table">
        @foreach ($descriptions ?? '' as $description)
        <tr>
            <td><?= $description->desc_umkm ?></td>
            <td align="right">
                <form action="/admin/editdesc/{{ $description->id }}" method="POST">
                    <a href="/admin/editdesc/{{ $description->id }}" class="btn btn-info">Edit</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
<div class="form-group">
    <label style="display:block">Pict Sentra UMKM</label>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">Kota</th>
                <th scope="col">Pesantren</th>
                <th scope="col">Mojoroto</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($picts as $pict)
            <tr>
                <td>{{$pict->kota}}</td>
                <td>{{$pict->pesantren}}</td>
                <td>{{$pict->mojoroto}}</td>
                <td>
                    <form action="/admin/umkm/{{$pict->id}}" method="POST">
                        <a href="/admin/umkm/{{$pict->id}}" class="btn btn-info">Edit</a>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<a href="/admin/addlist-umkm" class="btn btn-primary mb-3">Tambah UMKM</a>
<table class="table" id="tableFoto">
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Judul</th>
            <th scope="col">Kecamatan</th>
            <th scope="col">Kelurahan</th>
            <th scope="col">Jenis</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($umkms as $key=>$umkm)
        <tr>
            <td>{{$key + 1}}</th>
            <td>{{$umkm->judul}}</td>
            <td>{{$umkm->kecamatan}}</td>
            <td>{{$umkm->kelurahan}}</td>
            <td>{{$umkm->jenis}}</td>
            <td>
                <form action="/admin/editlist-umkm/{{$umkm->id}}" method="POST">
                    <a href="/admin/editlist-umkm/{{$umkm->id}}" class="btn btn-info">Edit</a>
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger my-1" onclick="return confirm('Yakin Ingin Menghapus UMKM?')" value="Delete">
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