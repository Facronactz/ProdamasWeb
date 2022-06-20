@extends('admin.master')

@section('englishmasive', 'active')

@section('title')
English Masive Submission
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
                <th scope="col">Judul Tutor</th>
                <th scope="col">Tableau Tutor</th>
                <th scope="col">Judul Partisipan</th>
                <th scope="col">Tableau Partisipan</th>
                <th scope="col">Sumber</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataemas as $english_masive)
            <tr>
                <td>{{$english_masive->id}}</td>
                <td>{{$english_masive->judul}}</td>
                <td>{{ $english_masive->deskripsi }}</td>
                <td>{{$english_masive->judul_tutor}}</td>
                <td>{{$english_masive->tableau_tutor}}</td>
                <td>{{$english_masive->judul_partisipan}}</td>
                <td>{{$english_masive->tableau_partisipan}}</td>
                <td>{{$english_masive->konten}}</td>
                <td>{{$english_masive->sumber }}</td>
                <td>
                    <form action="/admin/englishmasive/{{$english_masive->id}}" method="POST">
                        <a href="/admin/englishmasive/{{$english_masive->id}}" class="btn btn-info">Edit</a>
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