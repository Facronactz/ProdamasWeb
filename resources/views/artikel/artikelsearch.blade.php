@extends('layouts.desain')
@section('artikel', 'active')
@section('title', 'Artikel')
@section('head')
    <link rel="stylesheet" href="{{ asset('/css/artikel.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="leftcolumn mt-5">
            <div class="input-group" style="max-width: 10vw">
                {{-- <form action="searchartikel"> --}}
                <form action="searchartikel">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="searchartikel" value="{{ request('searchartikel') }}">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search link-light"></i>
                </button>
                </form>
            </div>
            @if($artikel->count())
            @foreach ($artikel as $item)
                <div class="card">
                    <a href="artikel/{{ $item->id }}" class="stretched-link" target="_blank"></a>
                    <h2>{{ $item->judul }}</h2><br>
                    <div class="row">
                        <!--<div class="col-sm-12">buat share
                        </div>-->
                        <div class="col-sm-4">
                            <h6>{{$item->updated_at}}</h6>
                        </div>
                    </div>
                    <br>
                    <div class="">
                        <img src="{{ asset('articleProd/sampul/' . $item->gambar_sampul) }}" alt=""
                            style="height:100%; max-width: 800px">
                    </div><br>
                </div>
            @endforeach
            <div class="d-flex justify-content-end w-100 my-3">
             {{ $artikel->links() }}
            </div>
            @else
                <div class="alert alert-success" role="alert">
                    Tidak ada data
                </div>
            @endif
            </div>
        </div>
    </div>
    <!-- Akhir content -->
@endsection
