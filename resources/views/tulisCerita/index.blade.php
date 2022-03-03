@extends('layouts.desain')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>

  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Prodamas Plus</title>

    <!--icon-->
    <link href="img/logoprodamas.png" rel="icon" />

    <!--Goofle Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Montserrat&display=swap" rel="stylesheet" />

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- Template Main CSS File
    <LINK rel="stylesheet" type="text/css"
     href="media.css" title="Default Styles" media="screen">-->

    <!--CSS-->
    <link rel="stylesheet" href="css/tuliscerita.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>

</head>

<body>

    <!-- awal jumbotron -->
    <div class="container-fluid banner">
        <div class="container banner-content">
        </div>
    </div>
    <!-- akhir jumbotrom -->

    {{-- Form Tulis Cerita --}}
    <div class="container formBox">
        @if (session()->has('pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('pesan') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h2> Apa Ceritamu tentang <b> PRODAMAS </b>?</h2>
        <div class="formBox2">
            <form action="{{route('tuliscerita.store')}}" method="POST" enctype="multipart/form-data">
                <div class="row row-cols-1 row-cols-md-3 mb-2 g-4 centerItms">
                    <div class="card" style="
                    width: 40rem;
                    border: none;
                    margin-right:1em;
                    ">
                        <div class="col-auto formInput">
                            <label class="visually-hidden" for="autoSizingInputGroup">namaLengkap</label>
                            <div class="input-group">
                              <div class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg>
                              </div>
                              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                            </div>
                            @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-auto formInput">
                            <label class="visually-hidden" for="autoSizingInputGroup">noTelepon</label>
                            <div class="input-group">
                              <div class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                    </svg>
                                </div>
                              <input type="number" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="Nomor Telepon">
                            </div>
                            @error('nomor_telepon')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-auto formInput">
                            <label class="visually-hidden" for="autoSizingInputGroup">email</label>
                            <div class="input-group">
                              <div class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                                  </svg>
                              </div>
                              <input type="text" class="form-control" id="email" name="email" placeholder="E-Mail">
                            </div>
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-auto formInput">
                            <label class="visually-hidden" for="autoSizingInputGroup">judul</label>
                            <div class="input-group">
                              <div class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                                    <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                                    <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                                  </svg>
                              </div>
                              <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
                            </div>
                            @error('judul')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row formInput">
                            <div class="col  ">
                                <label for="formFileLg" class="form-label">Upload Thumbnail</label>
                                <input class="form-control form-control" id="thumbnail" name="thumbnail" type="file" />
                            </div>
                            <div class="col  ">
                                <label for="formFileLg" class="form-label">Upload Foto Cerita</label>
                                <input class="form-control form-control" id="foto" name="foto" type="file" />
                            </div>
                        </div>
                        @error('foto')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        @error('thumbnail')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        {{-- Teks area awal --}}
                        <div class="formInput">
                            <textarea name="isi" id="isi">
                                &lt;p&gt;Tulis ceritamu disini.&lt;/p&gt;
                            </textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#isi' ) )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
                             @error('isi')
                             <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- Teks area akhir --}}

                    </div>
                    <div class="card" style="
                    width: 25rem;
                    border: none;
                    margin-top:1em;
                    ">
                        <p> <i>Segala informasi dalam <font class="redText"> prodamas.com</font> diterbitkan dengan tujuan baik dan hanya untuk tujuan informasi secara umum.
                            Dengan mengirimkan tulisan ke <font class="redText"> prodamas.com</font>, penulis telah setuju bahwa tulisan dan foto yang tercantum dapat diedit
                             oleh tim <font class="redText"> prodamas.com</font>. Selain itu, penulis juga bersedia bahwa konten yang dibuat akan dipublikasikan di seluruh media sosial + Kota Kediri.
                        </i></p>
                        <button type="submit" class="btn btn-primary submitBtn" value="submit">Submit</button>
                        @csrf
                    </div>
                </div>
            </form>
        </div>
    </div>

    <style>
    .banner {
    height: 90vh;
    width: 100%;
    justify-content: center;
    align-items: center;
    background-image: url(../img/header-tulis-cerita.png);
    background-size: cover;
    text-align: left;
    text-shadow: 5px 5px 10px #4d148c;
    font-size: xx-large;
    color: white;
    font-weight: bold;
    padding-top: 15%;
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%;
    }
    </style>
    
  </body>
</html>
@endsection
