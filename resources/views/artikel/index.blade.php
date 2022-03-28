@extends('layouts.desain')
@section('artikel', 'active')
@section('title', 'Artikel')

@section('head')
<link rel="stylesheet" href="css/artikel.css">
<link rel="stylesheet" href="css/hover.css">
@endsection

@section('content')
<!-- awal jumbotron -->
<div class="container-fluid banner">
    <div class="container banner-content">
        <h1>Artikel</h1>
    </div>
</div>
<!-- akhir jumbotrom -->

<div class="container">
    <div class="row justify-content-between mt-5">

        @foreach ($artikel as $item)
        <div class="mb-3 kartu">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('articleProd/sampul/' . $item->gambar_sampul) }}" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <a href="artikel/{{ $item->id }}" class="link-dark">
                            <h5 class="card-title">{{ $item->judul }}</h5>
                        </a>
                        <p class="card-text"><?= $item->text_sampul ?>
                        </p>
                    </div>
                </div>
                @endforeach
                <div class="d-flex justify-content-end w-100 my-3">
                    {{ $artikel->links() }}
                </div>
            </div>
            @endforeach
            <div style="text-align:left">
                {{ $artikel->links() }}
            </div>
        </div>
        <!-- kanan -->
        <div class="rightcolumn">
            <div class="card-right bg-light">
                <h5 class="card-header">Update Artikel</h5>
                @foreach ($artikelupdate as $item)
                <div class="col-sm-12">
                    <div class="caption">
                        <a href="artikel/{{ $item->id }}">
                            <h5>{{ $item->judul }}</h5>
                        </a>
                        <div class="row">
                            <div class="col-xl-3">
                                <img src="{{ asset('articleProd/sampul/' . $item->gambar_sampul) }}" width="100%" alt="Cinque Terre">
                            </div>
                            <div class="col-sm-9">
                                <p><?= $item->text_sampul ?></p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="card-right bg-light">
                        <h5 class="card-header">Kunjungi Website</h5>
                        <ul class="list-group list-group-flush">
                            <a class="list-group-item" href="https://www.kedirikota.go.id/">Pemerintah Kota Kediri</a>
                            <a class="list-group-item" href="https://prodamasplus.kedirikota.go.id/auth/login">Progressio</a>
                            <a class="list-group-item" href="https://survey123.arcgis.com/share/932769e15a27418aa9b448b0b1e6b6b6">Bank Sampah</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection