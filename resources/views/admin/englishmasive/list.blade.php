@extends('admin.master')

@section('englishmasive', 'active')

@section('title')
English Masive Submission
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
            @foreach($english_masive as $dataemas)
            <tr>
                <td>{{$dataemas->id}}</td>
                <td>{{$dataemas->judul}}</td>
                <td>{{$dataemas->deskripsi }}</td>
                <td>{{$dataemas->sumber }}</td>
                <td>
                    <form action="/admin/edit-englishmasive/{{$dataemas->id}}" method="POST">
                        <a href="/admin/edit-englishmasive/{{$dataemas->id}}" class="btn btn-info">Edit</a>
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