@extends('layouts.desain')
@section('e-boost', 'active')
@section('kurnia', 'active')
@section('head')
<style>
    .carousel-img {
        object-fit: cover;
        object-position: center;
        height: 350px;
        width: 100%;
    }
</style>
@endsection

@section('content')

<div id="carouselUtama" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block carousel-img w-100" src="https://prodamas.kedirikota.go.id/carouselProd/1653969225925-7.jpg" alt="..." />
        </div>
        <div class="carousel-item">
            <img class="d-block carousel-img w-100" src="https://prodamas.kedirikota.go.id/carouselProd/1654133761959-sampul-1650266071.jpg" alt="..." />
        </div>
        {{-- <div class="carousel-item active">
                <img src="img/header1.png" class="d-block w-100 carousel-img" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="img/header2.png" class="d-block w-100 carousel-img" alt="..." />
            </div> --}}
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselUtama" data-bs-slide="prev">
        <span class="carousel-icon-prev" aria-hidden="true"><i class="fas fa-arrow-left"></i></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselUtama" data-bs-slide="next">
        <span class="carousel-icon-next" aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div style="height:4px; background-color: rgb(0, 0, 0);"> </div>
<div class="container">
    <div class="m-4 mb-5 text-center">
        <h1><strong>Kurnia</strong></h1>
        <h4>Segala informasi mengenai kegiatan peningkatan perekonomian <br> di Kota Kediri</h4>
    </div>
    <div class="card border-light my-4">
        <div class="row g-0">
            @foreach ($kurnia as $kurnias)
            @endforeach
            <div class="col-lg-4 d-flex justify-content-center">
                <img src="{{ asset('kurniaProd/'.$kurnias->foto_alur) }}" class="img-fluid" style="max-height: 400px;">
            </div>
            <div class="col-lg-8">
                <div class="card-body">
                    <h2 class="card-title">{{ $kurnias->judul_alur }}</h2>
                    <div style="height: 2px; background-color:#000000"></div>
                    <p class="card-text align-middle" style="font-size: 20px"><?= $kurnias->caption_alur ?></p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="card border-light my-4">
        <div class="row g-0">
            <div class="col-lg-4 d-flex justify-content-center">
                <img src="{{ asset('kurniaProd/'.$kurnias->foto_info) }}" class="img-fluid" style="max-height: 400px;">
            </div>
            <div class="col-lg-8">
                <div class="card-body">
                    <h2 class="card-title">{{ $kurnias->judul_info }}</h2>
                    <div style="height: 2px; background-color:#000000"></div>
                    <p class="card-text align-middle" style="font-size: 20px"><?= $kurnias->caption_info ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="pt2" style="font-size: 20px; text-align:justify; text-indent: 25px">
        <?= $kurnias->deskripsi ?>
    </div>
</div>

@endsection