@extends('layouts.desain')
@section('main-tentang', 'active')
@section('bidang', 'active')

@section('title', 'Bidang Prodamas')

@section('head')
<link rel="stylesheet" href="css/bidang.css">
@endsection

@section('content')
<section id="prodamas">
    <div class="container">
        <div class="row mt-5">
            <div class="col text-center" style="font-family: Inter, sans-serif; margin-top: 35px">
                <a href="/tag?tag=Cakupan Bidang" style="text-decoration: none; color:black">
                    <h1 class="mb-3">Cakupan Bidang</h1>
                </a>
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
    @if ($loop->last)
    @else
    <hr>
    @endif
    @endforeach

</div>
@endsection