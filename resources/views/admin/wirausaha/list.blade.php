@extends('admin.master')
@section('wirausaha', 'active')
@section('title')
Wirausaha Submission
@endsection

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

{{-- <div class="form-group">
    <label for="desc_wirausaha">Deskripsi</label>
    <!-- <table class="table">
        @foreach ($wirausaha ?? '' as $wirausahas)
        <tr>
            <td><?= $wirausahas->desc_wirausaha ?></td>
            <td align="right">
                <form action="/admin/wirausaha/{{ $wirausahas->id }}" method="POST">
                    <a href="/admin/wirausaha/{{ $wirausahas->id }}" class="btn btn-info">Edit</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table> -->
</div> --}}
{{-- <a href="/admin/add-wirausaha" class="btn btn-primary mb-3">Tambah Wirausaha</a> --}}
<table class="table" id="tableWirausaha">
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tentang</th>
            <th scope="col">Foto Tentang</th>
            <th scope="col">Info</th>
            <th scope="col">Foto Info</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($wirausaha as $key=>$wirausahas)
        <tr>
            <td>{{$key + 1}}</th>
            <td><?=$wirausahas->tentang?></td>
            <td>{{$wirausahas->foto_tentang}}</td>
            <td><?=$wirausahas->info?></td>
            <td>{{$wirausahas->foto_info}}</td>
            <td><?= substr($wirausahas->deskripsi, 0, 150) ?></td>
            <td>
                <form action="/admin/edit-wirausaha/{{$wirausahas->id}}" method="POST">
                    <a href="/admin/edit-wirausaha/{{$wirausahas->id}}" class="btn btn-info">Edit</a>
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger my-1" onclick="return confirm('Yakin Ingin Menghapus Wirausaha?')" value="Delete">
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
        $('#tableWirausaha').DataTable(); //sesuikan id tabel yg dibat
    });
</script>
@endsection