@extends('layouts.desain')
@section('kampungkeren','active')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Prodamas Plus</title>

    <!--Goofle Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Montserrat&display=swap" rel="stylesheet" />

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!--CSS-->
</head>

<body>
    <!-- awal jumbotron -->
    <div class="container-fluid banner">
        <div class="container banner-content">
        </div>
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
</body>

</html>
@endsection