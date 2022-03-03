@extends('layouts.desain')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />

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
            <link rel="stylesheet" href="css/bidang.css">
        </head>

        <body>
            <!-- awal jumbotron -->
            <div class="container-fluid banner">
                <div class="container banner-content">
                    <h1>Bidang</h1>
                </div>
            </div>
            <!-- akhir jumbotrom -->

            <!-- Awal header -->
            <!--Apa itu prodamas-->
            <section id="prodamas">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col text-center">
                            <h1>Apa Itu Prodamas</h1>
                        </div>
                    </div>
                <div class="row mt-5" style="font-family: Montserrat, sans-serif">
                    <div class="col" style="text-align: justify">
                        <p>
                        Program Fasilitasi Pemberdayaan Masyarakat (PRODAMAS) adalah suatu program dari pemerintah Kota Kediri yang digunakan untuk melaksanakan kegiatan pembangunan masyarakat ditingkat kelurahan yang berbasis di wilayah Rukun Tetangga (RT) yang dimulai sejak tahun 2015.
                        <br> <br>Prodamas sebagai upaya mewujudkan kemampuan dan kemandirian masyarakat dalam pembangunan infrastruktur, peningkatan ekonomi masyarakat, dan sosial kemasyarakatan.
                        </p>
                    </div>
                </div>
                </div>
                <!--div container-->
            </section>
            <!-- Akhir Apa itu prodamas-->

            <!-- Bidang -->
            <section id="bidang">
                <div class="container mt-5">
                    <div class="col text-center">
                        <h1>6 Cakupan Bidang Prodamas</h1>
                    </div>
                    <div class="row justify-content-center mt-5">
                        <div class="col-sm-6-mt-5 mb-4">
                            <div class="box">
                                <div class="item">
                                    <h1>EKONOMI</h1>
                                </div>
                                <div class="item">
                                    <img src="img/ekonomi.jpg" alt="header-bidang">
                                </div>
                            </div>
                        </div>
                        <div class="col-md4 mb-4">
                            <div class="box">
                                <div class="item">
                                    <img src="img/sosial-budaya.jpg" alt="sosial-budaya">
                                </div>
                                <div class="item">
                                    <h1>SOSIAL BUDAYA</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md4 mb-4">
                            <div class="box">
                                <div class="item">
                                    <h1>INFRASTRUKTUR</h1>
                                </div>
                                <div class="item">
                                    <img src="img/infrastruktur.jpg" alt="infrastruktur">
                                </div>
                            </div>
                        </div>
                        <div class="col-md4 mb-4">
                            <div class="box">
                                <div class="item">
                                    <img src="img/kesehatan.jpg" alt="kesehatan">
                                </div>
                                <div class="item">
                                    <h1>KESEHATAN</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md4 mb-4">
                            <div class="box">
                                <div class="item">
                                    <h1>PENDIDIKAN</h1>
                                </div>
                                <div class="item">
                                    <img src="img/ekonomi.jpg" alt="pendidikan">
                                </div>
                            </div>
                        </div>
                        <div class="col-md4 mb-4">
                            <div class="box">
                                <div class="item">
                                    <img src="img/ekonomi.jpg" alt="kepemudaan">
                                </div>
                                <div class="item">
                                    <h1>KEPEMUDAAN</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Akhir Bidang -->
            <!-- Akhir header -->
        </body>
    </html>
@endsection