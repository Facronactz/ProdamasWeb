@extends('admin.master')

@section('carousel', 'active')

@section('title')
Carousel Submission
@endsection

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<a href="{{ url('admin/add-carousel')}}" class="btn btn-primary mb-3">Add New Carousel</a>
<table class="table" id="tablecarousel"> <!--sesuai dg ini-->
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Foto</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($carousels as $key => $carousel)
        <tr>
            <td>{{$key + 1}}</th>
            <td>{{$carousel->nama}}</td>
            <td><img src="{{ '../carouselProd/'. $carousel->foto }}" alt=""></td>
            <td> 
                <a href="{{ url('admin/edit-carousel/'.$carousel->id) }}" class="btn btn-info">Edit</a>
              <form action="{{ url('admin/delete-carousel/'.$carousel->id)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input type="submit" class="btn btn-danger my-1" onclick="return confirm('Yakin Ingin Menghapus Foto?')" value="Delete">
              </form>
          </td>
        </tr>
        @empty
        <tr colspan="4">
            <td>No data</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection

@section('table')
    <script>
      $(document).ready(function() {
          $('#tablecarousel').DataTable(); //sesuikan id tabel yg dibat
      } );
    </script>
@endsection