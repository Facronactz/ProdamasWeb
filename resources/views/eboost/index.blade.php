@extends('layouts.desain')

@section('head')
<style>
    .carousel-img {
        object-fit: cover;
        object-position: center;
        height: 350px;
        width: 100%;
    }
</style>
@endsection

@section('content')

    <div id="carouselUtama" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block carousel-img w-100" src="https://prodamas.kedirikota.go.id/carouselProd/1653969225925-7.jpg" alt="..." />
            </div>
            <div class="carousel-item">
                <img class="d-block carousel-img w-100" src="https://prodamas.kedirikota.go.id/carouselProd/1654133761959-sampul-1650266071.jpg" alt="..." />
            </div>
            {{-- <div class="carousel-item active">
                <img src="img/header1.png" class="d-block w-100 carousel-img" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="img/header2.png" class="d-block w-100 carousel-img" alt="..." />
            </div> --}}
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselUtama" data-bs-slide="prev">
            <span class="carousel-icon-prev" aria-hidden="true"><i class="fas fa-arrow-left"></i></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselUtama" data-bs-slide="next">
            <span class="carousel-icon-next" aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div style="height:4px; background-color: rgb(0, 0, 0);"> </div>
    <div class="container">
        <div class="m-4 mb-5 text-center">
            <h1><strong>E-Boost</strong></h1>
            <h4>(Economic Booster)</h4>
        </div>
        <div class="card border-light my-4">
            <div class="row g-0">
                @foreach ($eboost as $e)
                @endforeach
                <div class="col-lg-4 d-flex justify-content-center">
                    <img src="{{ asset('e-boostProd/'.$e->foto_tentang) }}"
                        class="img-fluid" style="max-height: 400px;">
                </div>
                <div class="col-lg-8">
                    <div class="card-body">
                        <h2 class="card-title">{{ $e->judul_tentang }}</h2>
                        <div style="height: 2px; background-color:#000000"></div>
                        <p class="card-text align-middle" style="font-size: 20px">{{ $e->caption_tentang }}</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="card border-light my-4">
            <div class="row g-0">
                <div class="col-lg-4 d-flex justify-content-center">
                    <img src="{{ asset('e-boostProd/'.$e->foto_info) }}"
                        class="img-fluid" style="max-height: 400px;">
                </div>
                <div class="col-lg-8">
                    <div class="card-body">
                        <h2 class="card-title">{{ $e->judul_info }}</h2>
                        <div style="height: 2px; background-color:#000000"></div>
                        <p class="card-text align-middle" style="font-size: 20px">{{ $e->caption_info }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="pt2" style="font-size: 20px; text-align:justify; text-indent: 25px">
            <p>
                Untuk menghadapi persaingan pasar global saat ini tidaklah mudah, karena produk UMKM akan bersaing dengan produk negara lain. Peningkatan akses dan jangkauan akses UMKM terhadap jasa keuangan sangat dibutuhkan untuk menghadapi persaingan tersebut. Sehingga pengembangan UMKM tidak luput dari kontribusi pembiayaan dari perbankan dan lembaga keuangan lainnya yang masih memiliki keterbatasan informasi mengenai UMKM potensial lengkap dengan kelayakan usahanya. Selanjutnya, agar terdapat peningkatan penyaluran modal UMKM, diperlukan informasi laporan keuangan yang memadai dari UMKM baik yang telah atau belum terhubung dengan perbankan atau lembaga keuangan lainnya.
            </p>
                
                <p>Sementara itu, UMKM memiliki keterbatasan informasi mengenai produk dan lembaga modal yang sesuai dengan kebutuhan untuk melakukan pengembangan usahanya. Selain itu, diperlukan pula informasi mengenai prosedur dan persyaratan yang harus dipenuhi dalam mengakses pembiayaan</p>
                
                <p>Untuk mengatasi kesenjangan informasi dimaksud, E-BOOST hadir  menyediakan media informasi berupa Minisite Info UMKM, KUBE, KOPERASII  yang dapat mendapattkan pembiayaan kepada UMKM melalui Koperasi atau KURNIA. Beragam informasi kami sajikan meliputi informasi komoditi UMKM yang potensial di berbagai daerah, profil UMKM yang layak dibiayai, pola pembiayaan komoditi unggulan, model bisnis pengembangan UMKM, alur skema dan regulasi permodalan, termasuk template proposal , informasi Koperasi, dll.</p>
        </div>
    </div>

@endsection