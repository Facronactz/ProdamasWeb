@extends('layouts.desain')
@section('title', 'Hasil Search')
@section('head')
<link rel="stylesheet" href="{{ asset('/css/artikel.css') }}">
@endsection

@section('content')
<div class="row container justify-content-center mx-auto">
    <div class="leftcolumn mt-5">
        <!-- artikel -->
        <h3 style="font-family: Inter, sans-serif">Artikel Pemasaran</h3>
        @if ($artikel->count())
        @foreach ($artikel as $item)
        <div class="card mb-3 p-0 hvr-sweep-to-left hvr-bob">
            <div class="row g-0">
                <div class="col-md-4 my-auto">
                    <img src="{{ asset('articleProd/sampul/' . $item->gambar_sampul) }}" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <a href="artikel/{{ $item->id }}" target="_blank" class="stretched-link"></a>
                        <h5 class="card-title" style="font-size: 22px;">{{ $item->judul }}</h5>
                        <p class="card-text" style="font-size: 13px;"><small class="text-muted">{{$item->updated_at}}</small></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @if ($artikel->hasPages())
        <div class="d-flex justify-content-end w-100 my-3">
            {{ $artikel->links() }}
        </div>
        @endif
        @else
        <div class="alert alert-success" role="alert">
            Tidak ada data
        </div>
        @endif
    </div>
</div>
<!-- Akhir content -->
@endsection