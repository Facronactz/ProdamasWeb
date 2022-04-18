@extends('layouts.desain')
@section('cerita', 'active')
@section('title', 'Cerita Masyarakat')
@section('head')
    <link rel="stylesheet" href="{{ asset('/css/cerita.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="leftcolumn mt-5">
            @foreach ($tulis_ceritas as $cerita)
                <div class="card">
                    <h5 class="card-header">{{ $cerita->judul }}</h5>
                    <ul class="list-group list-group-flush">
                        <a class="list-group-item">Penulis:<small class="text-muted"> <br> {{ $cerita->nama }}</a></small>
                        <a class="list-group-item">Tanggal Publish: <small class="text-muted"><br> {{ $cerita->created_at }}</a></small>
                        <a class="list-group-item">Ringkasan: <small class="text-muted"><br> {{ $cerita->ringkasan }}</a></small>
                    </ul>
                </div>
            @endforeach
        </div>

        <div class="rightcolumn mt-5">
            <div class="card">
                <div class="card-header">
                    <h1 align="center">{{ $cerita->judul }}</h1>
                    <p align="center"><small class="text-muted">Oleh {{ $cerita->nama }}</small></p>
                </div>
                <iframe class="iframe" src="{{ asset('ceritaProd/file/' . $cerita->file) }}" width="800" height="900"></iframe>
            </div>
        </div>
    </div>
    </div>
    <!-- Akhir content -->
@endsection
