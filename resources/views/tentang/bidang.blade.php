@extends('layouts.desain')
@section('main-tentang', 'active')
@section('bidang', 'active')

@section('head')
    <link rel="stylesheet" href="css/bidang.css">
@endsection

@section('content')
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
@endsection
