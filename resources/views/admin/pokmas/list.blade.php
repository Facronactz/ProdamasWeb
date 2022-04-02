@extends('admin.master')

@section('pokmas', 'active')

@section('title')
Pokmas Submission
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
        @foreach ($descriptions as $description)
        <tr>
            <td><?= $description->desc_pokmas ?></td>
            <td align="right">
                <form action="/admin/pokmass/{{ $description->id }}" method="POST">
                    <a href="/admin/pokmass/{{ $description->id }}" class="btn btn-info">Edit</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
<a href="/admin/add-pokmas" class="btn btn-primary mb-3">Tambah Pokmas</a>
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
</table>
@endsection

@section('table')
<script>
    $(document).ready(function() {
        $('#tableFoto').DataTable(); //sesuikan id tabel yg dibat
    });
</script>
@endsection