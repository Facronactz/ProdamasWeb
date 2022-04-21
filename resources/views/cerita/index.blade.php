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
            <div class="row mt-5">
                <div class="col text-center" style="font-family: Inter, sans-serif; margin-top: 35px">
                    <h1>Masyarakat Bercerita</h1>
                </div>
            </div>
            <div class="row mt-5" style="font-family: Montserrat, sans-serif">
                <div class="col text-center">
                    @foreach ($descriptions ?? '' as $description)
                        <p class="fs-5">
                            <?= $description->desc_tuliscerita ?>
                        </p>
                    @endforeach
                </div>
            </div>
            <div class="row mt-5" style="font-family: Montserrat, sans-serif">
                <div class="col text-center">
                    <a class="btn btn-primary" href="/tuliscerita">Buat Tulisan</a></td>
                </div>
            </div>

            {{-- mengambil data dari database --}}
            <h4 class="my-3">Cerita Masyarakat</h4>
            <div class="col">
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
                                    <p class="card-text" style="font-size: 13px;"><small class="text-muted">Oleh {{ $cerita->nama }}, {{ $cerita->updated_at}} </small></p>
                                    <p class="card-text" style="font-size: 14px;"><?= $cerita->ringkasan = Str::limit($cerita->ringkasan, 430) ?></p>
                                    <a href="cerita/{{ $cerita->id }}" target="_blank" style="font-size: 14px;">Selengkapnya . .</a>
                                    <small class="fa fa-eye" aria-hidden="true"><small class="text-muted"> {{ $cerita->views}} </small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
           

        </div>
        <!--div container-->
    </section>



    </div>
@endsection
