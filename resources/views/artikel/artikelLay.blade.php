@extends('layouts.desain')
@section('artikel', 'active')
@section('title', 'Artikel')
@section('head')
    <link rel="stylesheet" href="{{ asset('/css/artikel.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="leftcolumn mt-5">
            @foreach ($artikel as $item)
                <div class="card">
                    <h2>{{ $item->judul }}</h2><br>
                    <div class="row">
                        <!--<div class="col-sm-12">buat share
                        </div>-->
                        <div class="col-sm-4">
                            <h6>{{ $item->created_at }}</h6>
                        </div>
                    </div>
                    <br>
                    <div class="">
                        <img src="{{ asset('articleProd/sampul/' . $item->gambar_sampul) }}" alt=""
                            style="height:100%; max-width: 800px">
                    </div><br>
                    <p><?= $item->article ?></p>
                </div>
            @endforeach
        </div>

        <div class="rightcolumn mt-5">

            <div class="card-right bg-light">
                <h5 class="card-header">Update Artikel</h5>
                @foreach ($artikelupdate as $item)
                    <div class="card mb-3 p-0 hvr-float-shadow" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4 my-auto">
                                <img src="{{ asset('articleProd/sampul/' . $item->gambar_sampul) }}" class="img-fluid rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body py-0">
                                    <h5 class="card-title" style="font-size: 14px;">{{ $item->judul }}</h5>
                                    <p class="card-text mb-0" style="font-size: 12px;"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a class="stretched-link" href="artikel/{{ $item->id }}"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="card-right bg-light">
                <h5 class="card-header">Kunjungi Website</h5>
                <ul class="list-group list-group-flush">
                    <a class="list-group-item" href="https://www.kedirikota.go.id/">Pemerintah Kota Kediri</a>
                    <a class="list-group-item" href="https://prodamasplus.kedirikota.go.id/auth/login">Progressio</a>
                    <a class="list-group-item"
                        href="https://survey123.arcgis.com/share/932769e15a27418aa9b448b0b1e6b6b6">Bank Sampah</a>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <!-- Akhir content -->
@endsection
