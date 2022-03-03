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
            <link rel="stylesheet" href="css/informasi.css">
        </head>

        <body>
            <!-- awal jumbotron -->
            <div class="container-fluid banner">
                <div class="container banner-content">
                    <h1>PROGRAM PEMBERDAYAAN MASYARAKAT</h1>
                    <h1>(PRODAMAS)</h1>
                </div>
            </div>
            <!-- akhir jumbotrom -->
            <br>
            <br>
            <div class="content">
            <!--visi misi-->
                <h2> VISI DAN MISI </h2>
                <br>
                <div class="border">
                    <p id="visi">Visi :</p>
                        <p id="isi-visi"> Kota Kediri  unggul dan makmur dalam harmoni.</p>
                       <p id="visi">Misi  :</p> 
                       <ul id="isi-misi">
                           <li>Mewujudkan tata kelola pemerintahan yang bersih, transparan dan berintegritas berorientasi pada  pelayanan prima dan teknologi informasi.</li>
                           <li>Mewujudkan SDM yang berkualitas dan berdaya saing berbasis nilai agama dan budaya.</li>
                           <li>Memperkuat perekonomian daerah  berbasis potensi unggulan daerah dan pengembangan ekonomi kreatif yang berkeadilan.</li>
                           <li>Mewujudkan Kota Kediri yang aman, nyaman, dan berwawasan lingkungan yang.</li>
                       </ul>
                </div>

                <br><br>
                <br><br>

            <!--latar belakang-->
                <h2> LATAR BELAKANG </h2>
                <br>
                    <p class="text">Berawal dari program Musrenbang, kemudian dievaluasi. Selama pelaksanaan Musrenbang ditemukan permasalahan utama yang menjadikan kurang optimalnya Musrenbang dalam mengakomodasi seluruh kepentingan masyarakat, yaitu adanya kenyataan bahwa APBD Kota Kediri memiliki keterbatasan untuk merealisasikan semua usulan masyarakat hasil Musrenbang sehingga perlu adanya skala prioritas pembangunan ditinjau dari segala segi.<span class="dots"> ...</span> 
                    <br><br>
                    <span class="moreText"> Abdullah Abu Bakar, SE., Wakil Walikota Kediri yang menjadi salah satu kandidat Calon Walikota Kediri periode 2014 – 2019 waktu itu, menawarkan 
                        sebuah konsep pembangunan yang langsung menyentuh pada satuan sistem sosial masyarakat terkecil di kelurahan, yaitu Rukun Tetangga (RT) sebagai 
                        basis utama. Dalam konsep pembangunan tersebut RT diberikan ruang untuk menggelar musyawarah warga RT (rembug warga) guna menentukan dan mengajukan 
                        usulan kebutuhan pembangunan di lingkungannya, dan Pemerintah Kota Kediri akan mengalokasikan secara khusus anggaran per RT pada APBD Kota Kediri 
                        untuk mewujudkan usulan tersebut. <br><br>
                        Setelah beliau terpilih sebagai Walikota Kediri tahun 2014, segera konsep pembangunan tersebut diterapkan secara resmi dengan nama 
                        Program Pemberdayaan Masyarakat (Prodamas), yaitu sebuah program pembangunan berbasis RT yang meliputi pembangunan bidang infrastruktur, 
                        sosial dan ekonomi, dengan besar anggaran (2014 – 2019) Rp. 50 Juta / RT yang dialokasikan pada APBD Kota Kediri. Dalam periode ke – 2, 
                        Walikota Kediri, Abdullah Abu Bakar, SE., menetapkan kenaikan anggaran Prodamas menjadi Rp. 100 Juta / RT, dengan penambahan cakupan pada bidang 
                        pendidikan, kesehatan dan kepemudaan serta penyebutan program menjadi Program Pemberdayaan Masyarakat Plus (Prodamas Plus).</span></p>
                    <button class="read-more-btn">Selengkapnya</button>
    
            <!--SEKTOR-->
                <div class="bordersektor">
                    <div col>
                    <p ><i style="width: 150px; margin-top:60px;"></i>SEKTOR</p>
                    <a class="active" href="{{ url('regulasi') }}"><i style="margin-right: 20px; margin-left: 10px;"></i>Regulasi Prodamas</a>
                    <a href="{{ url('umkm') }}"><i style="margin-right: 20px; margin-left: 10px;"></i>UMKM</a>
                    <a href="{{ url('pendidikan') }}"><i style="margin-right: 20px; margin-left: 10px;"></i>Pendidikan</a>
                    <a href="{{ url('pojokbaca') }}"><i style="margin-right: 20px; margin-left: 10px;"></i>Pojok Baca</a>
                    <a href="{{ url('kampungkeren') }}"><i style="margin-right: 20px; margin-left: 10px;"></i>Kampung Keren</a>

                </div>
            </div><!--div content-->

            <script>
                const readMoreBtn = document.querySelector(".read-more-btn");
                const text = document.querySelector(".text");

                readMoreBtn.addEventListener("click", (e) => {
                text.classList.toggle("show-more");
                if (readMoreBtn.innerText === "Selengkapnya") {
                    readMoreBtn.innerText = "Sembunyikan";
                } else {
                    readMoreBtn.innerText = "Selengkapnya";
                }
                });
            </script>

        </body>
    </html>

@endsection
