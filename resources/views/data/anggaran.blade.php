@extends('layouts.desain')
@section('data', 'active')
@section('anggaran', 'active')

@section('title', 'Prodamas Dalam Peta')

@section('head')
{{-- <link rel="stylesheet" href="css/peta.css"> --}}
@endsection

@section('content')
<div style="padding:0 50px; margin:50px 0;">
    @foreach($anggarans as $anggaran)
    <div style="text-align:center">
        <h2 style="text-decoration:underline">{{$anggaran->judul}}</h2>
        <p style="font-weight:700">{{$anggaran->deskripsi}}</p>
    </div>

    <div>
        <?= $anggaran->tableau ?>
    </div>
    <div class="mt-3"><?=$anggaran->konten?></div>
    <div style="font-size:small">(<em>Sumber Data</em>: {{$anggaran->sumber}})</div>
    @endforeach
</div>

@endsection