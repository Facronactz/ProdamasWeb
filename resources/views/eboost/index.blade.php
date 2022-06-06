@extends('layouts.desain')

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

@endsection