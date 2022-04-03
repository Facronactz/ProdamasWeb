@extends('admin.master')

@section('kritik', 'active')

@section('title')
Critics Submission
@endsection

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<table class="table" id="tableKritik">
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Nama</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Pesan</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($kritik as $key=>$kritik)
        <tr>
            <td>{{$key + 1}}</th>
            <td>{{$kritik->created_at}}</td>
            <td>{{$kritik->name}}</td>
            <td>{{$kritik->phone = Str::limit($kritik->phone, 5)}}</td>
            <td>{{$kritik->email}}</td>
            <td>{{$kritik->message = Str::limit($kritik->message, 65)}}</td>
            <td>
                <form action="/admin/kritik/{{$kritik->id}}" method="POST">
                    <a href="/admin/kritik/{{$kritik->id}}" class="btn btn-info">Detail</a>
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger my-1" onclick="return confirm('Yakin ingin menghapus kritik ini?')"
                        value="Hapus">
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
          $('#tableKritik').DataTable(); //sesuikan id tabel yg dibat
      } );
    </script>
@endsection