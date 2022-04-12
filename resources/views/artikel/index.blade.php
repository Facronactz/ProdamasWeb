@extends('layouts.desain')
@section('artikel', 'active')
@section('title', 'Artikel')

@section('head')
    <link rel="stylesheet" href="css/artikel.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/titleAnimation.css">
    <style>
        .header-symbol {
            width: 14px;
            height: 14px;
            background-color: purple;
            margin: 0;
            padding: 0;
            margin-top: 7px;
        }
        .header-text span {
            font-family: 'Poppins';
            text-shadow: 2px 2px rgb(209, 201, 209);
        }

    </style>
@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-between mt-3">
            <div class="div-title">
                <div class="header-symbol animate__animated animate__flash animate_delay_2s"></div>
                <h1 class="home-title header-text">
                    <span>Artikel</span>
                </h1>
            </div>

            <!-- Kiri -->
            <div class="col">
                <form action="searchartikel">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search" name="searchartikel" value="{{ request('searchartikel') }}" aria-label="Search">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search link-light"></i>
                        </button>
                    </div>
                </form>
                @foreach ($artikel as $item)
                    <div class="card mb-3 p-0 hvr-sweep-to-left hvr-bob">
                        <div class="row g-0">
                            <div class="col-md-4 my-auto">
                                <img src="{{ asset('articleProd/sampul/' . $item->gambar_sampul) }}" class="img-fluid rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <a href="artikel/{{ $item->id }}" class="stretched-link"></a>
                                    <h5 class="card-title" style="font-size: 22px;">{{ $item->judul }}</h5>
                                    <p class="card-text" style="font-size: 14px;"><?= $item->text_sampul ?></p>
                                    <p class="card-text" style="font-size: 13px;"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-end w-100 my-3">
                    {{ $artikel->links() }}
                </div>
            </div>
            <!-- kanan -->
            <div class="rightcolumn">
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
                        <a class="list-group-item" href="https://survey123.arcgis.com/share/932769e15a27418aa9b448b0b1e6b6b6">Bank Sampah</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
