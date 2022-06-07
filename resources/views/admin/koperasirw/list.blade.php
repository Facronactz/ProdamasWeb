@extends('admin.master')

@section('umkm', 'active')

@section('title')
Koperasi RW Submission
@endsection

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<div class="form-group">
    <label style="display:block">Deskripsi Koperasi RW</label>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($koperasi as $kop)
            <tr>
                <td>{{$kop->id}}</td>
                <td><?= substr($kop->deskripsi, 0, 500) ?>
                <td>
                    <form action="/admin/koperasirw/{{$kop->id}}" method="POST">
                        <a href="/admin/koperasirw/{{$kop->id}}" class="btn btn-info">Edit</a>
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