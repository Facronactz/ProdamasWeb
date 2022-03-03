@extends('admin.master')

@section('title')
Tulis Cerita
@endsection

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Nama</th>
            <th scope="col">Judul</th>
            <th scope="col">Actions</th>
            <th scope="col">Status</th>
            <th scope="col">Verifikasi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($submission as $key=>$subs)
        <tr>
            <td>{{$key + 1}}</th>
            <td>{{$subs->name}}</td>
            <td>{{$subs->email}}</td>
            <td>{{$subs->city}}</td>
            <td>{{$subs->topic}}</td>
            <td>{{ Str::limit($subs->article, 50) }}</td>
            <td>
                <form action="/admin/submission/{{$subs->id}}" method="POST">
                    <a href="/admin/submission/{{$subs->id}}" class="btn btn-info">Detail</a>
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger my-1" onclick="return confirm('Are you sure?')"
                        value="Delete">
                </form>
            </td>
        </tr>
        @empty
        <tr colspan="3">
            <td class=>No data</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection