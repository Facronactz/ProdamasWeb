@extends('admin.master')

@section('datakoperasi', 'active')

@section('title')
Data Koperasi Submission
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
            @foreach($datakoperasi as $kop)
            <tr>
                <td>{{$kop->id}}</td>
                <td>{{$kop->judul}}</td>
                <td>{{ $kop->deskripsi }}</td>
                <td>{{ $kop->sumber }}</td>
                <td>
                    <form action="/admin/datakoperasi/{{$kop->id}}" method="POST">
                        <a href="/admin/datakoperasi/{{$kop->id}}" class="btn btn-info">Edit</a>
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