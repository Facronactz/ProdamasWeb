@extends('layouts.desain')
@section('data', 'active')
@section('emas', 'active')

@section('title', 'Prodamas Dalam Angka')

@section('head')
{{-- <link rel="stylesheet" href="css/peta.css"> --}}
@endsection

@section('content')
<div style="padding:0 50px; margin:50px 0;">
    @foreach($dataemas as $emas)
    <div style="text-align:center">
        <h2 style="text-decoration:underline">{{$emas->judul}}</h2>
        <p style="font-weight:700">{{$emas->deskripsi}}</p>
    </div>

    <div>
        <?= $emas->tableau_tutor ?>
    </div>

    <div class="mt-3">
        <?= $emas->tableau_partisipan ?>
    </div>

    <div class="mt-3"><?=$emas->konten?></div>
    <div style="font-size:small">(<em>Sumber Data</em>: {{$emas->sumber}})</div>

    @endforeach    
    <div class="container">
        <div class="row row-cols-1 row-cols-3">
            @foreach($dataemas as $emas)
            <img id="gambar1" style="cursor: pointer;" class="col" src="{{asset($emas->gambar1)}}" alt="" srcset="">
            <img id="gambar2" style="cursor: pointer;" class="col" src="{{asset($emas->gambar2)}}" alt="" srcset="">
            <img id="gambar3" style="cursor: pointer;" class="col" src="{{asset($emas->gambar3)}}" alt="" srcset="">
            @endforeach
        </div>
    </div>
</div>
@endsection