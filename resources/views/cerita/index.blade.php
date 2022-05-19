@extends('layouts.desain')
@section('cerita', 'active')
@section('title', 'Cerita Masyarakat')

@section('head')
    <style>
        .ringkasan p{
            text-align: justify;
        }
    </style>
    <link rel="stylesheet" href="css/cerita.css">
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
            {{-- Search Bar --}}
            <form action="searchcerita">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="searchcerita" value="{{ request('searchcerita') }}">
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search link-light"></i>
                    </button>
                </div>
            </form>
            <div class="col">
                @foreach ($tulis_ceritas as $cerita)
                    <div class="card mb-3 p-0 hvr-sweep-to-left hvr-bob">
                        <div class="row g-0">
                            <div class="col-md-4 my-auto">
                                <img src="{{ asset('ceritaProd/sampul/' . $cerita->foto) }}" class="img-fluid rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body row">
                                    {{-- <a href="tulis_ceritas/{{ $cerita->id }}" class="stretched-link"></a> --}}
                                    <h5 class="card-title" style="font-size: 22px;">{{ $cerita->judul }}</h5>
                                    <p class="col-xs-6 col-sm-6 col-lg-10" style="font-size: 13px;"><small class="text-muted">Oleh {{ $cerita->nama }}, {{ $cerita->updated_at}}</small></p>
                                    <p class="col-xs-6 col-sm-6 col-lg-2" style="font-size: 11px;"><small class="fa fa-eye text-muted"> {{ $cerita->views}} </small></p>
                                    <p class="card-text col-xs-4" style="font-size: 14px; text-align: justify"><?= $cerita->ringkasan = Str::limit($cerita->ringkasan, 430) ?></p>
                                    <a href="cerita/{{ $cerita->id }}" target="_blank" style="font-size: 14px; text-align: right">Selengkapnya.. <i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-end w-100 mb-4">
                    {{ $tulis_ceritas->links() }}
                </div>
            </div>


        </div>
        <!--div container-->
    </section>
@endsection
