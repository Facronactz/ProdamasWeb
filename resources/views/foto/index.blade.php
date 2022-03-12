@extends('layouts.desain')
@section('media', 'active')
@section('foto', 'active')

@section('title', 'Foto')

@section('head')
    <link rel="stylesheet" href="css/media.css">
@endsection

@section('content')
    <!-- awal jumbotron -->
    <div class="banner">
        <video id="background-video" autoplay loop muted poster="kota.png">
            <source src="img/FOTO.mp4" type="video/mp4" />
        </video>
    </div>
    <!-- akhir jumbotrom -->


    <!-- Awal feed foto -->
    <div class="row row-cols-1 row-cols-md-3 mb-2 g-4 centerItms feedAudio">
        {{-- Card foto --}}
        @forelse ($fotos as $foto)
            <div class=" card noBorder cardAudio" style="width: 18rem;">
                <div class="card h-100 noBorder" data-bs-toggle="modal" data-bs-target="#audioPlayer{{ $foto->id }}">
                    <img src="{{ asset('fotoProd/' . $foto->konten) }}" style="width: 250px; height: 270px"
                        class="card-img-top d-flex justify-content" alt="foto-prodamas">
                    <div class="card-body">
                        <h5 class="card-title">
                            <p class=" tittleAudio" href="">
                                {{ $foto->judul }}
                            </p>
                        </h5>
                    </div>
                </div>
            </div>

            @foreach ($fotos as $foto)
                {{-- Card Modal --}}
                <div class="modal fade" id="audioPlayer{{ $foto->id }}" tabindex="-1"
                    aria-labelledby="audioPlayerLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header ">
                                <h5 class="modal-title" id="fotoLabel">{{ $foto->judul }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row row-cols-1 row-cols-md-3 mb-2 g-4 videoPlayerBox centerItms">
                                    <div class="col-6" style="width: 25rem;
                                border: none;
                                margin: 0;
                                margin-top: 30px;
                                ">
                                        <img class="max-width: 500px" src="{{ asset('fotoProd/' . $foto->konten) }}"
                                            width="520" height="340" controls>
                                    </div>
                                    <div class="card" style="
                                width: 25rem;
                                border: none;
                                ">
                                        <h3>{{ $foto->judul }}</h3>
                                        <p>{{ $foto->caption }}</p>
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
        @empty
            <div class="alert alert-success" role="alert">
                Tidak ada data
            </div>
        @endforelse
    </div>
    <!-- akhir feed foto -->
@endsection