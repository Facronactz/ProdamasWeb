@extends('layouts.desain')
@section('main-tentang', 'active')
@section('bidang', 'active')

@section('head')
    <link rel="stylesheet" href="css/bidang.css">
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
        @foreach ($bidangs as $bidang)
            @if ($bidang->id % 2 != 0)
                <div class="row row-cols-md-2 row-cols-1 align-items-center justify-content-center">
                    <div class="col mx-auto w-100 order-0 text-center">
                        <h1>{{ $bidang->judul }}</h1>
                    </div>
                    <div class="col align-self-center my-auto">
                        <div class="bidang-img" style="background-image: url('{{ asset('bidangProd/' . $bidang->foto) }}')"></div>
                    </div>
                    <div class="col">
                        <h1>{{ $bidang->caption }}</h1>
                    </div>
                </div>
            @else
                <div class="row box">
                    <div class="d-flex align-items-center justify-content-center col-6">
                        <div class="item-title">
                            <h1>{{ $bidang->judul }}</h1>
                            <br>
                            <p>{{ $bidang->caption }}</p>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="bidang-img" style="background-image: url('{{ asset('bidangProd/' . $bidang->foto) }}')"></div>
                    </div>
                </div>
            @endif
        @endforeach

    </div>
@endsection
