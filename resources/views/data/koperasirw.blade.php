@extends('layouts.desain')
@section('data', 'active')
@section('koperasi', 'active')

@section('title', 'Prodamas Dalam Angka')

@section('head')
{{-- <link rel="stylesheet" href="css/peta.css"> --}}
@endsection

@section('content')
<div style="padding:0 50px; margin:50px 0;">
    @foreach($datakoperasi as $kop)
    <div style="text-align:center">
        <h2 style="text-decoration:underline">{{$kop->judul}}</h2>
        <p style="font-weight:700">{{$kop->deskripsi}}</p>
    </div>

    <div>
        <?= $kop->tableau ?>
    </div>
    <div class="mt-3"><?=$kop->konten?></div>
    <div style="font-size:small">(<em>Sumber Data</em>: {{$kop->sumber}})</div>
    @endforeach
</div>
@endsection