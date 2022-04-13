@extends('layouts.desain')
@section('main-tentang', 'active')
@section('kampungkeren', 'active')

@section('title', 'Kampung Keren')

@section('head')
<style>
    .banner {
        height: 90vh;
        width: 100%;
        justify-content: center;
        align-items: center;
        background: url(../img-tentang/header-kampung-keren.png);
        background-size: cover;
        background-position: center;
        text-align: left;
        text-shadow: 5px 5px 10px #4d148c;
        font-size: xx-large;
        color: white;
        font-weight: bold;
        padding-top: 15%;
        -webkit-background-size: 100% 100%;
        -moz-background-size: 50% 50%;
        -o-background-size: 50% 50%;
        background-size: 100% 100%;
    }

    .header-kampung-keren{
        width: 100%;
        max-height: 500px;
        object-fit: cover;
        object-position: 10% 40%;
    }
    .kampung-keren {
        margin-top: 30px;
    }

    .kampung-keren h2 {
        text-align: center;
        font-family: "Inter", sans-serif;
    }

    .kampung-keren h5 {
        margin: auto;
        margin-left: 17px;
        margin-right: 25px;
        font-family: "Montserrat", sans-serif;
        text-align: justify;
    }

    .kampung {
        padding: 70px;
    }

    .konten {
        max-width: auto;
        margin: auto;
        margin-left: 25px;
        margin-right: 25px;
        text-align: justify;
    }

    .konten h2 {
        text-decoration-line: underline;
        text-decoration-style: double;
    }

    /* dropdown */
    ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    ul li {
        display: block;
        position: relative;
        float: left;
    }

    li ul {
        display: none;
    }

    ul li a {
        display: block;
        padding: 1em;
        text-decoration: none;
        white-space: nowrap;
        color: white;
    }

    li:hover>ul {
        display: block;
        position: absolute;
    }

    .menu:hover {
        background-color: rgba(231, 146, 67, 0.9);
    }

    li:hover li {
        float: none;
    }

    .main-navigation li ul li {
        border-top: 0;
    }

    ul ul ul {
        left: 100%;
        top: 0;
    }

    ul:before,
    ul:after {
        content: " ";
        /* 1 */
        display: table;
        /* 2 */
    }

    ul:after {
        clear: both;
    }

    /* end dropdown */

    .isi a {
        font-size: 12px;
        text-decoration: none;
        color: black;
    }

    .isi a:hover {
        color: blue;
    }

    .kartu {
        max-width: auto;
    }

    .kartuatas {
        max-width: 18rem;
    }

    .item h5 {
        font-family: "Inter", sans-serif;
        font-size: large;
    }

    .item p {
        font-family: "Montserrat", sans-serif;
        text-align: justify;
    }
</style>
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