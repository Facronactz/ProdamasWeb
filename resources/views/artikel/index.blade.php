@extends('layouts.desain')
@section('artikel','active')
{{-- @section('search') --}}
<form class="d-flex">
    <input class="form-control me-2" type="search"
        style="font-family: 'Font Awesome 5 Free'; font-weight: 600; border-radius: 30px; height: 30px"
        placeholder=" &#xf002;" aria-label="Search" />
</form>
{{-- @endsection --}}
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Prodamas Plus</title>

    <!--Goofle Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Montserrat&display=swap"
        rel="stylesheet" />

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!--CSS-->
    <link rel="stylesheet" href="css/artikel.css">
</head>

<body>
    <!-- awal jumbotron -->
    <div class="container-fluid banner">
        <div class="container banner-content">
            <h1>Artikel</h1>
        </div>
    </div>
    <!-- akhir jumbotrom -->

    <div class="container">
        <div class="row justify-content-between mt-5">

            <!-- Kiri -->
            <div class="col">

                @foreach ($artikel as $item)     
                <div class="mb-3 kartu">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('articleProd/sampul/'.$item->gambar_sampul) }}" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <a href="artikel/{{$item->id}}" class="link-dark">
                                    <h5 class="card-title">{{$item->judul}}</h5>
                                </a>
                                <p class="card-text">{{$item->text_sampul}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
            <!-- kanan -->
            <div class="rightcolumn">
                <div class="card-right bg-light">
                    <h5 class="card-header">Update Artikel</h5>
                    @foreach ($artikelupdate as $item)
                        
                    <div class="col-sm-12">
                        <div class="caption">
                            <a href="artikel/{{$item->id}}"><h5>{{$item->judul}}</h5></a>
                            <div class="row">
                                <div class="col-xl-3">
                                    <img src="{{ asset('articleProd/sampul/'.$item->gambar_sampul) }}" width="100%" alt="Cinque Terre">
                                </div>
                                <div class="col-sm-9">
                                    <p>{{$item->text_sampul}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="card-right bg-light">
                    <h5 class="card-header">Kunjungi Website</h5>
                    <ul class="list-group list-group-flush">
                        <a class="list-group-item" href="https://www.kedirikota.go.id/">Pemerintah Kota Kediri</a>
                        <a class="list-group-item"
                            href="https://prodamasplus.kedirikota.go.id/auth/login">Progressio</a>
                        <a class="list-group-item"
                            href="https://survey123.arcgis.com/share/932769e15a27418aa9b448b0b1e6b6b6">Bank Sampah</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>
@endsection