@extends('layouts.desain')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />

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
            <link rel="stylesheet" href="css/bincang.css">

    </head>

    <body>
        <!--JUMBOTRON-->
        <div class="container-fluid banner">
            <div class="container banner-content">
                <h1>Bincang Prodamas</h1>
            </div>
        </div>
        <!-- END JUMBOTRON -->

        <!-- Content section 1-->
        <section id="sectionSatu">
            <center>
                <div class="col-sm-6" style="background-color:rgb(185, 130, 209); border-radius:10px; margin-top:100px;">
                    <div class="child" style="padding-top:2px;padding-bottom:5px;">
                        <h2 style="margin-top:30px;">Masyarakat Berbincang</h2>
                        <br>
                        <div class="form-group row button-pesan">
                            <!-- popup tulis cerita -->
                            <div class="col-md-6">
                                <button type="button" class="cerita"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Tulis Cerita
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCerita" tabindex="-1" aria-labelledby="exampleModalLabelCerita" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabelCerita">Tulis Cerita</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="#"  method="post">
                                                    <div class="wrap-input200">
                                                        <p id="p-email">Nama</p>
                                                        <input type="nama" id="email" name="email" class="form-control" placeholder="Masukkan Nama Lengkap" required />
                                                        
                                                    </div>
                                                    <div class="wrap-input200">
                                                            <p id="p-email">No.Telp</p>
                                                            <input type="no" id="email" name="email" class="form-control" placeholder="Masukkan No.Telp" required />        
                                                    </div>
                                                    <div class="wrap-input200">
                                                        <p id="p-email">E-mail</p>
                                                        <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan E-mail" required />
                                                    </div>
                                                    <div class="wrap-input100">
                                                        <p id="p-email">Kritik & Saran</p>
                                                        <textarea id="message" name="message" class="form-control" rows="6" placeholder="Tuliskan kritik atau saran" required></textarea>
                                                    </div>
                                                    
                                                </form>
                                            </div>
                                            <!--div modal body-->

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Kirim</button>
                                            </div>
                                            <!--div modal footer-->
                                        </div>
                                        <!--modal content-->
                                    </div>
                                    <!--modal dialog-->
                                </div>
                            </div>

                            
                            <!-- popup kritik -->
                            <div class="col-md-6">
                                <button type="button" class="kritik"  data-bs-toggle="modal" data-bs-target="#exampleModalKritik">
                                Kritik & Saran
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalKritik" tabindex="-1" aria-labelledby="exampleModalLabelKritik" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabelKritik">Kritik & Saran</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ url('bincang') }}" method="post">
                                                    <div class="wrap-input200">
                                                        <p id="p-email">Nama</p>
                                                        <input type="text" id="nama" name="email" class="form-control" placeholder="Masukkan Nama Lengkap" required/>
                                                        
                                                    </div>
                                                    <div class="wrap-input200">
                                                            <p id="p-email">No.Telp</p>
                                                            <input type="text" id="no" name="telp" class="form-control" placeholder="Masukkan No.Telp" required />
                                                            
                                                        </div>
                                                    <div class="wrap-input200">
                                                        <p id="p-email">E-mail</p>
                                                        <input type="text" id="email" name="email" class="form-control" placeholder="Masukkan E-mail" required />
                                                            
                                                    </div>
                                                    <div class="wrap-input100">
                                                        <p id="p-email">Kritik & Saran</p>
                                                        <textarea id="message" name="message" class="form-control" rows="6" placeholder="Tuliskan kritik atau saran" required></textarea>
                                                    </div>
                                                    
                                                </form>
                                            </div>
                                            <!--div modal body-->

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Kirim</button>
                                            </div>
                                            <!--div modal footer-->
                                        </div>
                                        <!--modal content-->
                                    </div>
                                    <!--modal dialog-->
                                </div>
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
            </center>
        </section>
        <!-- Akhir content section 1-->

        <!-- START ARTICLE -->
        <section id="gallery">
            <div class="container" style="padding-top:150px; padding-bottom:70px;">
                <h2 style="float:left;">Artikel</h2>
                <a href="#" class="btn btn-secondary btn-md" style="float:right;">Urutkan <img src="img/filter.png" style="width:30px; height:30px;"></a>
            </div>
            <div class="card-group" style="padding-bottom:150px; padding-left: 78px; padding-right: 65px; ">
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="img/artikel1.jpeg" alt="" class="card-img-top" />
                        <div class="card-body">
                            <a href="article"><h4 class="card-title" style="text-decoration: none">
                                The Movie Hidden Figures Through the Lens of Feminist
                                Criticism
                            </h4></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="img/article3.png" alt="" class="card-img-top" />
                        <div class="card-body">
                            <a href="article"><h4 class="card-title" style="text-decoration: none">
                                The Movie Hidden Figures Through the Lens of Feminist
                                Criticism
                            </h4></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="img/artikel1.jpeg" alt="" class="card-img-top" />
                        <div class="card-body">
                        <a href="article"><h4 class="card-title" style="text-decoration: none">
                                The Movie Hidden Figures Through the Lens of Feminist
                                Criticism
                            </h4></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="img/artikel1.jpeg" alt="" class="card-img-top" />
                        <div class="card-body">
                        <a href="article"><h4 class="card-title" style="text-decoration: none">
                                The Movie Hidden Figures Through the Lens of Feminist
                                Criticism
                            </h4></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="img/article3.png" alt="" class="card-img-top" />
                        <div class="card-body">
                        <a href="article"><h4 class="card-title" style="text-decoration: none">
                                The Movie Hidden Figures Through the Lens of Feminist
                                Criticism
                            </h4></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="img/artikel1.jpeg" alt="" class="card-img-top" />
                        <div class="card-body">
                        <a href="article"><h4 class="card-title" style="text-decoration: none">
                                The Movie Hidden Figures Through the Lens of Feminist
                                Criticism
                            </h4></a>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </section>
        <!-- END ARTICLE -->


        <!-- link js-->
        <script src="script.js"></script>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </body>
    <html>
@endsection


   