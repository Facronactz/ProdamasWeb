<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <style>
        body {
            background-image: url("{{asset('img/bg_progressio.png')}}");
            background-repeat: no-repeat;
            background-size: fill;
            margin: 0;
            height: 100%;
            overflow: hidden;
            cursor: default;
        }
    </style>
    <style>
        /*------------------------------------
- COLOR google
------------------------------------*/
        .bg-google {
            background-color: #cd201f !important;
        }

        a.bg-google:hover,
        a.bg-google:focus,
        button.bg-google:hover,
        button.bg-google:focus {
            background-color: #a01918 !important;
        }

        .border-google {
            border-color: #cd201f !important;
        }

        .btn-google {
            color: #fff;
            background-color: #cd201f;
            border-color: #cd201f;
        }

        .btn-google:hover {
            color: #fff;
            background-color: #ad1b1a;
            border-color: #a01918;
        }

        .btn-google:focus,
        .btn-google.focus {
            box-shadow: 0 0 0 0.2rem rgba(205, 32, 31, 0.5);
        }

        .btn-google.disabled,
        .btn-google:disabled {
            color: #fff;
            background-color: #cd201f;
            border-color: #cd201f;
        }

        .btn-google:not(:disabled):not(.disabled):active,
        .btn-google:not(:disabled):not(.disabled).active,
        .show>.btn-google.dropdown-toggle {
            color: #fff;
            background-color: #a01918;
            border-color: #931716;
        }

        .btn-google:not(:disabled):not(.disabled):active:focus,
        .btn-google:not(:disabled):not(.disabled).active:focus,
        .show>.btn-google.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(205, 32, 31, 0.5);
        }

        .btn-outline-google {
            color: #cd201f;
            background-color: transparent;
            border-color: #cd201f;
        }

        .btn-outline-google:hover {
            color: #fff;
            background-color: #cd201f;
            border-color: #cd201f;
        }

        .btn-outline-google:focus,
        .btn-outline-google.focus {
            box-shadow: 0 0 0 0.2rem rgba(205, 32, 31, 0.5);
        }

        .btn-outline-google.disabled,
        .btn-outline-google:disabled {
            color: #cd201f;
            background-color: transparent;
        }

        .btn-outline-google:not(:disabled):not(.disabled):active,
        .btn-outline-google:not(:disabled):not(.disabled).active,
        .show>.btn-outline-google.dropdown-toggle {
            color: #fff;
            background-color: #cd201f;
            border-color: #cd201f;
        }

        .btn-outline-google:not(:disabled):not(.disabled):active:focus,
        .btn-outline-google:not(:disabled):not(.disabled).active:focus,
        .show>.btn-outline-google.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(205, 32, 31, 0.5);
        }

        .text-google {
            color: #cd201f !important;
        }

        a.text-google:hover,
        a.text-google:focus {
            color: #a01918 !important;
        }
    </style>

    <style>
        .underline {
            background-image: linear-gradient(120deg, #a338e0 0%, #e39bf5 100%);
            background-repeat: no-repeat;
            background-size: 100% 0.2em;
            background-position: 0 88%;
            transition: background-size 0.25s ease-in;
        }

        .underline:hover {
            /* color: white; */
            background-size: 100% 88%;
        }
    </style>
</head>

<body>
    <header class="py-3 px-3 mb-4 border-bottom" style="background-color: #4d148c;">
        <div class="d-flex align-items-center justify-content-between text-light text-decoration-none">
            <a href="https://prodamas.kedirikota.go.id/"><img class=" my-auto"
                    src="{{asset('img/wesite logo 1.png')}}" style="width: 200px" alt=""
                    srcset=""></a>
            <h1><strong> Progressio</strong></h1>
        </div>
    </header>

    <section class="d-flex justify-content-center align-items-center align-content-center w-100 flex-column"
        style="height: calc(90vh - 100px)">
        <div class="p-2 mb-4 rounded-3 mx-2" style="background-color: #fff1ffb6; max-width: 1000px;">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">Selamat Datang di <span class="underline px-1">Progressio</span></h1>
                <!-- <hr> -->
                <div class="row align-items-center">
                    <p class="col-md-9 fs-4">Progressio adalah database dan pelaporan dari perkembangan Prodamas Plus
                        Pemerintah Kota Kediri. Anda dapat melihat perkembangan dari 0-100% yang menyakup seluruh bidang Prodamas Plus dari tahun 2017 sampai 2021</p>
                    <div class="col-md-3 d-flex">
                        <img src="https://via.placeholder.com/200x200?text=Logo+Prodamas" alt="" srcset=""
                            class="mx-auto">
                    </div>
                </div>
                <!-- <button class="btn btn-primary btn-lg" type="button"></button> -->
                <a class="btn btn-google my-2 btn-lg" href="https://progressio.kedirikota.go.id/auth/login_google"><i class="fab fa-google"></i>
                    Masuk / Log in
                </a>
            </div>
        </div>
    </section>

    <!--Script-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>