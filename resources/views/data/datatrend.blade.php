@extends('layouts.desain')
@section('data', 'active')
@section('koperasi', 'active')

@section('title', 'Prodamas Dalam Peta')

@section('head')
<link rel="stylesheet" href="css/peta.css">
@endsection

@section('content')

<div class="row mx-auto">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-kota-tab" data-bs-toggle="pill" data-bs-target="#pills-kota" type="button" role="tab" aria-controls="pills-kota" aria-selected="true">Kota</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-kecamatan-tab" data-bs-toggle="pill" data-bs-target="#pills-kecamatan" type="button" role="tab" aria-controls="pills-kecamatan" aria-selected="false">Kecamatan</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-kelurahan-tab" data-bs-toggle="pill" data-bs-target="#pills-kelurahan" type="button" role="tab" aria-controls="pills-kelurahan" aria-selected="false">Kelurahan</button>
        </li>
    </ul>
</div>
<div class="tab-content" id="pills-tabContent">
    {{-- Kota --}}
    <div class="tab-pane show active" id="pills-kota" role="tabpanel" aria-labelledby="pills-kota-tab">
        @foreach($trends as $trend)
        $trends->kota
        @endforeach
    </div>

    {{-- Kecamatan --}}
    <div class="tab-pane" id="pills-kecamatan" role="tabpanel" aria-labelledby="pills-kecamatan-tab">
        @foreach($trends as $trend)
        $trends->kecamatan
        @endforeach
    </div>

    {{-- Kota --}}
    <div class="tab-pane" id="pills-kelurahan" role="tabpanel" aria-labelledby="pills-kelurahan-tab">
        @foreach($trends as $trend)
        $trends->kelurahan
        @endforeach
    </div>
</div>
@endsection

{{-- @section('')

    <script>
        $("iframe").ready(function() {
            // $('#viz1655393574272').addClass('visually-hidden');
            $('#selector').val('viz1655393574272');

            sessionStorage.setItem("datatrend", 'viz1655393574272');
            $('#viz1655707617330').addClass('visually-hidden');
            $('#viz1655395721778').addClass('visually-hidden');
        });

        $(document).ready(function() {
            $("#selector").change(function() {
                if (sessionStorage.getItem('datatrend') != null) {
                    var b = sessionStorage.getItem('datatrend');
                    $('#' + b).addClass('visually-hidden');
                }
                var a = $('#selector').find(":selected").val();
                sessionStorage.setItem("datatrend", a);
                $('#' + a).removeClass('visually-hidden');
            });
        });

        $(window).on('unload', function() {
            sessionStorage.removeItem("datatrend");
        });
    </script>
@endsection --}}