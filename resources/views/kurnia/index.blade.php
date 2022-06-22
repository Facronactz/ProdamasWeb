@extends('layouts.desain')
@section('e-boost', 'active')
@section('kurnia', 'active')
@section('head')
@section('content')
<div>
    <img class="img-fluid" src="{{asset('kurniaProd/Banner Kurnia.png')}}">
  </div>
<div style="height:4px; background-color: rgb(0, 0, 0);"> </div>
<div class="container">
    <div class="m-4 mb-5 text-center">
        <h1><strong>Kurnia</strong></h1>
        <h4>Segala informasi mengenai kegiatan peningkatan perekonomian <br> di Kota Kediri</h4>
    </div>
    <div class="card border-light my-4">
        <div class="row g-0">
            @foreach ($kurnia as $kurnias)
            @endforeach
            <div class="col-lg-4 d-flex justify-content-center">
                <img src="{{ asset('kurniaProd/'.$kurnias->foto_alur) }}" class="img-fluid" style="max-height: 400px;">
            </div>
            <div class="col-lg-8">
                <div class="card-body">
                    <h2 class="card-title">{{ $kurnias->judul_alur }}</h2>
                    <div style="height: 2px; background-color:#000000"></div>
                    <p class="card-text align-middle" style="font-size: 20px"><?= $kurnias->caption_alur ?></p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="card border-light my-4">
        <div class="row g-0">
            <div class="col-lg-4 d-flex justify-content-center">
                <img src="{{ asset('kurniaProd/'.$kurnias->foto_info) }}" class="img-fluid" style="max-height: 400px;">
            </div>
            <div class="col-lg-8">
                <div class="card-body">
                    <h2 class="card-title">{{ $kurnias->judul_info }}</h2>
                    <div style="height: 2px; background-color:#000000"></div>
                    <p class="card-text align-middle" style="font-size: 20px"><?= $kurnias->caption_info ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="pt2" style="font-size: 20px; text-align:justify; text-indent: 25px">
        <?= $kurnias->deskripsi ?>
    </div>
</div>

@endsection