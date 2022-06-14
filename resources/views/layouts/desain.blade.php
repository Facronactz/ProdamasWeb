<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Goofle Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Montserrat&family=Poppins:wght@600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500;700&display=swap" rel="stylesheet">

    <!-- FavIcon -->
    {{-- <link href="{{ asset('img/icon.png') }}" rel="icon" /> --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/desain.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    {{-- Animation --}}
    <link rel="stylesheet" href="{{ asset('css/hover.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="css/titleAnimation.css">
    <link rel="stylesheet" href="{{ asset('css/social-color.css') }}">

    {{-- Carousel --}}
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    @yield('head')
    @hasSection('title')
    <title>Prodamas Plus - @yield('title')</title>
    @else
    <title>Prodamas Plus</title>
    @endif

    <style>
        .login-icon {
            color: black !important;
            background-color: white;
            font-weight: 400;
        }

        .login-icon i:hover {
            color: black !important;
        }

        .btn-search {
            background-color: #4E148D;
            border-radius: 50%;
            border: 0px solid black;
            width: 30px;
            height: 30px;
            margin-left: 0.5rem;
        }

        .input-search {
            border: 1px solid rgba(0, 0, 0, 0.31);
            border-radius: 15px;
            line-height: 30px;
            font-size: 12px;
            text-align: center;
            width: 200px;
        }

        .header {
            max-height: 90vh;
            max-width: 100%;
            object-fit: cover;
            object-position: bottom;
        }

        .header-symbol {
            width: 14px;
            height: 14px;
            background-color: purple;
            margin: 0;
            padding: 0;
            margin-top: 7px;
        }

        .header-text span {
            font-family: 'Poppins';
            text-shadow: 2px 2px rgb(209, 201, 209);
        }

        .nav-list+.nav-list {
            margin-right: 2rem;
        }

        .line {
            height: 2px;
            width: calc(100% - 5rem);
            background-color: white;
            margin: 0.5rem 0 0.8rem 0;
        }

        .line-nav {
            height: 2px;
            width: 80%;
            background-color: white;
            margin: 0.5rem 0 0.8rem 0;
        }

        .line-te {
            height: 2px;
            width: 100%;
            background-color: white;
            margin: 0.5rem 0 0.8rem 0;
        }

        .line-va {
            height: 2px;
            width: 80%;
            background-color: white;
            margin: 0.5rem 0 0.8rem 0;
        }

        .foot-icon {
            color: #4D148C;
            background-color: white;
            border-radius: 50%;
            padding: 5px;
            margin-right: 8px;
        }

        .ph {
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1);
        }

        .foot-title {
            font-weight: 700;
            font-size: 20px"

        }

        .footer-link {
            font-weight: 400;
            font-size: 12px;

        }

        /* .bg-iki {
            background-image: url('{{ url('img/pattern.png') }}');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
        } */

        .bg-iki:after {
            content: "";
            position: fixed;
            /* stretch a fixed position to the whole screen */
            top: 0;
            height: 100vh;
            /* fix for mobile browser address bar appearing disappearing */
            left: 0;
            right: 0;
            z-index: -1;
            /* needed to keep in the background */
            background: url('{{ url('img/bg.png') }}');
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .dropdown-submenu {
            position: relative;
        }

        .arrow-menu {
            position: relative;
        }

        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
        }
    </style>

</head>

<body data-bs-spy="scroll" data-bs-target="#scrollspy" data-bs-offset="0" data-bs-method="position">
    <!-- New Nav -->
    <div class="nav-now" style="background-color: #4d148c; border-bottom: 9px solid #FF6600 ; box-shadow: -2px 5px 10px #aaaaaa;">
        <a href=" {{ url('/') }}"><img src="{{ asset('img/wesite logo 1.png') }}" alt="" class="d-inline-block align-text-top" style="width: 200px; height: auto; padding: 2rem 1.2rem; margin-bottom: -2rem" /></a>
        <div class="bg-iki">
            <nav class="navbar navbar-expand-lg navbar-dark bg-kediri sticky-top" style="font-family: 'Poppins', sans-serif;">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Content -->
                    <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
                        <!-- Middle -->
                        <div class="navbar-nav">
                            <a class="nav-link nav-list @yield('beranda')" aria-current="page" href="{{ url('/') }}"><img src="{{ asset('img/ICON HOME.png') }}" style="width: 20px; height: 20px; margin-right: 1rem"></a>
                            <a class="nav-link nav-list @yield('artikel')" href="{{ url('/artikel') }}">Artikel</a>
                            <div class="nav-item dropdown nav-list">
                                <a class="nav-link dropdown-toggle @yield('media')" id="navbarDropdownMenuLinkMedia" role="button" data-bs-toggle="dropdown" aria-expanded="false">Media</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkMedia">
                                    <li class="w-100"><a class="dropdown-item @yield('foto')" href="{{ url('/foto') }}">Foto</a></li>
                                    <li class="w-100"><a class="dropdown-item @yield('audio')" href="{{ url('/audio') }}">Audio</a></li>
                                    <li class="w-100"><a class="dropdown-item @yield('video')" href="{{ url('/video') }}">Video</a></li>
                                    <li class="w-100"><a class="dropdown-item @yield('video')" href="{{ url('/media') }}">Media Sosial</a></li>
                                </ul>
                            </div>
                            <div class="nav-item dropdown nav-list">
                                <a class="nav-link dropdown-toggle @yield('data')" id="navbarDropdownMenuLinkData" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Data</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkData">
                                    <li class="w-100"><a class="dropdown-item @yield('peta')" href="{{ url('/peta') }}">Prodamas Dalam Peta</a></li>
                                    <li class="dropdown-submenu w-100">
                                        <a class="dropdown-item @yield('kosong')">Prodamas Dalam Angka<span class="caret fas fa-caret-right ms-3"></span></a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu w-100">
                                                <li class="w-100"><a class="dropdown-item @yield('e-kosong')" href="{{ url('/kosong') }}">Anggaran & Realisasi</a></li>
                                                <li class="w-100"><a class="dropdown-item @yield('e-kosong')" href="{{ url('/kosong') }}">Ruang Terbuka Hijau</a></li>
                                                <li class="w-100"><a class="dropdown-item @yield('e-kosong')" href="{{ url('/kosong') }}">English Masive</a></li>
                                                <li class="w-100"><a class="dropdown-item @yield('e-kosong')" href="{{ url('/kosong') }}">Koperasi RW</a></li>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="w-100"><a class="dropdown-item @yield('kosong')" href="{{ url('/kosong') }}">Data Trend</a></li>
                                    <li class="w-100"><a class="dropdown-item @yield('progressio')" href="{{ url('/progressio') }}" target="_blank">Progressio</a></li>
                                    {{-- <li class="w-100"><a class="dropdown-item @yield('progressio')" href="{{ url('/progressio') }}">Progressio</a></li> --}}
                                    {{-- <a class="@yield('progressio')" href="https://progressio.kedirikota.go.id/auth/login">Progressio <span class="caret fas fa-caret-right"></span></a> --}}
                                </ul>
                            </div>
                            <div class="nav-item dropdown nav-list">
                                <a class="nav-link dropdown-toggle @yield('main-tentang')" id="navbarDropdownMenuLinkAbout" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tentang</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkAbout">
                                    <li class="w-100"><a class="dropdown-item @yield('prodamas')" href="{{ url('/prodamas') }}">Prodamas</a></li>
                                    <li class="w-100"><a class="dropdown-item @yield('bidang')" href="{{ url('/bidang') }}">Bidang</a></li>
                                    <li class="w-100"><a class="dropdown-item @yield('kampungkeren')" href="{{ url('/kampungkeren') }}">Kampung Keren</a></li>
                                    <li class="w-100"><a class="dropdown-item @yield('pokmas')" href="{{ url('/pokmas') }}">POKMAS</a></li>
                                    {{-- <li class="w-100"><a class="dropdown-item @yield('eko')" href="{{ url('/kubperasi') }}">Kube & Koperasi</a></li> --}}
                                    {{-- <li class="btn-group dropstart w-100">
                                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                          Kube & Koperasi
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="w-100"><a class="dropdown-item @yield('sosmed')" href="{{ url('/media') }}">Peminjam</a></li>
                                    <li class="w-100"><a class="dropdown-item @yield('sosmed')" href="{{ url('/media') }}">Pemberi Dana</a></li>
                                </ul>
                                </li> --}}
                                {{-- <li class="dropdown-submenu w-100">
                                    <a class="dropdown-item @yield('sosmed')" href="{{ url('/e-boost') }}">E-Boost <span class="caret fas fa-caret-right ms-3"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu w-100">
                                    <li class="w-100"><a class="dropdown-item @yield('sosmed')" href="{{ url('/umkm') }}">Pelaku Usaha <span class="caret fas fa-caret-right ms-3"></span></a>
                                        <ul class="dropdown-menu">
                                            <li class="w-100"><a class="dropdown-item @yield('sosmed')" href="{{ url('/umkm') }}">Wirausaha</a></li>
                                            <li class="w-100"><a class="dropdown-item @yield('sosmed')" href="{{ url('/umkm') }}">KUBE</a></li>
                                            <li class="w-100"><a class="dropdown-item @yield('sosmed')" href="{{ url('/umkm') }}">UMKM</a></li>
                                        </ul>
                                    </li>
                                    </li>
                                    <li class="dropdown-submenu w-100">
                                    <li class="w-100"><a class="dropdown-item @yield('sosmed')" href="{{ url('/media') }}">Akses Permodalan <span class="caret fas fa-caret-right ms-3"></span></a>
                                        <ul class="dropdown-menu">
                                            <li class="w-100"><a class="dropdown-item @yield('sosmed')" href="{{ url('/koperasirw') }}">Koperasi</a></li>
                                            <li class="w-100"><a class="dropdown-item @yield('sosmed')" href="{{ url('/kurnia') }}">Kurnia</a></li>
                                        </ul>
                                    </li>
                                    </li>
                                    <li class="dropdown-submenu w-100">
                                    <li class="w-100"><a class="dropdown-item @yield('sosmed')">Pemasaran<span class="caret fas fa-caret-right ms-3"></span></a>
                                        <ul class="dropdown-menu">
                                            <li class="w-100"><a class="dropdown-item @yield('sosmed')" href="{{ url('/tags?tags=pemasaran') }}">Artikel</a></li>
                                        </ul>
                                    </li>
                                    </li>
                                    <li class="dropdown-submenu w-100">
                                    <li class="w-100"><a class="dropdown-item @yield('sosmed')" href="{{ url('/media') }}">Publikasi <span class="caret fas fa-caret-right ms-3"></span></a>
                                        <ul class="dropdown-menu">
                                            <li class="w-100"><a class="dropdown-item @yield('sosmed')" href="{{ url('/umkm') }}">Informasi Pelatihan</a></li>
                                            <li class="w-100"><a class="dropdown-item @yield('sosmed')" href="{{ url('/umkm') }}">Testimoni</a></li>
                                        </ul>
                                    </li>
                                    </li>
                                </ul>
                                </li>
                                </ul> --}}
                            </div>
                            <div class="nav-item dropdown nav-list">
                                <a class="nav-link dropdown-toggle dropdown-toggle-split @yield('e-boost')" id="navbarDropdownMenuLinkAbout" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" data-bs-reference="parent">E-Boost </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuEboost">
                                    <li class="w-100"><a class="dropdown-item @yield('e-boost')" href="{{ url('/e-boost') }}">E-Boost</a></li>
                                    <li class="dropdown-submenu w-100">
                                        <a class="dropdown-item @yield('e-boost')">Pelaku Usaha <span class="caret fas fa-caret-right ms-3"></span></a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu w-100">
                                            <li class="w-100"><a class="dropdown-item @yield('e-boost')" href="{{ url('/wirausaha') }}">Wirausaha</a></li>
                                            <li class="w-100"><a class="dropdown-item @yield('e-boost')" href="{{ url('/umkm') }}">UMKM</a></li>
                                            <li class="w-100"><a class="dropdown-item @yield('e-boost')" href="{{ url('/kube') }}">KUBE</a></li>
                                    </li>
                                </ul>
                                </li>
                                <li class="dropdown-submenu w-100">
                                    <a class="dropdown-item @yield('e-boost')">Akses Permodalan <span class="caret fas fa-caret-right ms-3"></span></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu w-100">
                                        <li class="w-100"><a class="dropdown-item @yield('e-boost')" href="{{ url('/koperasirw') }}">Koperasi</a></li>
                                        <li class="w-100"><a class="dropdown-item @yield('e-boost')" href="{{ url('/kurnia') }}">Kurnia</a></li>
                                </li>
                                </ul>
                                </li>
                                <li class="dropdown-submenu w-100">
                                    <a class="dropdown-item @yield('e-boost')">Pemasaran<span class="caret fas fa-caret-right ms-3"></span></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu w-100">
                                        <li class="w-100"><a class="dropdown-item @yield('e-boost')" href="{{ url('/tags?tags=pemasaran') }}">Artikel</a></li>
                                </li>
                                </ul>
                                </li>
                                <li class=" dropdown-submenu w-100">
                                                <a class="dropdown-item @yield('e-boost')">Publikasi<span class="caret fas fa-caret-right ms-3"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-submenu w-100">
                                                        {{-- <li class="w-100"><a class="dropdown-item @yield('e-boost')" href="{{ url('/wirausaha') }}">Informasi Pelatihan
                                            </a></li> --}}
                                        <li class="w-100"><a class="dropdown-item @yield('e-boost')" href="{{ url('/testimoni') }}">Testimoni</a></li>
                                </li>
                                </ul>
                                </li>
                                </ul>
                            </div>
                            @foreach ($menus ?? '' as $menu)
                            <a href="{{ url($menu->link) }}" class="nav-link nav-list @yield('{{ $menu->judul }}')">{{ $menu->judul }}</a>
                            @endforeach
                            <div class="nav-list" id="scrollspy">
                                <a class="nav-link" href="#footer">Kontak</a>
                            </div>
                            {{-- <a class="nav-link nav-list @yield('cerita')" href="{{ url('/cerita') }}">Masyarakat Bercerita</a> --}}
                        </div>

                        {{-- Medsos --}}
                        <div class="navbar-text">
                            <div class="d-flex justify-content-evenly">
                                <div class="nav-item dropdown nav-list">
                                    <a class="nav-link" id="navbarDropdownMenuLinkAbout" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{ asset('img/ICON CARI.png') }}" style="width: 17px; height: 17px; margin-right: -1rem"></a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkAbout" style="border-radius: 23px;padding:0px;margin-left:-10rem;">
                                        <li class="" style="padding:5px">
                                            <div>
                                                <form action="search">
                                                    <div style="display:flex; align-items: center; vertical-align: middle;">
                                                        <div>
                                                            <input class="input-search" type="text" placeholder="Mau cari apa?" name="search" value="{{ request('search') }}" aria-label="Search">
                                                        </div>
                                                        <button class="btn-search" type="submit" style="color:white">
                                                            <i class="fas fa-arrow-right"></i>
                                                        </button>
                                                    </div>

                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- <a class="align-self-center" href="https://www.youtube.com/channel/UCX6KxXBUbivqWXTku0nnPbA"><i class="fab fa-youtube mx-2 link-light"></i></a>
                                <a class="align-self-center" href="https://www.instagram.com/prodamasplus/"><i class="fab fa-instagram mx-2 link-light"></i></a>
                                <a class="align-self-center" href="https://www.facebook.com/Prodamas-Plus-105191455380017/"><i class="fab fa-facebook mx-2 link-light"></i></a>
                                <a class="align-self-center" href="https://vt.tiktok.com/ZSejpETUx/"><i class="fab fa-tiktok mx-2 link-light"></i></a> -->
                                @auth
                                {{-- Button Admin --}}
                                <a class="align-self-center btn login-icon ms-3" href="/admin"><i class="fas fa-user-shield"></i> Admin</a>
                                {{-- Button Logout --}}
                                <a class="align-self-center btn login-icon ms-3" href="/signout"><i class="fas fa-sign-out-alt"></i> Log Out</a>
                                @endauth
                                @guest
                                {{-- Button trigger modal --}}
                                <button class="align-self-center btn login-icon ms-3" type="button" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="fas fa-sign-in-alt"></i> Sign In</button>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div style="min-height: 64vh">
        @yield('content')
    </div>

    <!-- Awal footer -->
    <!-- <footer style="background-image: url('{{ url('img/nav_bot.png') }}');background-repeat: no-repeat;background-attachment: local;background-size: cover;"> -->
    <footer>
        <div class="footer-top" id="footer" style="border-top: 9px solid #FF6600 ;">
            <div class=" container">
                <div class="row">
                    {{-- panggil total kunjungan di footer --}}
                    <div class="d-flex justify-content-end mt-2">
                        <div style="margin-top: 15px; border-radius: 15px; color: white; text-align:center; background-color: #F58634; padding:5px">
                            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                            <a style="font-size:15px">Kunjungan: {{ $totalviews ?? '' }}</a>
                            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        </div>
                    </div>
                    {{-- end panggil --}}
                    {{-- @section('views')
                    <div class="d-flex justify-content-end mt-2">
                        <div style="margin-top: 15px; border-radius: 15px; color: white; text-align:center; background-color: #F58634; padding:5px">
                            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                            <a style="font-size:15px">Kunjungan: {{$totalviews}}</a>
                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                </div>
            </div>
            @endsection --}}
            <div class="row">
                <div class=" col-md-1 col-lg-2 footer-logo" style="margin-top: 45px">
                    <a href=#><img class="logo-footer" src="{{ asset('img/PRIMARY LOGO WHITE 1.png ') }}" width="130" height="auto" alt="logo-footer" /></a>
                    <!-- <div style="margin-top: 12px">
                    <a href=#><img src="{{ asset('img/prodamas-text.png') }}" alt="logo-prodamas-text" width="110" height="27" class="d-inline-block" /></a>
                </div> -->
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 footer-contact" style="margin-top: 45px; margin-left: 0px; color: white; font-family: 'Poppins', sans-serif;">
                            <div class="foot-title">PEMERINTAH KOTA KEDIRI</div>
                            <div class="line"></div>
                            <p style="font-weight: 400; font-size: 12px">
                                Jalan Basuki Rahmat No.15, Kelurahan Pocananan, <br />
                                Kota kediri, Jawa Timur 64146
                            </p>
                            <p style="font-weight: 400; font-size: 12px"><i class="fas fa-phone foot-icon"></i> (0354) 682955</p>
                            <p style="font-weight: 400; font-size: 12px"><i class="fas fa-envelope foot-icon ph"></i> prodamas@kedirikota.go.id</p>
                        </div>
                        <div class="col-md-6 col-lg-6 footer-links" style="margin-top: 40px; color: white; font-family: 'Poppins', sans-serif;">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <p class="foot-title">
                                        NAVIGASI</p>
                                    <div class="line-nav"></div>
                                    <a class="footer-link" href="{{ url('/') }}">Beranda</a> <br />
                                    {{-- <a class="footer-link" href="{{ url('tuliscerita') }}">Tulis Cerita</a> <br /> --}}
                                    <!-- <a class="footer-link" href="{{ url('kritik') }}">Kritik & Saran</a> <br> -->
                                    {{-- <a class="footer-link" href="{{ url('grafik') }}">Prodamas Dalam Grafik</a> <br /> --}}
                                    <a class="footer-link" href="{{ url('peta') }}">Prodamas Dalam Peta</a> <br>
                                    <a class="footer-link" href="{{ url('banksampah') }}">Bank Sampah</a> <br>
                                    <a class="footer-link" href="{{ url('msib') }}">Tim Pengembang</a>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <p class="foot-title">
                                        TAUTAN EKSTERNAL</p>
                                    <div class="line-te"></div>
                                    <a class="footer-link" target="_blank" href="https://www.kedirikota.go.id/">Kota Kediri</a> <br>
                                    {{-- <a class="footer-link" href="https://play.google.com/store/apps/details?id=com.ebanksampah.kedirikota">E-Bank Sampah</a> <br> --}}
                                    <a class="footer-link" target="_blank" href="https://www.youtube.com/channel/UCX6KxXBUbivqWXTku0nnPbA">Harmoni TV</a><br>
                                    <a class="footer-link" target="_blank" href="https://progressio.kedirikota.go.id/auth/login">Progressio</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="line-te" style="margin-right:1rem"></div>
                        <a style="font-weight: 400; font-size: 12px" href="https://www.youtube.com/channel/UCpfY7_qJn3rupJvZQhb3zww"><i class="fab fa-youtube foot-icon"></i></a>
                        <a style="font-weight: 400; font-size: 12px" href="https://www.instagram.com/prodamasplus/"><i class="fab fa-instagram foot-icon"></i></a>
                        <a style="font-weight: 400; font-size: 12px" href="https://www.facebook.com/Prodamas-Plus-105191455380017/"><i class="fab fa-facebook foot-icon"></i></a>
                        <a style="font-weight: 400; font-size: 12px" href="https://vt.tiktok.com/ZSejpETUx/"><i class="fab fa-tiktok foot-icon"></i></a>
                    </div>
                    <div class="footer-copyright footer-link" style="color: white">&copy; 2022 Prodamas Plus</div>
                </div>
            </div>
        </div>

        <div class="footer-bottom" style="background: transparent;">
            <div class="container">
                <div class="row">
                    {{-- @section('views')
                            <div class="d-flex justify-content-end mt-2">
                                <div style="margin-top: 15px; border-radius: 15px; color: white; text-align:center; background-color: #F58634; padding:5px">
                                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                    <a style="font-size:15px">Kunjungan: {{$totalviews}}</a>
                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                </div>
            </div>
            @endsection --}}
        </div>

    </footer>
    <!-- Akhir footer -->

    <!-- jQuery -->
    <script src="{{ asset('/adminlte/plugins/jquery/jquery.min.js') }}"></script>

    <!--Script dropdown-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    {{-- Scrip Carousel --}}
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.multiple-items').slick({
                infinite: false,
                slidesToShow: 3,
                slidesToScroll: 2,
                adaptiveHeight: true,
                cssEase: 'ease',
                prevArrow: '<button type="button" class="carousel-icon-prev slick-prev bg-primary btn-primary"></button>',
                nextArrow: '<button type="button" class="carousel-icon-next slick-next bg-primary btn-primary"></button>',
                responsive: [{
                    
                    breakpoint: 992,
                    settings: {
                      slidesToShow: 2,
                      dots: true
                    }

                    }, {
                    
                    breakpoint: 576,
                    settings: {
                      slidesToShow: 1,
                      dots: true
                    }
                    
                }]
            });
        });
    </script>

    {{-- <script>
        $(function() {
            $('.modal').on('hide.bs.modal', function() {
                $audio = $(this).find('audio');
                try {
                    $audio[0].pause();
                } catch (error) {

                }
                $video = $(this).find('video');
                try {
                    $video[0].pause();
                } catch (error) {

                }
            });
        });
        $(function() {
            $('.modal').on('shown.bs.modal', function() {
                $media = $(this).find('.media');
                $img = $(this).find('.click');
                if ($media) {
                    $img.unbind().click(function() {
                        // $media[0].pause();
                        return $media[0].paused ? $media[0].play() : $media[0].pause();
                    });
                }
            });
        });
    </script> --}}
    <script>
        $('iframe[src*="https://www.youtube.com/embed/"]').addClass("youtube-iframe");

        $(".modal").on('hide.bs.modal', function() {
            $('.youtube-iframe').each(function(index) {
                $(this).attr('src', $(this).attr('src'));
                // return false;
            });

            try {
                $audio = $(this).find('audio');
                $audio[0].pause();
            } catch (error) {

            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    @yield('scripts')
    @yield('table')

    {{-- Modal Login --}}
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign In hanya untuk admin website Prodamas Plus Kota Kediri</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- <button class="btn w-100 btn-google my-2"><i class="fab fa-google"></i>
                        Google
                    </button>
                    <button class="btn btn-facebook w-100 my-2"><i class="fab fa-facebook-f"></i>
                        Facebook
                    </button>
                    <button class="btn btn-instagram w-100 my-2"><i class="fab fa-instagram"></i>
                        Instagram
                    </button>
                    <button class="btn btn-twitter w-100 my-2"><i class="fab fa-twitter"></i>
                        Twitter
                    </button>
                    <button class="btn btn-telp w-100 my-2"><i class="fas fa-phone-alt"></i>
                        No HP
                    </button> --}}
                    <a class="btn btn-admin w-100 my-2" href="{{ url('loginuser') }}"><i class="fas fa-user-shield"></i>
                        Admin
                    </a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>