@extends('admin.master')

@section('umkm', 'active')

@section('title')
Kube Submission
@endsection

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<div class="form-group">
    <label style="display:block">Informasi Kube</label>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Informasi</th>
                <th scope="col">Syarat</th>
                <th scope="col">Alur</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kube as $kop)
            <tr>
                <td>{{$kop->id}}</td>
                <td><?= substr($kop->informasi, 0, 500) ?></td>
                <td>{{ $kop->foto_syarat }}</td>
                <td>{{ $kop->foto_alur }}</td>
                <td>
                    <form action="/admin/kube/{{$kop->id}}" method="POST">
                        <a href="/admin/kube/{{$kop->id}}" class="btn btn-info">Edit</a>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div><br>
<div class="form-group">
    <label style="display:block">Foto Sentra Kube</label>
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
                    <form action="/admin/editpict/{{$pict->id}}" method="POST">
                        <a href="/admin/editpict/{{$pict->id}}" class="btn btn-info">Edit</a>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div><br>
<div class="form-group">
    <label style="display:block">Daftar Kube</label>
    <a href="/admin/add-kube" class="btn btn-primary mb-3">Tambah Kube</a>
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
            @forelse ($daftar as $key=>$daf)
            <tr>
                <td>{{$key + 1}}</th>
                <td>{{$daf->judul}}</td>
                <td>{{$daf->kecamatan}}</td>
                <td>{{$daf->kelurahan}}</td>
                <td>{{$daf->jenis}}</td>
                <td>
                    <form action="/admin/edit-kube/{{$daf->id}}" method="POST">
                        <a href="/admin/edit-kube/{{$daf->id}}" class="btn btn-info">Edit</a>
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger my-1" onclick="return confirm('Yakin Ingin Menghapus Kube?')" value="Delete">
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
</div>
@endsection

@section('table')
<script>
    $(document).ready(function() {
        $('#tableFoto').DataTable(); //sesuikan id tabel yg dibat
    });
</script>
@endsection