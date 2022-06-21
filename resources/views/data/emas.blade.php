@extends('layouts.desain')
@section('data', 'active')
@section('angka', 'active')
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

    <div class="mt-3">
        <p style="font-weight:700">
            Analisis Deskriptif : <br>
            • Terdapat 189 spot EMAS di Kota Kediri. <br>
            • Terdapat 159 tutor EMAS di Kota Kediri. <br>
            • Jumlah partisipan EMAS di Kota Kediri adalah 2342 partisipan. <br> 
            • Jumlah partisipan EMAS kategori Anak-anak (6-12 tahun) adalah 1870 partisipan. <br>
            • Jumlah partisipan EMAS kategori Remaja (13-18 tahun) adalah 352 partisipan. <br>
            • Jumlah partisipan EMAS kategori Dewasa (>18 tahun) adalah 91 partisipan. <br>
            • Kelurahan Tosaren adalah kelurahan dengan jumlah partisipan terbanyak yaitu 173 partisipan. <br>
        </p>

    <!-- <div class="mt-3"><?=$emas->konten?></div> -->
    <div style="font-size:small">(<em>Sumber Data</em>: {{$emas->sumber}})</div>

    @endforeach    
    <!-- <div class="container">
        <div class="row row-cols-1 row-cols-3">
            @foreach($dataemas as $emas)
            <img id="gambar1" style="cursor: pointer;" class="col" src="{{ asset('emasProd/'.$emas->gambar1) }}" alt="" srcset="">
            <img id="gambar2" style="cursor: pointer;" class="col" src="{{ asset('emasProd/'.$emas->gambar2) }}" alt="" srcset="">
            <img id="gambar3" style="cursor: pointer;" class="col" src="{{ asset('emasProd/'.$emas->gambar3) }}" alt="" srcset="">
            @endforeach
        </div>
    </div> -->
</div>
@endsection