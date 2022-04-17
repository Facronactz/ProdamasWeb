@extends('layouts.desain')
@section('media', 'active')
@section('audio', 'active')
@section('title', 'Audio')

@section('head')
<link rel="stylesheet" href="css/media.css">
@endsection

@section('content')
<!-- awal jumbotron -->
<div>
    {{-- <video id="background-video" autoplay loop muted poster="kota.png">
        <source src="header/hAudio.png" type="video/mp4" />
    </video> --}}
    <img class="w-100" src="header/hAudio.png" alt="" srcset="">
</div>
<!-- akhir jumbotrom -->
{{-- Search Bar --}}
<div class="input-group" style="max-width: 10vw">
    <form action="searchaudio" method="GET">
    <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="searchaudio">
    <button class="btn btn-primary" type="submit">
        <i class="fas fa-search link-light"></i>
    </button>
    </form>
</div>
<!-- Awal feed audio -->
<div class="row row-cols-1 row-cols-md-3 mb-2 g-4 centerItms feedAudio">
    {{-- Card Audio --}}
    @forelse ($audios as $audio)
    <div class=" card noBorder cardAudio" style="width: 18rem; cursor: pointer;">
        <div class="card h-100 noBorder" data-bs-toggle="modal" data-bs-target="#audioPlayer{{ $audio->id }}">
            <img src="{{ asset('/audioProd/thumb/' . $audio->gambar_sampul) }}" class="card-img-top d-flex justify-content" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    <p class=" tittleAudio" href="">
                        {{ $audio->judul }}
                    </p>
                </h5>
            </div>
        </div>
    </div>

    @foreach ($audios as $audio)
    {{-- Card Modal --}}
    <div class="modal fade" id="audioPlayer{{ $audio->id }}" tabindex="-1" aria-labelledby="audioPlayerLabel" aria-hidden="true">
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
                                
                                
                            <img src="{{ asset('/audioProd/thumb/' . $audio->gambar_sampul) }}" class="d-flex justify-content" style="width: 100%;" alt="...">
                            <audio controls>
                                <iframe src="{{$audio->konten}}" width="fixed" height="fixed" allow="autoplay"></iframe>
                                {{-- <source src="http://docs.google.com/uc?export=open&id=1lhaQyNS3pwc6JWWg8jmOf4eyK2qRR8wi" type="audio/mp3">
                                <p>Your browser does not support HTML5 audio :(</p> --}}
                             </audio> 
                            
                            {{-- <audio controls style="width: 100%;">
                                <source src="{{ asset('/audioProd/fileaudio/' . $audio->konten) }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio> --}}
                        </div>
                        <div class="card" style="
                                width: 25rem;
                                border: none;
                                ">
                            <h1> {{ $audio->judul }}</h1>
                            <p>{{ $audio->caption }}</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Card Audio -->
    @endforeach
    @empty
    <div class="alert alert-success" role="alert">
        Tidak ada data
    </div>
    @endforelse
    <div class="d-flex justify-content-end w-100 my-3">
        {{ $audios->links() }}
    </div>
</div>
<!-- akhir feed audio -->
@endsection