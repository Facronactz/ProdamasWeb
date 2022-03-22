@extends('layouts.desain')
@section('main-tentang', 'active')
@section('sosmed', 'active')

@section('title', 'Media Sosial')

@section('head')
    <link rel="stylesheet" href="css/media.css">
@endsection

@section('content')
    <!-- awal jumbotron -->
    <!-- awal jumbotron -->
    <div class="banner">
        <video id="background-video" autoplay loop muted poster="kota.png">
            <source src="img/MEDSOS.mp4" type="video/mp4" />
        </video>
    </div>
    <!-- akhir jumbotrom -->
    <!-- akhir jumbotrom -->


    <!-- Awal embed IG -->
    <div class="feedig">

        <img src="img/instagram-icon.png" alt="instagram" width="40" height="40" class="d-inline-block" />
        <a class="usernameig" href="https://www.instagram.com/prodamasplus/">@prodamasplus</a>

        <!-- Tampilan embed Post ig -->
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-b536458b-3760-4283-b033-8973fa8cdf62"></div>

    </div>
    <!-- Akhir embed IG -->

    <!-- Awal embed tiktok-->
    <div class="feedtiktok">

        <img src="img/tiktok-icon.png" alt="tiktok" width="40" height="40" class="d-inline-block" />
        <a class="usernamett" href="https://vt.tiktok.com/ZSejpETUx/">@prodamasplus</a>

        <!-- post tiktok -->
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-15ebf52f-2c7c-4118-a19b-d937f9ed6c5f"></div>
    </div>
    <!-- Akhir embed tiktok -->
@endsection
