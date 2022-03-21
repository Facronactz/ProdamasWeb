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
        <link rel="stylesheet" href="css/kampung.css">
    </head>

        <body>
            <!-- awal jumbotron -->
            <div class="container-fluid banner">
                <div class="container banner-content">
                </div>
            </div>
            <!-- akhir jumbotrom -->
          
            <div class="kampung-keren">
                <div class="container">
                    <h2>Kampung Keren</h2> <br>
                    <h5>Kampung Keren Prodamas merupakan salah satu dari 10 program unggulan Wali Kota Kediri. Program ini memicu tumbuhnya kreativitas dan kemandirian 
                        masyarakat di Kota Kediri untuk memunculkan karakteristik kawasan, keunikan, budaya,
                         keterampilan dan peningkatan potensi ekonomi di kelurahannya.</h5>
                </div>
            </div>
            
            <!--Konten Kampung Keren-->
                <div class="kampung">
                    <!--Kampung 1-->
                    <br>
                    
                    <div class="konten" style="">
                        <h2 class="h4 font-italic mb-4">Kampung Herbal</h2>
                            <div class="row">
                                <div class="col-lg-5">
                                    <img src="img-tentang/herbal.JPG" alt="kampung-herbal" class="w-100 mb-4 border border-md border-black shadow-md">
                                </div>
                                <div class="col-md-6">
                                    <p style="font-family: Montserrat, sans-serif;"> Terletak di Kelurahan Mojoroto, Kecamatan Mojoroto, Kampung Herbal memiliki 
                                        beberapa taman yang dikelola secara swadaya oleh masyarakat setempat, yaitu taman toga dan 
                                        taman butorantas (buah, toga, sayuran dan tanaman hias). Di sini kita dapat menemukan sekitar 
                                        150 varietas tanaman yang berhasil ditanam.</p>                   
                                </div>
                            </div>
                    </div>
                
                
                
                    {{-- </div>
                    <p class="font-italic text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</p>
                </div> --}}
                {{-- <div class="separator my-2"></div> --}}
                

                <!--Kampung 2-->
                <br>
                    <div class="konten" >
                        <h2 class="h4 font-italic mb-4">Kampung Wisata Air Sumber Banteng</h2>
                            <div class="row">
                                <div class="col-lg-5">
                                    <img src="img-tentang/wisata air.JPG" alt="kampung-wisata-air" class="w-100 mb-4 border border-md border-white shadow-sm">
                                </div>
                                <div class="col-md-6">
                                    <p class="text-kampung" style="font-family: Montserrat, sans-serif;"> Terletak di Kelurahan Mojoroto, Kecamatan Mojoroto, Kampung Herbal memiliki 
                                        beberapa taman yang dikelola secara swadaya oleh masyarakat setempat, yaitu taman toga dan 
                                        taman butorantas (buah, toga, sayuran dan tanaman hias). Di sini kita dapat menemukan sekitar 
                                        150 varietas tanaman yang berhasil ditanam.</p>                   
                                </div>
                            </div>
                        </div>
                    {{-- </div>
                    <p class="font-italic text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</p>
                </div> --}}
                {{-- <div class="separator my-2"></div> --}}

                <!--Kampung 3-->
                <br>
                <div class="konten">
                    <h2 class="h4 font-italic mb-4">Kampung Pecut</h2>
                        <div class="row">
                            <div class="col-lg-5">
                                <img src="img-tentang/Pecut.JPG" alt="kampung-pecut" class="w-100 mb-4 border border-md border-white shadow-sm">
                            </div>
                            <div class="col-md-6">
                            <p class="text-kampung" style="font-family: Montserrat, sans-serif;"> Di Kelurahan Kemasan, Kecamatan Kota., kita bisa menyaksikan pertunjukan Pecut Samandiman khas kediri. 
                                Yang membedakan Pecut Samandiman dengan pecut di daerah lain adalah bentuk pecutnya yang panjang, besar, dan juga berat. 
                                Rata-rata pecut samandiman mempunyai panjang sekitar 8 hingga 10 meter dengan berat mencapai hampir dua kilogram.</p>                   
                            </div>
                        </div>
                </div>
                {{-- </div>
                <p class="font-italic text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</p>
                </div> --}}
                {{-- <div class="separator my-2"></div> --}}

                <!--Kampung 4-->
                <br>
                <div class="konten">
                    <h2 class="h4 font-italic mb-4">Kampung Tahu</h2>
                        <div class="row">
                            <div class="col-lg-5">
                                <img src="img-tentang/tahukediri.jpg" alt="kampung-tahu" class="w-100 mb-4 border border-md border-white shadow-sm">
                            </div>
                            <div class="col-md-6">
                            <p class="text-kampung" style="font-family: Montserrat, sans-serif;"> Kelurahan Tinalan, Kecamatan Pesantren menjadi sentra pembuatan tahu takwa sejak puluhan tahun lalu. 
                                Tak hanya pembuatan tahu saja, masyarakat kelurahan Tinalan juga membuat inovasi berbagai macam olahan makanan dari tahu. 
                                Diantaranya stik tahu, tahu walik, coklat tahu dan berbagai macam olahan tahu lainnya.</p>                   
                            </div>
                        </div>
                </div>
                {{-- </div>
                <p class="font-italic text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</p>
                </div> --}}
                {{-- <div class="separator my-2"></div> --}}

                <!--Kampung 5-->
                <br>
                <div class="konten">
                    <h2 class="h4 font-italic mb-4">Kampung Winner</h2>
                        <div class="row">
                            <div class="col-lg-5">
                                <img src="img-tentang/winner.JPG" alt="kampung-winner" class="w-100 mb-4 border border-md border-white shadow-sm">
                            </div>
                            <div class="col-md-6">
                                <p class="text-kampung" style="font-family: Montserrat, sans-serif;"> Terletak di Kelurahan Kampung Dalem, Kecamatan Kota, Kampung Winner menawarkan berbagai 
                                    kuliner lezat yang siap memanjakan lidah anda. Jamu menjadi sajian andalan di kampung ini. Terdapat 61 warga 
                                    yang terdaftar sebagai produsen jamu di Kampung Dalem. Selain jamu, komoditi unggulan lainnya yakni es puter dan rujak buah.</p>                   
                            </div>
                        </div>
                </div>
                {{-- </div>
                <p class="font-italic text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</p>
            </div> --}}
            {{-- <div class="separator my-2"></div> --}}

            <!--Kampung 6-->
            <br>
            <div class="konten">
                <h2 class="h4 font-italic mb-4">Kampung Tenun Ikat</h2>
                    <div class="row">
                        <div class="col-lg-5">
                            <img src="img-tentang/tenun.JPG" alt="kampung-tenun" class="w-100 mb-4 border border-md border-white shadow-sm">
                        </div>
                        <div class="col-md-6">
                        <p class="text-kampung" style="font-family: Montserrat, sans-serif;"> Kampung Tenun Ikat yang terletak di Kelurahan Bandar Kidul, kecamatan Pesantren ini 
                            merupakan sentra kerajinan tenun ikat Kediri yang sudah berdiri sejak tahun 1950-an. Sekitar 12 rumah 
                            industri tenun yang berada di kampung ini rata-rata dikerjakan secara turun temurun hingga tiga generasi. 
                            Tak hanya produksi dalam bentuk lembaran kain, Kampung Tenun Ikat Bandar juga membuat berbagai produk 
                            bernuansa kain tenun. Mulai syal, sepatu, topi, sarung tenun, dan tas souvenir</p>                   
                        </div>
                    </div>
             </div>
            {{-- </div>
            <p class="font-italic text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</p>
            </div> --}}
            {{-- <div class="separator my-2"></div> --}}

            <!--Kampung 7-->
            <br>
            <div class="konten">
                <h2 class="h4 font-italic mb-4">Kampung Seni</h2>
                    <div class="row">
                        <div class="col-lg-5">
                            <img src="img-tentang/kampungseni2.jpg" alt="kampung-seni" class="w-100 mb-4 border border-md border-white shadow-sm">
                        </div>
                        <div class="col-md-6">
                            <p class="text-kampung" style="font-family: Montserrat, sans-serif;">kampung Seni berlokasi di Kelurahan Ringin Anom, Kecamatan Kota. Di sini kita bisa 
                                menyaksikan anak-anak muda bermain alat musik tradisional jaranan sampai yang modern, ibu-ibu PKK 
                                bermain alat musik tradisional dengan genre templingan yang dimasuki fragmen drama dengan disisipi 
                                pesan-pesan moral dan pertunjukan musik keroncong.</p>                   
                        </div>
                    </div>
            </div>
            {{-- </div>
            <p class="font-italic text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</p>
        </div> --}}
        {{-- <div class="separator my-2"></div> --}}

            <!--akhir konten kampung keren-->
            {{-- </div>
            </div>
            </div> 
            
        </div> --}}
        </div>
        
        
        <style>
        .banner {
    height: 90vh;
    width: 100%;
    justify-content: center;
    align-items: center;
    background: url(../img-tentang/header-kampung-keren.png);
    background-size: cover;
    background-position: center;
    text-align: left;
    text-shadow: 5px 5px 10px #4d148c;
    font-size: xx-large;
    color: white;
    font-weight: bold;
    padding-top: 15%;
    -webkit-background-size: 100% 100%;
    -moz-background-size: 50% 50%;
    -o-background-size: 50% 50%;
    background-size: 100% 100%;
}

.kampung-keren {
    margin-top: 30px;
}

.kampung-keren h2 {
    text-align: center;
    font-family: "Inter", sans-serif;
}

.kampung-keren h5 {
    margin: auto;
    margin-left: 17px;
    margin-right: 25px;
    font-family: "Montserrat", sans-serif;
    text-align: justify;
}

.kampung {
    padding: 70px;
}

img {
}

.konten {
    max-width: auto;
    margin: auto;
    margin-left: 25px;
    margin-right: 25px;
    text-align: justify;
}
.konten h2 {
    text-decoration-line: underline;
    text-decoration-style: double;
}

/* dropdown */
ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

ul li {
    display: block;
    position: relative;
    float: left;
}

li ul {
    display: none;
}

ul li a {
    display: block;
    padding: 1em;
    text-decoration: none;
    white-space: nowrap;
    color: white;
}

li:hover > ul {
    display: block;
    position: absolute;
}

.menu:hover {
    background-color: rgba(231, 146, 67, 0.9);
}

li:hover li {
    float: none;
}

.main-navigation li ul li {
    border-top: 0;
}

ul ul ul {
    left: 100%;
    top: 0;
}

ul:before,
ul:after {
    content: " "; /* 1 */
    display: table; /* 2 */
}

ul:after {
    clear: both;
}

/* end dropdown */

.isi a {
    font-size: 12px;
    text-decoration: none;
    color: black;
}

.isi a:hover {
    color: blue;
}

.kartu {
    max-width: auto;
}

.kartuatas {
    max-width: 18rem;
}

.item h5 {
    font-family: "Inter", sans-serif;
    font-size: large;
}

.item p {
    font-family: "Montserrat", sans-serif;
    text-align: justify;
}

        </style>
        </body>
    </html>
@endsection
