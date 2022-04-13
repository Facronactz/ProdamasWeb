@extends('layouts.desain')
@section('main-tentang', 'active')
@section('kampungkeren', 'active')

@section('title', 'Kampung Keren')

@section('head')
    <link rel="stylesheet" href="{{asset('css/kampung.css')}}">
@endsection

@section('content')
    <div class="container-fluid p-0">
        <img class="header-kampung-keren" src="{{asset('img-tentang/header-kampung-keren.png')}}" alt="" srcset="">
    </div>
    <!-- akhir jumbotrom -->

    <div class="kampung-keren">
        <div class="container">
            <h2>Kampung Keren</h2> <br>
            @foreach ($descriptions ?? '' as $description)
            <h5> <?= $description->desc_kampungkeren ?></h5>
            @endforeach
        </div>
    </div>

    <!--Konten Kampung Keren-->
    <div class="kampung">
        @foreach ($kampungkeren as $karen)
        <div class="konten">
            <h2 class="h4 font-italic mb-4">{{ $karen->judul }}</h2>
            <div class="row">
                <div class="col-lg-5">
                    <img src="{{ asset('kampungkerenProd/'. $karen->foto)}}" alt="kampung-herbal" class="w-100 mb-4 border border-md border-black shadow-md">
                </div>
                <div class="col-md-6">
                    <p style="font-family: Montserrat, sans-serif;"> {{ $karen->caption }}</p>
                </div>
            </div>
        </div>
        <br>
        @endforeach
        <div style="text-align:center">
            {{ $kampungkeren->links() }}
        </div>
    </div>
    <!--Akhir konten kampung keren-->
@endsection