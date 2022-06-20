@extends('admin.master')

@section('anggaran', 'active')

@section('title')
Anggaran Submission
@endsection

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<div class="form-group">
    <table class="table" id="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Judul</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Sumber</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($anggarans as $anggaran)
            <tr>
                <td>{{$anggaran->id}}</td>
                <td>{{$anggaran->judul}}</td>
                <td>{{ $anggaran->deskripsi }}</td>
                <td>{{ $anggaran->sumber }}</td>
                <td>
                    <form action="/admin/anggaran/{{$anggaran->id}}" method="POST">
                        <a href="/admin/anggaran/{{$anggaran->id}}" class="btn btn-info">Edit</a>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('table')
<script>
    $(document).ready(function() {
        $('#table').DataTable(); //sesuikan id tabel yg dibat
    });
</script>
@endsection