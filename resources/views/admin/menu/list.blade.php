@extends('admin.master')

@section('menu', 'active')

@section('title')
Menu Submission
@endsection

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<a href="/admin/add-menu" class="btn btn-primary mb-3">Tambah Menu</a>
<table class="table" id="tableFoto">
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Judul</th>
            <th scope="col">Link</th>
            <th scole="col">Status</th>
            <th scole="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($menus as $key=>$menu)
        <tr>
            <td>{{$key + 1}}</th>
            <td>{{$menu->judul}}</td>
            <td>{{$menu->link}}</td>
            <td> <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#status{{$menu->id}}">{{$menu->status}}</a> </td>
            <td>
                <form action="/admin/menu/{{$menu->id}}" method="POST">
                    <a href="/admin/menu/{{$menu->id}}" class="btn btn-info">Edit</a>
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger my-1" onclick="return confirm('Yakin Ingin Menghapus Menu?')" value="Delete">
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
@foreach ($menus as $menu)
<!-- Modal -->
<div class="modal fade" id="status{{$menu->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="/admin/menu/status" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Changes Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="id" value="{{$menu->id}}">
                    @if ($menu->status == 'show')
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status">
                            <option selected>{{$menu->status}}</option>
                            <option value="hidden">Hidden</option>
                        </select>
                    </div>
                    @else
                    <label for="exampleFormControlInput1" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status">
                        <option selected>{{$menu->status}}</option>
                        <option value="show">Show</option>
                    </select>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Ganti</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endforeach
@endsection

@section('table')
<script>
    $(document).ready(function() {
        $('#tableFoto').DataTable(); //sesuikan id tabel yg dibat
    });
</script>
@endsection