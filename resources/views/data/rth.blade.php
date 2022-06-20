@extends('layouts.desain')
@section('data', 'active')
@section('rth', 'active')

@section('title', 'Prodamas Dalam Peta')

@section('head')
<link rel="stylesheet" href="css/peta.css">
@endsection

@section('content')
<div style="padding:0 50px; margin:50px 0;">
    @foreach($rths as $rth)
    <div style="text-align:center">
        <h2 style="text-decoration:underline">{{$rth->judul}}</h2>
        <p style="font-weight:700">{{$rth->deskripsi}}</p>
    </div>

    <div>
        <?= $rth->tableau ?>
    </div>
    <div class="mt-3"><?=$rth->konten?></div>
    <div style="font-size:small">(<em>Sumber Data</em>: {{$rth->sumber}})</div>
    @endforeach
</div>

@endsection