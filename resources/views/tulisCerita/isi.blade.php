@extends('layouts.desain')
@section('cerita', 'active')
@section('title', 'Tulis Cerita')

    <!--CSS-->
    @section('head')
    <link rel="stylesheet" href="css/tuliscerita.css">
    @endsection

@section('content')
    <div class="container formBox">
        <h2> Tulis Ceritamu tentang <b> PRODAMAS </b></h2>
        <div class="formBox2">
            <p>Silakan kirim cerita Anda ke alamat email <b>prodamas@kedirikota.go.id</b> dengan format di bawah ini:
            <div class="row row-cols-1 row-cols-md-3 mb-2 g-4 centerItms">
                <div class="card" style="
                width: 35rem;
                border: none;
                margin-right:1em;
                ">
                
                <div class="isi" style="border: 1px solid rgb(179, 179, 179); font-size:small; padding: 10px">
                    <p><b>SUBJECT:</b><br> Masyarakat Bercerita - PRODAMAS</p>
                    <p><b>ISI EMAIL:</b><br>
                    <a>Nama Penulis:</a><br>
                    <a>No. Handphone:</a><br>
                    <a>Email:</a><br>
                    <a>Judul Cerita:</a><br>
                    <a>Ringkasan Cerita:</a><br>
                    <p>Silakan lampirkan foto (.jpeg atau .jpg) dan cerita Anda (.pdf) bersama email ini.</p>
                </div>
                        
                </div>
                <div class="card" style="
                width: 30rem;
                border: none;
                text-align: justify;
                ">
                    <p>Anda dapat menggunakan
                        <a href="mailto:prodamas@kedirikota.go.id?subject=Masyarakat%20Bercerita%20-%20PRODAMAS
                        &body=Nama%20Penulis%3A%0ANo.%20Handphone%3A%0AEmail%3A%0AJudul%20Cerita%3A%0ARingkasan%20Cerita%3A%0A
                        %0ASilahkan%20lampirkan%20foto%20dan%20artikel%20Anda%20%28format%20pdf%29%20bersama%20email%20ini.">
                        <b>template</b></a> ini untuk mengirim cerita lebih mudah. 
                        Setelah klik <a href="mailto:prodamas@kedirikota.go.id?subject=Masyarakat%20Bercerita%20-%20PRODAMAS
                        &body=Nama%20Penulis%3A%0ANo.%20Handphone%3A%0AEmail%3A%0AJudul%20Cerita%3A%0ARingkasan%20Cerita%3A%0A
                        %0ASilahkan%20lampirkan%20foto%20dan%20artikel%20Anda%20%28format%20pdf%29%20bersama%20email%20ini.">
                        <b>template</b></a> Anda akan diarahkan ke email Anda untuk melengkapi format yang telah disediakan.

                    <p style="font-size: small"> <i>Segala informasi dalam <font class="redText"> prodamas.kedirikota.go.id</font> diterbitkan dengan tujuan baik dan hanya untuk tujuan informasi secara umum.
                        Dengan mengirimkan tulisan ke <font class="redText"> prodamas.kedirikota.go.id</font>, penulis telah setuju bahwa tulisan dan foto yang tercantum dapat diedit
                        oleh tim <font class="redText"> prodamas.kedirikota.go.id</font>. Selain itu, penulis juga bersedia bahwa konten yang dibuat akan dipublikasikan di seluruh media sosial Kota Kediri.
                    </i></p>
                </div>
                </div>
            </form>
        </div>
    </div>
    @endsection
