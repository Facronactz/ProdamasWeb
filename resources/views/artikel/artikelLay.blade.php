@extends('layouts.desain')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Prodamas Plus</title>

  <!--Goofle Font-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Montserrat&display=swap" rel="stylesheet" />

  <!--font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <!--CSS-->
  <link rel="stylesheet" href="{{ asset('/css/artikel.css') }}">

</head>

<body>
<!-- Content -->
<div class="row">
        <div class="leftcolumn mt-5">
            @foreach ($artikel as $item)    
            <div class="card">
                <h2>{{$item->judul}}</h2><br>
                <div class="row">
                    <!--<div class="col-sm-12">buat share
                    </div>-->
                    <div class="col-sm-4">
                        <h6>{{ $item->created_at }}</h6>
                    </div>
                </div>
                <br>
                <div class="">
                    <img src="{{ asset('articleProd/sampul/'.$item->gambar_sampul) }}" alt="" style="height:100%; max-width: 800px">
                </div><br>
                <p>{{$item->article}}</p>
            </div>
            @endforeach
        </div>

        <div class="rightcolumn mt-5">
            <div class="card-right bg-light">
                <h5 class="card-header">Update Artikel</h5>
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
            </div>
            <div class="card-right bg-light">
                <h5 class="card-header">Kunjungi Website</h5>
                    <ul class="list-group list-group-flush">
                        <a class="list-group-item" href="https://www.kedirikota.go.id/">Pemerintah Kota Kediri</a>
                        <a class="list-group-item" href="https://prodamasplus.kedirikota.go.id/auth/login">Progressio</a>
                        <a class="list-group-item" href="https://survey123.arcgis.com/share/932769e15a27418aa9b448b0b1e6b6b6">Bank Sampah</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<!-- Akhir content -->
</body>
</html>
@endsection
