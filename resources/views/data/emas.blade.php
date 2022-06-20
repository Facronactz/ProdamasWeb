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
    <div class="row row-cols-1 row-cols-3">
        <img class="col" src="https://via.placeholder.com/728x90.png?text=gambar+emas" alt="">
        <img class="col" src="https://via.placeholder.com/728x90.png?text=gambar+emas" alt="">
        <img class="col" src="https://via.placeholder.com/728x90.png?text=gambar+emas" alt="">
    </div>
</div>
@endsection