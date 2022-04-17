@extends('layouts.desain')
@section('main-tentang', 'active')
@section('sosmed', 'active')

@section('title', 'Media Sosial')

@section('head')
    <link rel="stylesheet" href="css/media.css">
    <style>
        .medsos-link {
            text-decoration: none;
            color: black;
            font-weight: bold;
            font-size: larger;
        }

    </style>
@endsection

@section('content')
    <!-- awal jumbotron -->
    <div class="container-sm mt-3">
        <div class="div-title">
            <div class="header-symbol animate__animated animate__flash animate__delay-3s animate__faster"></div>
            <h1 class="home-title header-text px-2">
                <span>Media Sosial</span>
            </h1>
        </div>
        <!-- akhir jumbotrom -->


        <!-- Awal embed IG -->
        <div class="px-4 mb-3 mt-1">

            <img src="img/instagram-icon.png" alt="instagram" width="40" height="40" class="d-inline-block" />
            <a class="usernameig medsos-link" href="https://www.instagram.com/prodamasplus/">@prodamasplus</a>

            <!-- Tampilan embed Post ig -->
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-b536458b-3760-4283-b033-8973fa8cdf62"></div>

        </div>
        <!-- Akhir embed IG -->

        <!-- Awal embed tiktok-->
        <div class="px-4 mb-3">

            <img src="img/tiktok-icon.png" alt="tiktok" width="40" height="40" class="d-inline-block" />
            <a class="usernamett medsos-link" href="https://vt.tiktok.com/ZSejpETUx/">@prodamasplus</a>

            <!-- post tiktok -->
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-15ebf52f-2c7c-4118-a19b-d937f9ed6c5f"></div>
        </div>
        <!-- Akhir embed tiktok -->
    </div>
@endsection
