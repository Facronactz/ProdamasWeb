@extends('admin.master')

@section('tuliscerita', 'active')

@section('title')
Tulis Cerita Submission
@endsection

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<div class="form-group">
    <label for="desc_tuliscerita">Deskripsi</label>
    <table class="table">
        @foreach ($descriptions ?? '' as $description)
        <tr>
            <td><?= $description->desc_tuliscerita ?></td>
            <td align="right">
                <form action="/admin/tulis_cerita/{{ $description->id }}" method="POST">
                    <a href="/admin/tulis_cerita/{{ $description->id }}" class="btn btn-info">Edit</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
<a href="{{url('admin/add-tuliscerita')}}" class="btn btn-primary mb-3">Add New Cerita</a>

<table class="table" id="tableTulisCeritas">
    <!--sesuai dg ini-->
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Nama</th>
            {{-- <th scope="col">Nomor Telepon</th>
          <th scope="col">Email</th> --}}
            <th scope="col">Judul</th>
            <th scope="col">Ringkasan</th>
            <th scope="col">File</th>
            <th scope="col">Foto</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($tulis_ceritas as $key=>$tuliscerita)
        <tr>
            <td>{{$key + 1}}</th>
            <td>{{$tuliscerita->updated_at}}</td>
            <td>{{$tuliscerita->nama}}</td>
            {{-- <td>{{$tuliscerita->nomor_telepon}}</td>
            <td>{{$tuliscerita->email}}</td> --}}
            <td>{{$tuliscerita->judul}}</td>
            <td><?= substr($tuliscerita->ringkasan, 0, 65) ?></td>
            <td>{{$tuliscerita->file}}</td>
            <td>{{$tuliscerita->foto}}</td>
            {{-- <td> <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#status{{$tuliscerita->id}}">{{$tuliscerita->status}}</a> </td> --}}
            <td>
                <form action="/admin/tuliscerita/{{$tuliscerita->id}}" method="POST">
                    <a href="/admin/tuliscerita/{{$tuliscerita->id}}" class="btn btn-info">Edit</a>
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger my-1" onclick="return confirm('Are you sure?')" value="Delete">
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
        $('#tableTulisCeritas').DataTable(); //sesuikan id tabel yg dibat
    });
</script>
@endsection