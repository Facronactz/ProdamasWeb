@extends('admin.master')

@section('artikel', 'active')

@section('title')
Article Submission
@endsection

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<a href="/admin/add-article" class="btn btn-primary mb-3">Add New Article</a>
<table class="table" id="tableArtikel"> <!--sesuai dg ini-->
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Judul</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($articles as $key=>$article)
        <tr>
            <td>{{$key + 1}}</th>
            <td>{{$article->created_at}}</td>
            <!-- <td>{{$article->name}}</td> -->
            <td>{{$article->judul}}</td>
            <!-- <td>{{Str::limit($article->article, 60)}}</td> -->
            <td> <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#status{{$article->id}}">{{$article->status}}</a> </td>
            <td>
              <form action="/admin/article/{{$article->id}}" method="POST">
                <a href="/admin/article/{{$article->id}}" class="btn btn-info">Edit</a>
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger my-1" onclick="return confirm('Are you sure?')" 
                  value="Delete">
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

@foreach ($articles as $item)
    <!-- Modal -->
<div class="modal fade" id="status{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <form action="/admin/status" method="POST">
        @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Changes Status</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <input type="hidden" name="id" id="id" value="{{$item->id}}">
          @if ($item->status == 'published')
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <select class="form-select" id="status" name="status">
              <option selected>{{$item->status}}</option>
              <option value="unpublished">Unpublished</option>
            </select>
          </div>
          @else
          <label for="exampleFormControlInput1" class="form-label">Status</label>
          <select class="form-select" id="status" name="status">
            <option selected>{{$item->status}}</option>
            <option value="published">Published</option>
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
          $('#tableArtikel').DataTable(); //sesuikan id tabel yg dibat
      } );
    </script>
@endsection