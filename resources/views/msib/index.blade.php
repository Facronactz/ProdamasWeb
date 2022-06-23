<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <style></style>
</head>

<body>
    <div class="container-xl overflow-hidden">
        <div class="row text-center">
            <h1 class="display-3">Tim Magang Merdeka Batch 2<br> Pemerintahan Kota Kediri</h1>
            @foreach ($divisions as $divisi)
                <h1 class="mt-3">{{ $divisi->nama }}</h1>
                <small class="text-muted">{{ $divisi->slogan }}</small>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 gy-3 gx-0 px-2 px-md-0 mb-4 mx-auto">
                    @foreach ($msib as $item)
                        @if ($item->divisi == $divisi->kode)
                            @if ($item->id % 10 == 1)
                                <div class="col col-lg col-md-12">
                                <img class="img-fluid" style="border-radius: 50%; width: 250px; height: 250px; object-fit: cover" src="{{ $item->foto }}" alt="" srcset="">
                                <h3>{{ $item->nama }}</h3>
                                <span>{{ $item->domisili }}</span><br>
                                <span>{{ $item->prodi }}</span><br>
                                <span>{{ $item->univ }}</span><br>
                                <a href="{{ $item->ig }}" class="text-black"><i class="fab fa-instagram"></i></a>
                                <a href="{{ $item->linkedin }}" class="text-black"><i class="fab fa-linkedin-in"></i></a>
                                </div>

                            @else
                                <div class="col">
                                <img class="img-fluid" style="border-radius: 50%; width: 250px; height: 250px; object-fit: cover" src="{{ $item->foto }}" alt="" srcset="">
                                <h3>{{ $item->nama }}</h3>
                                <span>{{ $item->domisili }}</span><br>
                                <span>{{ $item->prodi }}</span><br>
                                <span>{{ $item->univ }}</span><br>
                                <a href="{{ $item->ig }}" class="text-black"><i class="fab fa-instagram"></i></a>
                                <a href="{{ $item->linkedin }}" class="text-black"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            @endif
                        @endif
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>

    <!--Script-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
