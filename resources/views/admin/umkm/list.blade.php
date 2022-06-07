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
@endsection

@section('table')
<script>
    $(document).ready(function() {
        $('#tableFoto').DataTable(); //sesuikan id tabel yg dibat
    });
</script>
@endsection