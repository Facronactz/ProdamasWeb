@extends('layouts.desain')
@section('main-tentang', 'active')
@section('prodamas', 'active')

@section('title', 'Tentang Prodamas')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/tentang.css') }}">
    <style>
        .prodamas-header {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
            object-position: center;
        }

    </style>
@endsection

@section('content')
    <!-- awal jumbotron -->
    <div class="container-fluid p-0">
        <img class="prodamas-header" src="{{ asset('img-tentang/header-tentang-prodamas.png') }}" alt="" srcset="">
    </div>
    <!-- akhir jumbotrom -->


    <div class="container">
        <div class="row justify-content-between mt-5">
            <!-- Konten Prodamas -->
            <div class="col">
                @foreach ($prodamass as $prodamas)
                    <div class="content-prodamas">
                        @if ($prodamas->id % 2 != 0)
                            <div class="mb-3 kartukiri">
                                <div class="row g-0 clearfix">
                                    <div class=" col-md-4 mt-5">
                                        <img src="{{ asset('prodamasProd/' . $prodamas->foto) }}" class="img-fluid rounded-start" alt="Gambar Sejarah Prodamas">
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
                                        <img src="{{ asset('prodamasProd/' . $prodamas->foto) }}" class="img-fluid rounded-start" alt="Gambar">
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
                        <img src="{{ asset('prodamasProd/' . $transform->foto) }}" class="rounded" style="width: 100%;">
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
                                <td style="width:210px;padding: 10px;">{{ $regulasi->created_at }}</td>
                                <td style="padding:10px;">
                                    <a href="{{ asset('regulasiProd/' . $regulasi->file) }}">
                                        <?= $regulasi->judul ?>
                                    </a>
                                </td>
                                <td style="text-align:center;padding: 10px">{{ $regulasi->sumber }}</td>
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
