@extends('admin.master')
@section('eboost', 'active')
@section('title')
E-Boost Submission
@endsection

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<div class="form-group">
    <label for="desc_eboost">Deskripsi</label>
    <!-- <table class="table">
        @foreach ($eboost ?? '' as $eboosts)
        <tr>
            <td><?= $eboosts->desc_eboost ?></td>
            <td align="right">
                <form action="/admin/eboost/{{ $eboosts->id }}" method="POST">
                    <a href="/admin/eboost/{{ $eboosts->id }}" class="btn btn-info">Edit</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table> -->
</div>
<a href="/admin/add-eboost" class="btn btn-primary mb-3">Tambah E-Boost</a>
<table class="table" id="tableEboost">
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Judul Tentang</th>
            <th scope="col">Caption Tentang</th>
            <th scope="col">Foto Tentang</th>
            <th scope="col">Judul Info</th>
            <th scope="col">Caption Info</th>
            <th scope="col">Foto Info</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($eboost as $key=>$eboosts)
        <tr>
            <td>{{$key + 1}}</th>
            <td>{{$eboosts->judul_tentang}}</td>
            <td>{{$eboosts->caption_tentang}}</td>
            <td>{{$eboosts->foto_tentang}}</td>
            <td>{{$eboosts->judul_info}}</td>
            <td>{{$eboosts->caption_info}}</td>
            <td>{{$eboosts->foto_info}}</td>
            <td>
                <form action="/admin/eboost/{{$eboosts->id}}" method="POST">
                    <a href="/admin/eboost/{{$eboosts->id}}" class="btn btn-info">Edit</a>
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
        $('#tableEboost').DataTable(); //sesuikan id tabel yg dibat
    });
</script>
@endsection