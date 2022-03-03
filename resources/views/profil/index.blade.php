<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Prodamas Plus</title>
    
    <!--icon-->
    <link href="img/icon.png" rel="icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    
    <!--Goofle Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Montserrat&display=swap" rel="stylesheet" />
    
    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    
    <!--CSS-->
    <link rel="stylesheet" href="css/desain.css">
    
    </head>

    <body>
        <!--navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4d148c">
            <div class="container">
            <img src="img/logoprodamas.png" alt="" width="40" height="40" class="d-inline-block align-text-top" />
            <a class="navbar-brand" style="padding-left: 5px; font-family: Inter, sans-serif">PRODAMAS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto" style="padding-right: 20px; font-weight: lighter; font-size: 13px; font-family: Inter, sans-serif">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/') }}"><u>Beranda</u></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('bidang') }}">Bidang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('bincang') }}">Bincang Prodamas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('informasi') }}">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('media') }}">Media</a>
                    </li>
                    
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" style="font-family: 'Font Awesome 5 Free'; font-weight: 600; border-radius: 30px; height: 30px" placeholder=" &#xf002;" aria-label="Search" />
                </form>

                <!--dropdown-->
                <div class="dropdown">
                    <button class="btn" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user" style="font-size:15px; font-weight: lighter; color: white;"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <li><button class="dropdown-item"><a href="{{ url('profil') }}" style="text-decoration: none; color: black;">Edit Profil</a></button></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><button class="dropdown-item"><a href="{{ url('logout') }}" style="text-decoration: none; color: black;">Logout</a></button></li>
                    </ul>
                </div>
                <!--div dropdown-->
            </div>
            </div>
        </nav>
        <!--end navbar-->

        <div class="row" style="margin-top: 30px; margin-left: 50px; margin-right: 50px; margin-buttom: 30px;">
            <form action="#" method="POST">
            {{csrf_field()}}
                    
            <!--Nama-->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input name="nama_user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                    placeholder="Nama Lengkap" required>
                </div>

            <!--No telp-->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No Telp</label>
                    <input name="No_telp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                    placeholder="No telp" required>
                </div>

            <!--Email-->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">E-mail</label>
                    <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                    placeholder="Email" required>
                </div>

            <!--Username-->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Username"  required>
                </div>

            <!--Password-->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Password</label>
                    <input name="password" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Password"  required>
                </div>

            <!--button-->    
                <button type="submit" class="btn btn-warning">Simpan</button>
            </form>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </body>
</html>