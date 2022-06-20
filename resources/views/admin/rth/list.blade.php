@extends('admin.master')

@section('rth', 'active')

@section('title')
RTH Submission
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
            @foreach($rths as $rth)
            <tr>
                <td>{{$rth->id}}</td>
                <td>{{$rth->judul}}</td>
                <td>{{ $rth->deskripsi }}</td>
                <td>{{ $rth->sumber }}</td>
                <td>
                    <form action="/admin/rth/{{$rth->id}}" method="POST">
                        <a href="/admin/rth/{{$rth->id}}" class="btn btn-info">Edit</a>
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