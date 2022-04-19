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
            <!-- Konten Prodamas -->
            <div class="col">
                @foreach($prodamass as $prodamas)

                <div class="content-prodamas">
                    @if ($prodamas->id%2 != 0)
                    <div class="mb-3 kartukiri">
                        <div class="row g-0 clearfix">
                            <div class=" col-md-4 mt-5">
                                <img src="{{ asset('prodamasProd/'. $prodamas->foto) }}" class="img-fluid rounded-start" alt="Gambar Sejarah Prodamas">
                            </div>
                            <div class="col-md-8  mt-4">
                                <div class="card-body isi">
                                    <h4 style="font-family: Inter, sans-serif; text-decoration-line: underline; text-decoration-style: double;" class="card-title">
                                        {{ $prodamas->judul }}
                                    </h4>
                                    <p class="card-text">
                                        <?= $prodamas->caption ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    @else
                    <div class="mb-3 kartukanan">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <div class="card-body isi">
                                    <h4 style="font-family: Inter, sans-serif; text-decoration-line: underline; text-decoration-style: double;" class="card-title">{{ $prodamas->judul }}</h4>
                                    <p class="card-text">
                                        <?= $prodamas->caption ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 mt-5">
                                <img src="{{ asset('prodamasProd/'. $prodamas->foto) }}" class="img-fluid rounded-start" alt="Gambar">
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                @endforeach
                <!-- End Konten Prodamas -->

                <!-- Transformasi Prodamas -->
                @foreach ($transforms as $transform)
                <div class="mb-3">
                    <div class="row g-0 clearfix">
                        <div class="mt-4">
                            <div class="card-body isi">
                                <h4 style="font-family: Inter, sans-serif; text-decoration-line: underline; text-decoration-style: double;" class="card-title">
                                    {{ $transform->judul }}
                                </h4>
                                <p class="card-text">
                                    <?= $transform->caption ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <img src="{{ asset('prodamasProd/'. $transform->foto) }}" class="rounded" style="width: 100%;">
                </div>
                @endforeach
                <!-- End Transformasi Prodamas -->

                <!-- Regulasi Prodamas -->
                <h4 style="font-family: Inter, sans-serif; text-decoration-line: underline; text-decoration-style: double; text-align:center; margin-top: 7%" class="card-title">
                    Regulasi Prodamas
                </h4>
                <table class="table mt-4" id="tableRegulasi" style="width:100%;">
                    <thead>
                        <tr class="text-center" style="height: 4rem;">
                            <th class="text-left">Tanggal</th>
                            <th class="text-align:center">Judul</th>
                            <th class="text-align:center">Sumber</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($regulasis as $regulasi)
                        <tr style="padding: 10px;">
                            <td style="width:210px;padding: 10px;">{{$regulasi->created_at}}</td>
                            <td style="padding:10px;">
                                <a href="{{ asset('regulasiProd/'. $regulasi->file) }}">
                                    <?= $regulasi->judul ?>
                                </a>
                            </td>
                            <td style="text-align:center;padding: 10px">{{$regulasi->sumber}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- End Regulasi Prodamas -->
            </div>
        </div>
    </div>
    @endsection
    @section('table')
    <script>
        $(document).ready(function() {
            $('#tableRegulasi').DataTable(); //sesuikan id tabel yg dibat
        });
    </script>
    @endsection

</html>