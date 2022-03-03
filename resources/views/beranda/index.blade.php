@extends('layouts.desain')
@section('beranda','active')

<form class="d-flex">
  <input class="form-control me-2" type="search" style="font-family: 'Font Awesome 5 Free'; font-weight: 600; border-radius: 30px; height: 30px" placeholder=" &#xf002;" aria-label="Search" />
</form>

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
  <link rel="stylesheet" href="css/beranda.css">

</head>

<body>

  <!-- awal jumbotron -->
  <div id="carouselIndicators" class="carousel slide carousel-sec" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/header1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/header2.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!--Tentang-->
  <section class="tentang mt-3 ">
    <div class="container">
      <div class="row">
        <div class="col-md-6 py-5">
          <h1 class="text-center mb-5">Tentang Prodamas</h1>
          <p class="fs-5" style="text-align: justify;">Program Pemberdayaan Masyarakat (PRODAMAS) adalah suatu program dari Pemerintah Kota Kediri
            yang digunakan untuk melaksanakan kegiatan pembangunan masyarakat ditingkat kelurahan yang berbasis
            wilayah Rukun Tetangga (RT) yang dimulai sejak tahun 2015 sebagai upaya mewujudkan kemampuan dan
            kemandirian masyarakat dalam pembangunan.</p>
        </div>
        <div class="col-md-6 py-5">
          <img src="img/tentangProdamas.jpeg" class="img-fluid rounded-3">
        </div>
      </div>
    </div>
  </section>
  <!--End tentang-->

  <!--artikel-->
  <div class="container artikel mb-5 mt-5">
    <h3 class="mb-4" style="font-family: Inter, sans-serif">Artikel</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      @foreach ($artikel as $item)     
      <a href="artikel/{{$item->id}}">
        <div class="col">
          <div class="card h-100 hover-card">
            <img src="{{ asset('articleProd/sampul/'.$item->gambar_sampul) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $item->judul }}</h5>
              <p class="card-text">{{ $item->text_sampul }}</p>
            </div>
          </div>
        </div>
      </a>
      @endforeach
    </div>
    <a href="{{ url('artikel') }}">
      <h6 class="text-end mt-3"><u>Info Lainnya <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
          </svg></u></h6>
    </a>
  </div>
  <!--end artikel-->

  <!--video-->
  <div class="container artikel mb-5 mt-5">
    <h3 class="mb-4" style="font-family: Inter, sans-serif">Video</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      @foreach ($video as $item)         
      <div class="col">
        <div class="card h-100 hover-card" data-bs-toggle="modal" data-bs-target="#audioPlayer{{$item->id}}">
          <img src="{{ asset('videoProd/sampul/'.$item->gambar_sampul) }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $item->judul }}</h5>
            <p class="card-text">{{ $item->caption }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <a href="{{ url('video') }}">
      <h6 class="text-end mt-3"><u>Info Lainnya <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
          </svg></u></h6>
    </a>
  </div>

  @foreach ($video as $item)
  <div class="modal fade" id="audioPlayer{{$item->id}}" tabindex="-1" aria-labelledby="audioPlayerLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title" id="fotoLabel">{{ $item->judul }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row row-cols-1 row-cols-md-3 mb-2 g-4 videoPlayerBox centerItms">
                    <div class="card" style="
                        width: 25rem;
                        border: none;
                        margin: 0;
                        margin-top: 30px;
                        ">
                        <video width="100%" max-width="850" height="auto" controls>
                            <source src="{{ asset('/videoProd/konten/'.$item->konten) }}">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="card" style="
                        width: 25rem;
                        border: none;
                        ">
                        <h3> {{ $item->judul }} </h3>
                        <p> {{ $item->caption }} </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
@endforeach
  <!--end video-->

  <!--foto-->
  <div class="container artikel mb-5 mt-5">
    <h3 class="mb-4" style="font-family: Inter, sans-serif">Foto</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      @foreach ($foto as $item)         
      <div class="col">
        <div class="card h-100 hover-card" data-bs-toggle="modal" data-bs-target="#audioPlayer{{$item->id}}">
          <img src="{{ asset('fotoProd/'.$item->konten) }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $item->judul }}</h5>
            <p class="card-text">{{ $item->caption }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <a href="{{ url('foto') }}">
      <h6 class="text-end mt-3"><u>Info Lainnya <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
          </svg></u></h6>
    </a>
  </div>


  {{-- <div class="container artikel mb-5 mt-5">
    <h3 class="mb-4" style="font-family: Inter, sans-serif">Foto</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      @foreach ($foto as $item)
      <a href="foto/{{$item->id}}"></a>  
      <div class="col">
        <div class="card h-100 hover-card" data-bs-toggle="modal" data-bs-target="#audioPlayer{{$item->id}}">
          <img src="{{ asset('fotoProd/'.$item->gambar_sampul) }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $item->judul }}</h5>
            <p class="card-text">{{ $item->caption }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <a href="{{ url('foto') }}">
      <h6 class="text-end mt-3"><u>Info Lainnya <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
          </svg></u></h6>
    </a>
  </div> --}}

@foreach ($foto as $item)
{{-- Card Modal --}}
<div class="modal fade" id="audioPlayer{{$item->id}}" tabindex="-1" aria-labelledby="audioPlayerLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
      <div class="modal-content">
          <div class="modal-header ">
              <h5 class="modal-title" id="fotoLabel">{{ $item->judul }}</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="row row-cols-1 row-cols-md-3 mb-2 g-4 videoPlayerBox centerItms">
                  <div class="col-6" style="width: 25rem;
                  border: none;
                  margin: 0;  
                  margin-top: 30px;
                  ">
                      <img class="max-width: 500px" src="{{ asset('fotoProd/'. $item->konten)}}" width="520" height="340" controls>
                  </div>
                  <div class="card" style="
                  width: 25rem; 
                  border: none;
                  ">
                      <h3>{{ $item->judul }}</h3>
                      <p>{{ $item->caption }}</p>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          </div>
      </div>
  </div>
</div>
{{-- Akhir Card foto --}}
@endforeach
  <!--end foto-->

  <!--audio-->
  <div class="container artikel mb-5 mt-5">
    <h3 class="mb-4" style="font-family: Inter, sans-serif">Audio</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      @foreach ($audio as $item) 
      <div class="col">
        <div class="card h-100 hover-card" data-bs-toggle="modal" data-bs-target="#audioPlayer{{$item->id}}">
          <img src="{{ asset('audioProd/thumb/'.$item->gambar_sampul) }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $item->judul }}</h5>
            <p class="card-text">{{ $item->caption }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <a href="{{ url('audio') }}">
      <h6 class="text-end mt-3"><u>Info Lainnya <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
          </svg></u></h6>
    </a>
  </div>

  @foreach ($audio as $item)    
  {{-- Card Modal --}}
  <div class="modal fade" id="audioPlayer{{$item->id}}" tabindex="-1" aria-labelledby="audioPlayerLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
          <div class="modal-content">
              <div class="modal-header ">
                  <h5 class="modal-title" id="audioPlayerLabel">{{ $item->judul }}</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="row row-cols-1 row-cols-md-3 mb-2 g-4 audioPlayerBox centerItms">
                      <div class="card" style="
                          width: 25rem;
                          border: none;
                          margin-right:1em;
                          ">
                          <img src="{{ asset('/audioProd/thumb/'.$item->gambar_sampul) }}" class="d-flex justify-content" style="width: 100%;" alt="...">
                          <audio controls style="width: 100%;">
                              <source src="{{ asset('/audioProd/fileaudio/'.$item->konten) }}" type="audio/mpeg">
                              Your browser does not support the audio element.
                          </audio>
                      </div>
                      <div class="card" style="
                      width: 25rem;
                      border: none;
                      ">
                          <h1> {{$item->judul}}</h1>
                          <p>{{$item->caption}}</p>
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
  <!--end audio-->

  <!--berlangganan-->
  {{-- <div class="container py-5 mb-5">
    <div class="cardberlangganan">
      <div class="card-body">
        <h5 class="card-title text-center mb-4 mt-5" style="font-weight: bold;font-family:Inter, sans-serif;">Berlangganan</h5>
        <p class="card-text text-center" style="font-family: Montserrat, sans-serif;;">Dapatkan informasi menarik dan terupdate tentang Prodamas Kota Kediri dengan mendaftarkan email Anda.</p>
        <form action="{{url('beranda.index')}}" method="post">
          @if ($message = Session::get('success'))
          <span class="text-success">
            <center>
              <strong>{{ $message }}</strong>
            </center>
          </span>
          @endif
          @if ($message = Session::get('error'))
          <span class="text-muted">
            <center>
              <strong>{{ $message }}</strong>
            </center>
          </span>
          @endif
          @if($errors->any('email'))
          <span class="text-danger">
            <center>
              <strong>{{$errors->first('email')}}</strong>
            </center>
          </span>
          @endif
          @csrf
          <div class="col-8 offset-2 mb-3 mt-2">
            <input type="text" class="form-control" name="email" aria-describedby="emailberlangganan">
          </div>
          <div class="d-grid gap-2 col-6 mx-auto mb-5">
            <button class="rounded" type="submit" style="background-color: #FF6600; border:none;color:white;height: 35px">Mulai Berlangganan</button>
          </div>
        </form>
      </div>
    </div>
  </div> --}}
  <!--end berlangganan-->


</body>

</html>
@endsection