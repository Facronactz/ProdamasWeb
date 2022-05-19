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


    <div class="container mt-4">
        <!-- <form action="search">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="search" value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search link-light"></i>
                </button>
            </div>
        </form> -->
    </div>

    <!--artikel-->
    <div class="container-md my-5 artikel">
        <h3 class="mb-4" style="font-family: Inter, sans-serif">Artikel</h3>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 px-md-0 px-5">
            @if ($artikel->count())
                @foreach ($artikel as $item)
                    <div class="col my-3 my-lg-0 hvr-bob">
                        <div class="card h-100 hvr-grow hvr-underline-from-center">
                            <img src="{{ asset('articleProd/sampul/' . $item->gambar_sampul) }}" class="card-img-top card-img-fix" alt="...">
                            <div class="card-body">
                                <a class="stretched-link" href="artikel/{{ $item->id }}"></a>
                                <h5 class="card-title">{{ $item->judul }}</h5>
                                {{-- <p class="card-text">{{ $item->text_sampul }}</p> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
        <div class="d-flex justify-content-end mt-2">
            <a href="{{ url('artikel') }}" class="btn btn-primary hvr-icon-forward">
                Selengkapnya
                <i class="hvr-icon fas fa-arrow-right"></i>
            </a>
        </div>
    @else
    </div>
        <div class="alert alert-success" role="alert">
            Tidak ada data
        </div>
        @endif
    </div>
    <!--end artikel-->

    <!--video-->
    <div class="container-md my-5">
        <h3 class="mb-4" style="font-family: Inter, sans-serif">Video</h3>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 px-md-0 px-5">
            @if ($videos->count())
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
            <a href="{{ url('video') }}" class="btn btn-primary hvr-icon-forward">
                Selengkapnya
                <i class="hvr-icon fas fa-arrow-right"></i>
            </a>
        </div>
    @else
    </div>
        <div class="alert alert-success" role="alert">
            Tidak ada data
        </div>
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
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{$item->konten}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="card" style="
                                                        border: none;
                                                        ">
                                <h3> {{ $item->judul }} </h3>
                                <p> <?= $item->caption ?> </p>
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

    <!-- Awal feed foto -->
    {{-- <div class="row row-cols-1 row-cols-md-3 mb-2 g-4 centerItms feedAudio justify-content-center">
        @if ($posts->count())
        @forelse ($posts as $post)
            <div class=" card noBorder cardAudio p-0">
                <div class="card h-100 noBorder" data-bs-toggle="modal" data-bs-target="#audioPlayer{{ $post->id }}">
                    <img src="{{ asset('cover/' . $post->cover) }}" style="width: 100%; height: 270px; object-fit: cover; object-position: center" class="card-img-top d-flex justify-content" alt="foto-prodamas"> --}}
    <div class="container-md my-5">
        <h3 class="mb-4" style="font-family: Inter, sans-serif">Foto</h3>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 px-md-0 px-5">
                @if ($posts->count())
                @forelse ($posts as $post)
                <div class="col my-3 my-lg-0 hvr-bob" style="cursor: pointer">
                    <div class="card h-100 hvr-grow hvr-underline-from-center" data-bs-toggle="modal" data-bs-target="#audioPlayer{{ $post->id }}">
                            <img src="{{ asset('cover/' . $post->cover) }}" class="card-img-top card-img-fix" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">
                                <p class=" tittleAudio" href="">
                                {{ $post->title }}
                                </p>
                                </h3>
                                {{ $post->created_at }}
                            </div>
                    </div>
                </div>
        @empty
            <div class="alert alert-success" role="alert">
                Tidak ada data
            </div>
        @endforelse
        </div>
                <div class="d-flex justify-content-end mt-2">
                    <a href="{{ url('foto') }}" class="btn btn-primary hvr-icon-forward">
                        Selengkapnya
                        <i class="hvr-icon fas fa-arrow-right"></i>
                    </a>
                </div>
            @else
            </div>
        <div class="alert alert-success" role="alert">
            Tidak ada data
        </div>
        @endif
    </div>


    @foreach ($posts as $post)
        {{-- Card Modal --}}
        <div class="modal fade" id="audioPlayer{{ $post->id }}" tabindex="-1" aria-labelledby="audioPlayerLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" style="width: 500px; height: 500px">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h2 class="modal-title" id="fotoLabel">{{ $post->title }}</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="carouselIndicators{{ $post->id }}" class="carousel slide" data-ride="carousel">

                            {{-- <!-- <div class="carousel-inner">
                                @foreach ($post->image as $no => $image)
                                    @if ($no == 0)
                                        <div class="carousel-item active">
                                            <img src="{{ asset('images/' . $image->image) }}" class="d-block w-100" alt="...">
                                        </div>
                                    @else
                                        <div class="carousel-item">
                                            <img src="{{ asset('images/' . $image->image) }}" class="d-block w-100" alt="...">
                                        </div>
                                    @endif
                                @endforeach -->
                            <!-- </div> --> --}}
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators{{ $post->id }}" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators{{ $post->id }}" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!-- </div> -->

                        <h6>{{ $post->body }}</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- Akhir Card foto --}}
    @endforeach
    <div class="d-flex justify-content-end w-100 mb-4">
        {{ $posts->links() }}
    </div>
    <!-- akhir feed foto -->




    <!--audio-->
    <div class="container-md my-5">
        <h3 class="mb-4" style="font-family: Inter, sans-serif">Audio</h3>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 px-md-0 px-5">
            @if ($audios->count())
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
            <a href="{{ url('audio') }}" class="btn btn-primary hvr-icon-forward">
                Selengkapnya
                <i class="hvr-icon fas fa-arrow-right"></i>
            </a>
        </div>
    @else
    </div>
        <div class="alert alert-success" role="alert">
            Tidak ada data
        </div>
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
                                <audio controls="controls">
                                    <source src="https://docs.google.com/uc?export=download&id={{ $item->konten }}">
                                </audio>
                            </div>
                            <div class="card" style="
                                                      border: none;
                                                      ">
                                <h1> {{ $item->judul }}</h1>
                                <p> <?= $item->caption ?> </p>
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
