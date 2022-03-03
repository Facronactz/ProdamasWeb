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

            <title>Prodamas Plus | Kritik & Saran</title>

            <!--Goofle Font-->
            <link rel="preconnect" href="https://fonts.googleapis.com" />
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Montserrat&display=swap" rel="stylesheet" />

            <!--font awesome-->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

            <!--CSS-->
            <link rel="stylesheet" href="css/kritik.css">

    </head>

    <body>
        
        <section style="margin-top: 80px;">
            <center>
            <nav class=section>
                <div class= center>
                    <h5 style="text-align: left">Formulir Kritik & Saran</h5>   
                </div>
            </nav>
        </center>
        </section>
        


        <!--kritik form-->
        <center>
        <div class="card-body">
                        
            @if(Session::has('success'))
            <div class="alert alert-success" style="
                position:absolute; 
                top: 165px; 
                margin: auto
                width: 100%;
                height: 60px;
                border-radius:7px
            ">
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
            </div>
        
            @endif
            <form method="POST" action="{{ route('contact-form.store') }}">
                  
                {{ csrf_field() }}
                <div class="row">
                    <div >
                        <div class="form-group" style="margin-top: 30px">
                            <strong>Nama</strong>
                            <input type="text" name="name" class="form-control" placeholder="Ketikkan Nama Lengkap Anda" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div >
                        <div >
                            <div class="form-group">
                                <strong>Nomor HP/Telepon</strong>
                                <input type="text" name="phone" class="form-control" placeholder="Ketikkan No Telepon Anda" value="{{ old('phone') }}">
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div >
                        <div class="form-group">
                            <strong>Email</strong>
                            <input type="text" name="email" class="form-control" placeholder="Ketikkan Email Anda" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Kritik & Saran</strong>
                            <textarea name="message" rows="3" class="form-control" placeholder="Tuliskan kritik dan saran Anda terkait Prodamas">{{ old('message') }}</textarea>
                            @if ($errors->has('message'))
                                <span class="text-danger">{{ $errors->first('message') }}</span>
                            @endif
                        </div>  
                    </div>
                </div>
                <br>
                <div class="form-group text-left">
                    <button class="btn btn-success btn-submit">Kirim</button>
                </div>
            </form>
        </div>
    </center>
    
        <!--end kritik form-->
       
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


   
