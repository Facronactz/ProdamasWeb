@extends('layouts.desain')
@section('main-tentang', 'active')
@section('bidang', 'active')

@section('head')
    <link rel="stylesheet" href="css/bidang.css">
    <style>
        @media screen and (max width: 768px){

        }
    </style>
@endsection

@section('content')
    <section id="prodamas">
        <div class="container">
            <div class="row mt-5">
                <div class="col text-center" style="font-family: Inter, sans-serif; margin-top: 35px">
                    <h1>Cakupan Prodamas</h1>
                </div>
            </div>
            <div class="row mt-5" style="font-family: Montserrat, sans-serif">
                <div class="col text-center">
                    @foreach ($descriptions ?? '' as $description)
                        <p class="fs-5">
                            <?= $description->desc_bidang ?>
                        </p>
                    @endforeach
                </div>
            </div>

        </div>
        <!--div container-->
    </section>

    <div class="container mt-5 mb-5">
        @if(last($bidangs))
        @else
            <hr>
        @endif
        @foreach ($bidangs as $bidang)
            @if ($bidang->id % 2 != 0)
                <div class="row row-cols-1 row-cols-md-2 box">
                    <h1 class="d-md-none d-block d-lg-none d-xl-none d-xxl-none">{{ $bidang->judul }}</h1>
                    <div class="col">
                        <div class="bidang-img" style="background-image: url('{{ asset('bidangProd/' . $bidang->foto) }}')"></div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center col">
                        <div class="item-title">
                            <h1 class="d-md-block d-none">{{ $bidang->judul }}</h1>
                            <br>
                            <p>{{ $bidang->caption }}</p>
                        </div>
                    </div>
                </div>
            @else
                <div class="row row-cols-1 row-cols-md-2 box">
                    <h1 class="d-md-none d-block d-lg-none d-xl-none d-xxl-none">{{ $bidang->judul }}</h1>
                    <div class="col order-md-2">
                        <div class="bidang-img" style="background-image: url('{{ asset('bidangProd/' . $bidang->foto) }}')"></div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center col order-md-1">
                        <div class="item-title">
                            <h1 class="d-md-block d-none">{{ $bidang->judul }}</h1>
                            <br>
                            <p>{{ $bidang->caption }}</p>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

    </div>
@endsection
