@extends('layouts.desain')

@section('content')
<div>
    <img class="img-fluid" src="{{asset('kubeProd/KUBE.png')}}">
</div>
<div class="container">
    <div class="m-4">
        <div class="m-4 mb-5 text-center">
            <h1><strong>Wirausaha</strong></h1>
            <h4>Segala informasi mengenai kegiatan peningkatan perekonomian<br>
                di Kota Kediri.
            </h4>
        </div>
        
        <div class="card border-light my-4">
            <div class="row g-0">
                @foreach ($wirausaha as $e)
                <div class="col-lg-4 d-flex justify-content-center">
                    <img src="{{ asset('wirausahaProd/'.$e->foto_tentang) }}" class="img-fluid" style="max-height: 400px;">
                </div>
                <div class="col-lg-8">
                    <div class="card-body">
                        <h2 class="card-title">Tentang Wirausaha</h2>
                        <div style="height: 2px; background-color:#000000"></div>
                        <p class="card-text align-middle" style="font-size: 20px"><?= $e->tentang ?></p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="card border-light my-4">
            <div class="row g-0">
                <div class="col-lg-4 d-flex justify-content-center">
                    <img src="{{ asset('wirausahaProd/'.$e->foto_info) }}" class="img-fluid" style="max-height: 400px;">
                </div>
                
                <div class="col-lg-8">
                    <div class="card-body">
                        <h2 class="card-title">Informasi Wirausaha</h2>
                        <div style="height: 2px; background-color:#000000"></div>
                        
                    </div>
                </div>
            </div>
        </div>

        

    </div>
</div>

@endsection