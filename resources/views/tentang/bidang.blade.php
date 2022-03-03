@extends('layouts.desain')
@section('main-tentang','active')
@section('bidang','active')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Prodamas Plus</title>

    <!--icon-->
    <link href="img/icon.png" rel="icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

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
    <section id="prodamas">
        <div class="container">
            <div class="row mt-5">
                <div class="col text-center" style="font-family: Inter, sans-serif; margin-top: 35px">
                    <h1>Cakupan Bidang</h1>
                </div>
            </div>
            <div class="row mt-5" style="font-family: Montserrat, sans-serif">
                <div class="col text-center">
                    <p class="fs-5">
                        Cakupan Bidang Prodamas Plus yang terdiri dari 6 bidang :
                        Ekonomi, Sosial Budaya, Infrastruktur, Kesehatan, Pendidikan dan Kepemudaan.
                    </p>
                </div>
            </div>

        </div>
        <!--div container-->
    </section>

    <div class="container mt-5 mb-5">
        <div class="row box">
            <div class="col-6">
                <div class="bidang-img" style="background-image:url('img-tentang/Ekonomi.jpg')">
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-center col-6">
                <div class="item-title">
                    <h1>EKONOMI</h1>
                    <br>
                    <p>Untuk meningkatkan keberdayaan masyarakat di bidang ekonomi,
                        anggaran Prodamas dialokasikan terutama untuk mendukung pengembangan usaha kecil,
                        sekaligus sebagai jalan mewujudkan salah satu program unggulan Pemkot Kediri,
                        yaitu mewujudkan 15.000 Wirausahawan baru.</p>
                </div>
            </div>
        </div>

        <div class="row box">
            <div class="d-flex align-items-center justify-content-center col-6">
                <div class="item-title">
                    <h1>SOSIAL BUDAYA</h1>
                    <br>
                    <p>Prodamas juga dialokasikan untuk pengadaan sarana pengembangan seni budaya,
                        olah raga dan kegiatan sosial kemasyarakatan di tingkat RT, seperti pengadaan
                        alat kesenian tradisional maupun modern, peralatan pendukung kegiatan olah raga prestasi
                        dan peralatan pendukung kegiatan sosial kemasyarakatan lainnya.</p>
                </div>
            </div>

            <div class="col-6">
                <div class="bidang-img" style="background-image:url('img-tentang/SosialBudaya.jpg')">
                </div>
            </div>
        </div>

        <div class="row box">
            <div class="col-6">
                <div class="bidang-img" style="background-image:url('img-tentang/Infrastruktur.jpg')">
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-center col-6">
                <div class="item-title">
                    <h1>INFRASTRUKTUR</h1>
                    <br>
                    <p>Pengalokasian anggaran Prodamas untuk peningkatan pembangunan infrastruktur berskala kecil
                        di tiap RT berdampak pada penyerapan tenaga kerja dari warga lingkungan RT setempat.</p>
                </div>
            </div>
        </div>

        <div class="row box">
            <div class="d-flex align-items-center justify-content-center col-6">
                <div class="item-title">
                    <h1>KESEHATAN</h1>
                    <br>
                    <p>
                    <p>Guna mendukung terwujudnya program Universal Health Coverage (UHC),
                        Prodamas Plus dialokasikan untuk pembayaran iuran BPJS Kesehatan
                        kelas 3 bagi seluruh masyarakat yang belum terdaftar BPJS Kesehatan maupun
                        alih kepesertaan dari Peserta Mandiri menjadi peserta yang dibiayai oleh
                        anggaran Prodamas Plus.</p>
                    </p>
                </div>
            </div>

            <div class="col-6">
                <div class="bidang-img" style="background-image:url('img-tentang/Kesehatan.jpg')">
                </div>
            </div>
        </div>

        <div class="row box">
            <div class="col-6">
                <div class="bidang-img" style="background-image:url('img-tentang/Pendidikan.jpg')">
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-center col-6">
                <div class="item-title">
                    <h1>PENDIDIKAN</h1>
                    <br>
                    <p>Prodamas plus mendukung terciptanya kesempatan yang sama kepada seluruh masyarakat
                        Kota Kediri untuk mendapatkan pendidikan berkualitas baik formal maupun non-formal
                        seperti pengadaan sarana prasarana TPA/TPQ dan pelatihan keterampilan kerja dan
                        Pengadaan sarana prasarana program Quran Massive (program unggulan Pemkot Kediri
                        untuk memberantas buta huruf Al Quran).
                    </p>
                </div>
            </div>
        </div>

        <div class="row box">
            <div class="d-flex align-items-center justify-content-center col-6">
                <div class="item-title">
                    <h1>KEPEMUDAAN</h1>
                    <br>
                    <p>Prodamas plus mendukung potensi yang dimiliki pemuda yang ada di Kota Kediri khususnya
                        karang taruna untuk saling berbagi keterampilan yang dimiliki dan disalurkan kepada
                        anak-anak yang ada di masing-masing daerah.</p>
                </div>
            </div>

            <div class="col-6">
                <div class="bidang-img" style="background-image:url('img-tentang/Kepemudaan.jpg')">
                </div>
            </div>
        </div>

    </div>

</body>

</html>
@endsection
