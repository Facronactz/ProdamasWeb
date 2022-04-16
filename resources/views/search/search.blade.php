@extends('layouts.desain')
@section('beranda', 'active')
@section('title', 'Beranda')
@section('head')
    <link rel="stylesheet" href="css/beranda.css">
    <link rel="stylesheet" href="css/hover.css">
    <style>
        .carousel-img {
            object-fit: cover;
            object-position: top;
            max-height: 94vh;
        }

        .card-img-fix {
            object-fit: cover;
            height: calc(20vh + 10px);
            min-height: 200px;
            max-height: 300px;
        }

    </style>
@endsection



@section('content')


<div class="input-group" style="max-width: 10vw">
    <form action="search">
        <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="search" value="{{ request('search') }}">
        <button class="btn btn-primary" type="submit">
            <i class="fas fa-search link-light"></i>
        </button>
        </form>
</div>

    <!--artikel-->
    <div class="container-md my-5 artikel">
        <h3 class="mb-4" style="font-family: Inter, sans-serif">Artikel</h3>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 px-md-0 px-5">
            @if($artikel->count())
            @foreach ($artikel as $item)
                <div class="col my-3 my-lg-0 hvr-bob">
                    <div class="card h-100 hvr-grow hvr-underline-from-center">
                        <img src="{{ asset('articleProd/sampul/' . $item->gambar_sampul) }}" class="card-img-top card-img-fix" alt="...">
                        <div class="card-body">
                            <a class="stretched-link" href="artikel/{{ $item->id }}" target="_blank"></a>
                            <h5 class="card-title">{{ $item->judul }}</h5>
                            {{-- <p class="card-text">{{ $item->text_sampul }}</p> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-end mt-2">
            <a href="{{ url('artikel') }}" class="hvr-icon-forward" style="text-decoration: underline">
                Selengkapnya
                <i class="hvr-icon fas fa-arrow-right"></i>
            </a>
        </div>

        @else
        <div>
            Tidak ada data
        </div>
        <hr>
        @endif
    </div>
    <!--end artikel-->

    <!--video-->
    <div class="container-md my-5">
        <h3 class="mb-4" style="font-family: Inter, sans-serif">Video</h3>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 px-md-0 px-5">
            @if($videos->count())
            @foreach ($videos as $item)
                <div class="col my-3 my-lg-0 hvr-bob" style="cursor: pointer">
                    <div class="card h-100 hvr-grow hvr-underline-from-center" data-bs-toggle="modal" data-bs-target="#audioPlayer{{ $item->id }}">
                        <img src="{{ asset('videoProd/sampul/' . $item->gambar_sampul) }}" class="card-img-top card-img-fix" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->judul }}</h5>
                            {{-- <p class="card-text">{{ $item->caption }}</p> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-end mt-2">
            <a href="{{ url('video') }}" class="hvr-icon-forward" style="text-decoration: underline">
                Selengkapnya
                <i class="hvr-icon fas fa-arrow-right"></i>
            </a>
        </div>
        @else
        <div>
            Tidak ada data
        </div>
        <hr>
        @endif
    </div>

    @foreach ($videos as $item)
        <div class="modal fade" id="audioPlayer{{ $item->id }}" tabindex="-1" aria-labelledby="audioPlayerLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title" id="fotoLabel">{{ $item->judul }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row row-cols-1 row-cols-md-2 mb-2 g-4 videoPlayerBox centerItms">
                            <div class="card" style="
                                        width: 25rem;
                                        border: none;
                                        margin: 0;
                                        margin-top: 30px;
                                        ">
                                <video class="media" width="100%" max-width="850" height="auto" controls>
                                    <source src="{{ asset('/videoProd/konten/' . $item->konten) }}">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="card" style="
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
    <div class="container-md my-5">
        <h3 class="mb-4" style="font-family: Inter, sans-serif">Foto</h3>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 px-md-0 px-5">
            @if($fotos->count())
            @foreach ($fotos as $item)
                <div class="col my-3 my-lg-0 hvr-bob" style="cursor: pointer">
                    <div class="card h-100 hvr-grow hvr-underline-from-center" data-bs-toggle="modal" data-bs-target="#audioPlayer{{ $item->id }}">
                        <img src="{{ asset('fotoProd/' . $item->konten) }}" class="card-img-top card-img-fix" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->judul }}</h5>
                            {{-- <p class="card-text">{{ $item->caption }}</p> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-end mt-2">
            <a href="{{ url('foto') }}" class="hvr-icon-forward" style="text-decoration: underline">
                Selengkapnya
                <i class="hvr-icon fas fa-arrow-right"></i>
            </a>
        </div>
        @else
            <div>
                Tidak ada data
            </div>
            <hr>
            @endif
    </div>

    @foreach ($fotos as $item)
        {{-- Card Modal --}}
        <div class="modal fade" id="audioPlayer{{ $item->id }}" tabindex="-1" aria-labelledby="audioPlayerLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title" id="fotoLabel">{{ $item->judul }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row row-cols-1 row-cols-md-2 mb-2 g-4 videoPlayerBox centerItms">
                            <div class="card" style="
                                  border: none;
                                  margin: 0;
                                  margin-top: 30px;
                                  ">
                                <img class="d-flex" src="{{ asset('fotoProd/' . $item->konten) }}" controls>
                            </div>
                            <div class="card" style="
                                  border: none;
                                  ">
                                <h3>{{ $item->judul }}</h3>
                                {{-- <p>{{ $item->caption }}</p> --}}
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
    <div class="container-md my-5">
        <h3 class="mb-4" style="font-family: Inter, sans-serif">Audio</h3>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 px-md-0 px-5">
            @if($audios->count())
            @foreach ($audios as $item)
                <div class="col my-3 my-lg-0 hvr-bob" style="cursor: pointer">
                    <div class="card h-100 hvr-grow hvr-underline-from-center" data-bs-toggle="modal" data-bs-target="#audioPlayer{{ $item->id }}">
                        <img src="{{ asset('audioProd/thumb/' . $item->gambar_sampul) }}" class="card-img-top card-img-fix" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->judul }}</h5>
                            {{-- <p class="card-text">{{ $item->caption }}</p> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-end mt-2">
            <a href="{{ url('audio') }}" class="hvr-icon-forward" style="text-decoration: underline">
                Selengkapnya
                <i class="hvr-icon fas fa-arrow-right"></i>
            </a>
        </div>
        @else
            <div>
                Tidak ada data
            </div>
            <hr>
            @endif
    </div>

    @foreach ($audios as $item)
        {{-- Card Modal --}}
        <div class="modal fade" id="audioPlayer{{ $item->id }}" tabindex="-1" aria-labelledby="audioPlayerLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title" id="audioPlayerLabel">{{ $item->judul }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row row-cols-1 row-cols-md-2 mb-2 g-4 audioPlayerBox centerItms">
                            <div class="card" style="
                                          width: 20rem;
                                          border: none;
                                          margin-right:1em;
                                          ">
                                <img src="{{ asset('/audioProd/thumb/' . $item->gambar_sampul) }}" class="d-flex justify-content click" style="width: 100%;" alt="...">
                                <audio class="media" controls style="width: 100%;">
                                    <source src="{{ asset('/audioProd/fileaudio/' . $item->konten) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                            <div class="card" style="
                                      border: none;
                                      ">
                                <h1> {{ $item->judul }}</h1>
                                <p>{{ $item->caption }}</p>
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

@endsection
