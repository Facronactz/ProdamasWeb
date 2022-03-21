@extends('layouts.desain')
@section('audio','active')
{{-- @section('search') --}}
<form class="d-flex">
    <input class="form-control me-2" type="search" style="font-family: 'Font Awesome 5 Free'; font-weight: 600; border-radius: 30px; height: 30px" placeholder=" &#xf002;" aria-label="Search" />
</form>
{{-- @endsection --}}
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Prodamas Plus</title>

    <!--icon-->
    <link href="img/logoprodamas.png" rel="icon" />

    <!--Goofle Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Montserrat&display=swap" rel="stylesheet" />

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- Template Main CSS File
    <LINK rel="stylesheet" type="text/css"
     href="media.css" title="Default Styles" media="screen">-->

    <!--CSS-->
    <link rel="stylesheet" href="css/media.css">
</head>

<body>

    <!-- awal jumbotron -->
    <div class="banner">
        <video id="background-video" autoplay loop muted poster="kota.png">
            <source src="img/AUDIO.mp4" type="video/mp4" />
        </video>
    </div>
    <!-- akhir jumbotrom -->

    <!-- Awal feed audio -->
    <div class="row row-cols-1 row-cols-md-3 mb-2 g-4 centerItms feedAudio">
        {{-- Card Audio --}}
        @forelse ($audios as $audio)
        <div class=" card noBorder cardAudio" style="width: 18rem;">
            <div class="card h-100 noBorder" data-bs-toggle="modal" data-bs-target="#audioPlayer{{ $audio->id }}">
                <img src="{{ asset('/audioProd/thumb/'.$audio->gambar_sampul) }}" class="card-img-top d-flex justify-content" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        <p class=" tittleAudio" href="">
                            {{$audio->judul}}
                        </p>
                    </h5>
                </div>
            </div>
        </div>

        @foreach ($audios as $audio)    
        {{-- Card Modal --}}
        <div class="modal fade" id="audioPlayer{{$audio->id}}" tabindex="-1" aria-labelledby="audioPlayerLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title" id="audioPlayerLabel">{{ $audio->judul }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row row-cols-1 row-cols-md-3 mb-2 g-4 audioPlayerBox centerItms">
                            <div class="card" style="
                                width: 25rem;
                                border: none;
                                margin-right:1em;
                                ">
                                <img src="{{ asset('/audioProd/thumb/'.$audio->gambar_sampul) }}" class="d-flex justify-content" style="width: 100%;" alt="...">
                                <audio controls style="width: 100%;">
                                    <source src="{{ asset('/audioProd/fileaudio/'.$audio->konten) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                            <div class="card" style="
                            width: 25rem;
                            border: none;
                            ">
                                <h1> {{$audio->judul}}</h1>
                                <p>{{$audio->caption}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- Akhir Card Audio --}}
        @endforeach
        @empty
        <div class="alert alert-success" role="alert">
            Tidak ada data
        </div>
        @endforelse
    </div>
    <!-- akhir feed audio -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>
@endsection