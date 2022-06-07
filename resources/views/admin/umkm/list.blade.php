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
            @foreach ($picts ?? '' as $pict)
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
            <!-- @empty
            <tr colspan="3">
                <td>No data</td>
            </tr> -->
            @endforeach
        </tbody>
    </table>
</div>

<!-- <a href="/admin/add-pokmas" class="btn btn-primary mb-3">Tambah Pokmas</a>
<table class="table" id="tableFoto">
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Foto</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($pokmass as $key=>$pokmas)
        <tr>
            <td>{{$key + 1}}</th>
            <td>{{$pokmas->created_at}}</td>
            <td>{{$pokmas->foto}}</td>
            <td>
                <form action="/admin/pokmas/{{$pokmas->id}}" method="POST">
                    <a href="/admin/pokmas/{{$pokmas->id}}" class="btn btn-info">Edit</a>
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
</table> -->
@endsection

@section('table')
<script>
    $(document).ready(function() {
        $('#tableFoto').DataTable(); //sesuikan id tabel yg dibat
    });
</script>
@endsection