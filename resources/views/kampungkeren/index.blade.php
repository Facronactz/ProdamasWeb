@extends('layouts.desain')
@section('main-tentang', 'active')
@section('kampungkeren', 'active')

@section('title', 'Kampung Keren')

@section('head')
<link rel="stylesheet" href="{{ asset('css/kampung.css') }}">
@endsection

<style>
    .kampungkeren:hover {
        color: #f58634;
    }

    .kampung:hover {
        opacity: 0.6;
    }
</style>

@section('content')
<div class="container-fluid p-0">
    <img class="header-kampung-keren" src="{{ asset('img-tentang/header-kampung-keren.png') }}" alt="" srcset="">
</div>
<!-- akhir jumbotrom -->

<div class="container-lg">
    <div class="d-flex my-4">
        <div class="row text-center w-100">
            <div class="w-100">
                <a href="/tag?tag=Kampung Keren" style="text-decoration: none; color:black">
                    <h1 class="kampung mb-3">Kampung Keren</h1>
                </a>

                @foreach ($descriptions ?? '' as $description)
                <p> <?= $description->desc_kampungkeren ?></p>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 text-center">
        @foreach ($kampungkeren as $karen)
        <a href="/tag?tag={{$karen->judul}}" style="text-decoration: none; color:black">
            <div class="col d-flex" style="flex-direction: column;">
                <img src="{{ asset('kampungkerenProd/' . $karen->foto) }}" alt="">
                <div class="d-flex justify-content-center" style="min-height:80px; margin: -30px auto; width:180px; background-color:{{ $karen->warna }}; color:white;">
                    <h2 class="kampungkeren my-auto">{{ $karen->judul }}</h2>
                </div>
                <div class="mt-5 mb-4">
                    <p>{{ $karen->caption }}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
    <br>
    <div style="text-align:center">
        {{ $kampungkeren->links() }}
    </div>
</div>

<!--Akhir konten kampung keren-->
@endsection