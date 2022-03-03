@extends('layouts.desain')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
        
        <title>Prodamas Plus</title>

        <!--Goofle Font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Montserrat&display=swap" rel="stylesheet" />

        <!--font awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

        <!--CSS-->
        <link rel="stylesheet" href="css/tentang.css">
    </head>
    <body>
        <!-- awal jumbotron -->
        <div class="container-fluid banner">
            <div class="container banner-content">
            </div>
        </div>
        <!-- akhir jumbotrom -->


        
        <div class="container">
            <div class="row justify-content-between mt-5">
                <!-- Sejarah Prodamas -->
                <div class="col">
                <div class="mb-3 kartukiri">
                    <div class="row g-0">
                        <div class="col-md-4 mt-5">
                        <img src="img-tentang/Sejarah Prodamas.jpg" class="img-fluid rounded-start" alt="Gambar Sejarah Prodamas" >
                        </div>
                        <div class="col-md-8  mt-4">
                        <div class="card-body isi"> 
                            <h4 style="font-family: Inter, sans-serif; text-decoration-line: underline; text-decoration-style: double;" 
                            class="card-title">Sejarah Prodamas</h4>
                            <p class="card-text">Prodamas lahir dari hasil evaluasi Musrenbang (Musyawarah Perencanaan Pembangunan)
                                yang mana dalam pelaksanaanya ditemukan permasalahan utama yang menjadikan kurang optimalnya Musrenbang
                                dalam mengakomodasi seluruh kepentingan masyarakat, yaitu adanya kenyataan bahwa APBD Kota Kediri memiliki
                                keterbatasan untuk merealisasikan semua usulan masyarakat hasil Musrenbang sehingga perlu adanya skala prioritas pembangunan 
                                ditinjau dari segala segi.</p>
                        </div>
                        </div>
                        <div class="isi">
                            <p>Menjawab permasalahan tersebut, Abdullah Abu Bakar, SE., salah satu kandidat Calon Walikota Kediri periode 2014 – 2019, 
                                menawarkan sebuah konsep pembangunan yang langsung menyentuh pada satuan sistem sosial masyarakat terkecil di kelurahan, 
                                yaitu Rukun Tetangga (RT) sebagai basis utama.  </p>

                            <p>Setelah beliau terpilih sebagai Walikota Kediri tahun 2014, segera konsep pembangunan tersebut diterapkan secara resmi 
                                dengan nama Program Pemberdayaan Masyarakat (Prodamas), yaitu sebuah program pembangunan berbasis RT yang meliputi 
                                pembangunan bidang infrastruktur, sosial dan ekonomi, dengan besar anggaran (2014 – 2019) Rp. 50 Juta / RT yang dialokasikan 
                                pada APBD Kota Kediri.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-3 kartukanan">
                    <div class="row g-0">
                        {{-- <div class="col-md-4 mt-5">
                            <img src="img-tentang/Foto Sebelah Tulisan.jpg" class="img-fluid rounded-start" alt="Gambar" >
                        </div> --}}
                        <div class="col-md-8">
                        <div class="card-body isi">
                            <h4 style="font-family: Inter, sans-serif; text-decoration-line: underline; text-decoration-style: double;"
                            class="card-title">Transformasi Prodamas menjadi Prodamas Plus</h4>
                            <p class="card-text">Peralihan Prodamas ke Prodamas Plus merupakan langkah 
                                baru untuk membantu mewujudkan visi dan misi Kota Kediri untuk selalu 
                                terus menggerakan pembangunan dari segala aspek. Perubahan ini ditandai 
                                dengan beberapa poin perbedaan diantaranya cakupan bidang, sistem pengadaan, 
                                penempatan anggaran, usulan kegiatan, dan juga pendampingan.
                            </p>
                        </div>
                        </div>
                        <div class="col-md-4 mt-5">
                        <img src="img-tentang/Foto Sebelah Tulisan.jpg" class="img-fluid rounded-start" alt="Gambar" >
                        </div>
                    </div>
                </div>
                <!-- End Sejarah Prodamas -->

                <div class="text-center mt-3">
                    <img src="/img-tentang/Transformasi Prodamas-Prodamas Plus.jpg" 
                    class="rounded" style="width: 100%;" alt="Gambar Transformasi Prodamas-Prodamas Plus">
                </div>

                <!-- Accordion -->
                <br><br>
                <h3 style="font-family: Inter, sans-serif; text-decoration-line: underline; text-decoration-style: double;">Regulasi Prodamas</h3>
                <p style="font-family: Montserrat, sans-serif;">Hal - hal yang mengatur Prodamas telah tercantum dalam Perwali Prodamas yang telah mengalami beberapa kali perubahan.</p>
                <div class="accordion mt-3" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Prodamas 2014
                    </button>
                    </h2>
                    <!--perwal 1-->
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>(Peraturan Walikota Kediri Nomor 40  Tahun 2014)<br />Pedoman Pelaksanaan Program Fasilitasi Pemberdayaan Masyarakat</strong>
                        <br><a href="/perwali/40 PERWAL PRODAMAS.pdf"> <button type="button" class="btn btn-outline-secondary">Download</button></a>
                    </div><hr>
                    </div>
                    <!--perwal 2-->
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>(Peraturan Walikota Kediri Nomor  52  Tahun 2014)<br />Perubahan Atas Peraturan Walikota Kediri Nomor 40 Tahun 2014 Tentang Pedoman Pelaksanaan Program Fasilitasi Pemberdayaan Masyarakat</strong>
                            <a href="/perwali/52_PERWAL_2014_ttg_PERUBAHAN_PERWAL_ATAS_PERWAL_40_TAHUN_2014_ttg_PRODAMAS.pdf"> <button type="button" class="btn btn-outline-secondary">Download</button></a>
                        </div>
                        </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Prodamas 2015
                    </button>
                    </h2>
                    <!--Perwal 3-->
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>(Peraturan Walikota Kota Kediri Nomor 19 Tahun 2015)<br />Perubahan Kedua Atas Peraturan Walikota Kediri Nomor 40 Tahun 2014 Tentang Pedoman Pelaksanaan Program Fasilitasi Pemberdayaan Masyarakat </strong>
                            <br><a href="/perwali/19_PERWAL_2015_ttg_PERUBAHAN_KEDUA_PRODAMAS.pdf"> <button type="button" class="btn btn-outline-secondary">Download</button></a>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Prodamas 2016
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>(Peraturan Walikota Kota Kediri Nomor 2 Tahun 2016)<br />Perubahan Ketiga Atas Peraturan Walikota Kediri Nomor 40 Tahun 2014 tentang Pedoman Pelaksanaan Program Fasilitasi Pemberdayaan Masyarakat</strong>
                            <br><a href="/perwali/2,_PERWAL_2016_ttg_PERUBAHAN_KE-3_PRODAMAS.pdf"> <button type="button" class="btn btn-outline-secondary">Download</button></a>                    </div>
                        <hr></div>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>(Peraturan Walikota Kediri Nomor   21   Tahun 2016)<br />Peraturan Walikota Tentang Perubahan Kempat Atas Peraturan Walikota Kediri Nomor 40 Tahun 2014 Tentang Pedoman Pelaksanaan Program Fasilitasi Pemberdayaan Masyarakat.</strong>
                            <br><a href="/perwali/21_PERWAL_2016_ttg_PERUBAHAN_KEEMPAT_PERWAL_40_TAHUN_2014_ttg_PRODAMAS_kpm.pdf"> <button type="button" class="btn btn-outline-secondary">Download</button></a>                    </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Prodamas 2017
                    </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>(Peraturan Walikota Kediri Nomor  2 tahun 2017)<br />Perubahan Kelima Atas Peraturan Walikota Kediri Nomor 40 Tahun 2014 Tentang Pedoman Pelaksanaan Program Fasilitasi Pemberdayaan Masyarakat</strong>
                            <br><a href="/perwali/2_PERWAL_2017_ttg_PERUBAHAN_KELIMA_PERWALI_PRODAMAS_20174.pdf"> <button type="button" class="btn btn-outline-secondary">Download</button></a>                    </div>
                        <hr></div>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>(Peraturan Walikota Kediri Nomor 27 Tahun 2017)<br />Pedoman Pembentukan Kader Pemberdayaan Masyarakat</strong>
                            <br><a href="/perwali/27_PERWAL_2017_ttg_PEDOMAN_PEMBENTUKAN_KADER_MASYARAKAT__GERDU_SEHATI_pemerintahan.pdf"> <button type="button" class="btn btn-outline-secondary">Download</button></a>                    </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Prodamas 2019
                    </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>(Peraturan Walikota Kediri Nomor 3 Tahun 2019)<br />Pedoman Teknis Pelaksanaan ProgramPemberdayaan Masyarakat Plus </strong>
                            <br><a href="/perwali/3_PERWALI_2019_ttg_PRODAMAS_PLUS_(FINAL_2)_edit.pdf"> <button type="button" class="btn btn-outline-secondary">Download</button></a>                    </div>
                        <hr></div>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>(Peraturan Walikota Kediri Nomor   4   Tahun 2019)<br />Perubahan Keenam Atas Peraturan Walikota Kediri Nomor 40 Tahun 2014 Tentang Pedoman Pelaksanaan Program Fasilitasi Pemberdayaan Masyarakat</strong>
                            <br><a href="/perwali/SALINAN_PERWAL_4_TH_2019_PERUBAHAN_KE-6_PERWAL_40_TH_2014_PRODAMAS.pdf"> <button type="button" class="btn btn-outline-secondary">Download</button></a>                    </div>
                        </div>
                    {{-- </div> --}}
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Prodamas Plus 2020
                    </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>(Peraturan Walikota Kediri Nomor  23  Tahun 2020)<br />Pedoman Teknis Pelaksanaan&nbsp;ProgramPemberdayaan Masyarakat Plus</strong>
                            <br><a href="/perwali/PERWAL 23 Tahun 2020.pdf"> <button type="button" class="btn btn-outline-secondary">Download</button></a>                    </div>
                        </div>
                    {{-- </div> --}}
                </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    Prodamas Plus 2021
                </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>(Peraturan Walikota Kediri Nomor  32  Tahun 2021)<br />Pedoman Teknis ProgramPemberdayaan Masyarakat Plus Tahun Anggaran 2022</strong>
                        <br><a href="/perwali/PERWAL_32_Pedoman_Teknis_Prodamas_Plus_TA_2022__27_MEI.pdf"> <button type="button" class="btn btn-outline-secondary">Download</button></a>                    </div>
                    </div>
                </div>
            </div>
                <!--tag akhir-->
                </div>
                <!-- End Accordion -->
            </div> 
            </div>
        </body>
    </html>
@endsection
