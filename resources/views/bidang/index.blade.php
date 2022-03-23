@extends('layouts.desain')
@section('main-tentang','active')
@section('bidang','active')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Prodamas Plus</title>

    <!--icon-->
    <link href="img/icon.png" rel="icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!--Goofle Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Montserrat&display=swap" rel="stylesheet" />

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!--CSS-->
    <link rel="stylesheet" href="css/bidang.css">
</head>

<body>
    <section id="prodamas">
        <div class="container">
            <div class="row mt-5">
                <div class="col text-center" style="font-family: Inter, sans-serif; margin-top: 35px">
                    <h1>Cakupan Bidang</h1>
                </div>
            </div>
            <div class="row mt-5" style="font-family: Montserrat, sans-serif">
                <div class="col text-center">
                    @foreach ($descriptions as $description)
                    <p class="fs-5">
                        {{ $description->desc_bidang }}
                    </p>
                    @endforeach
                </div>
            </div>
        </div>
        <!--div container-->
    </section>

    @foreach ($bidangs as $bidang)

    <div class="container mt-5 mb-5">
        @if ($bidang->id %2 != 0)
        <div class="row box">
            <div class="col-6">
                <div class="bidang-img" style="background-image: url('{{ asset("bidangProd/". $bidang->foto) }}')"></div>
            </div>

            <div class="d-flex align-items-center justify-content-center col-6">
                <div class="item-title">
                    <h1>{{ $bidang->judul }}</h1>
                    <br>
                    <p>{{ $bidang->caption}}</p>
                </div>
            </div>
        </div>

        @else
        <div class="row box">
            <div class="d-flex align-items-center justify-content-center col-6">
                <div class="item-title">
                    <h1>{{ $bidang->judul }}</h1>
                    <br>
                    <p>{{ $bidang->caption}}</p>
                </div>
            </div>

            <div class="col-6">
                <div class="bidang-img" style="background-image: url('{{ asset("bidangProd/". $bidang->foto) }}')"></div>
            </div>
        </div>
        @endif
    </div>
    @endforeach
</body>

</html>
@endsection