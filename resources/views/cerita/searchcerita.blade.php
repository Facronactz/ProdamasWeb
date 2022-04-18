@extends('layouts.desain')
{{-- @section('main-tentang', 'active') --}}
@section('cerita', 'active')

@section('head')
    <link rel="stylesheet" href="css/cerita.css">
    <style>
        @media screen and (max width: 768px) {}

    </style>
@endsection

@section('content')
    <section id="prodamas">
        <div class="container">

        {{-- Search Bar --}}
            <div class="input-group" style="max-width: 10vw">
                <form action="searchcerita" method="GET">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="searchcerita">
                    <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search link-light"></i>
                    </button>
                </form>
            </div>

            {{-- mengambil data dari database --}}
            <h4 class="my-3">Cerita Masyarakat</h4>
            <div class="col">
                @if ($tulis_ceritas->count())
                @foreach ($tulis_ceritas as $cerita)
                    <div class="card mb-3 p-0 hvr-sweep-to-left hvr-bob">
                        <div class="row g-0">
                            <div class="col-md-4 my-auto">
                                <img src="{{ asset('ceritaProd/sampul/' . $cerita->foto) }}" class="img-fluid rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    {{-- <a href="tulis_ceritas/{{ $cerita->id }}" class="stretched-link"></a> --}}
                                    <h5 class="card-title" style="font-size: 22px;">{{ $cerita->judul }}</h5>
                                    <p class="card-text" style="font-size: 13px;"><small class="text-muted">Oleh {{ $cerita->nama }}, {{ $cerita->created_at}} </small></p>
                                    <p class="card-text" style="font-size: 14px;"><?= $cerita->ringkasan = Str::limit($cerita->ringkasan, 430) ?></p>
                                    <a href="cerita/{{ $cerita->id }}" target="_blank" style="font-size: 14px;">Selengkapnya . .</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-end w-100 my-3">
                    {{ $tulis_ceritas->links() }}
                </div>
                @else
                <h4 class="text-center">
                    Tidak Ditemukan
                </h4>
                <hr>
                @endif
            </div>
           

        </div>
        <!--div container-->
    </section>



    </div>
@endsection
