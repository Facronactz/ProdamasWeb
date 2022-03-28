@extends('admin.master')

@section('bidang', 'active')

@section('title')
Bidang Submission
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
            <td><?= $description->desc_bidang ?></td>
            <td align="right">
                <form action="/admin/bidangs/{{ $description->id }}" method="POST">
                    <a href="/admin/bidangs/{{ $description->id }}" class="btn btn-info">Edit</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
<a href="/admin/add-bidang" class="btn btn-primary mb-3">Tambah Bidang</a>
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
        @forelse ($bidangs as $key=>$bidang)
        <tr>
            <td>{{$key + 1}}</th>
            <td>{{$bidang->created_at}}</td>
            <td>{{$bidang->judul}}</td>
            <td>{{$bidang->foto}}</td>
            <td>
                <form action="/admin/bidang/{{$bidang->id}}" method="POST">
                    <a href="/admin/bidang/{{$bidang->id}}" class="btn btn-info">Edit</a>
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
@endsection

@section('table')
<script>
    $(document).ready(function() {
        $('#tableFoto').DataTable(); //sesuikan id tabel yg dibat
    });
</script>
@endsection