@extends('layouts.desain')
@section('main-tentang', 'active')
@section('kampungkeren', 'active')

@section('title', 'Kampung Keren')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/kampung.css') }}">
@endsection

@section('content')
    <div class="container-fluid p-0">
        <img class="header-kampung-keren" src="{{ asset('img-tentang/header-kampung-keren.png') }}" alt="" srcset="">
    </div>
    <!-- akhir jumbotrom -->

    {{-- <div class="kampung-keren">
        <div class="container">
            <h2>Kampung Keren</h2> <br>
            @foreach ($descriptions ?? '' as $description)
            <h5> <?= $description->desc_kampungkeren ?></h5>
            @endforeach
        </div>
    </div> --}}

    <div class="d-flex">
        <div class="row text-center w-100">
            <div class="w-100">
                <h1 class="mb-3">Kampung Keren</h1>
                @foreach ($descriptions ?? '' as $description)
                    <p> <?= $description->desc_kampungkeren ?></p>
                @endforeach
            </div>
        </div>
    </div>

    <!--Konten Kampung Keren-->
    {{-- <div class="kampung">
            <div class="konten">
                <h2 class="h4 font-italic mb-4">{{ $karen->judul }}</h2>
                <div class="row">
                    <div class="col-lg-5">
                        <img src="{{ asset('kampungkerenProd/' . $karen->foto) }}" alt="kampung-herbal" class="w-100 mb-4 border border-md border-black shadow-md">
                    </div>
                    <div class="col-md-6">
                        <p style="font-family: Montserrat, sans-serif;"> {{ $karen->caption }}</p>
                    </div>
                </div>
            </div>
    </div> --}}

    <div class="container-lg">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 text-center">
        @foreach ($kampungkeren as $karen)
            <div class="col d-flex" style="flex-direction: column;">
                <img src="{{ asset('kampungkerenProd/' . $karen->foto) }}" alt="">
                <div class="d-flex bg-primary justify-content-center" style="min-height:80px; margin: -30px auto; width:180px; background-color:{{ $karen->warna }}">
                    <h2 class="my-auto">{{ $karen->judul }}</h2>
                </div>
                <div class="mt-5 mb-4">
                    <p>{{ $karen->caption }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <br>
        <div style="text-align:center">
            {{ $kampungkeren->links() }}
        </div>
    </div>

    <!--Akhir konten kampung keren-->
@endsection
