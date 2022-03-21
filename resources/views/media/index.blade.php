@extends('layouts.desain')
@section('media','active')

<form class="d-flex">
    <input class="form-control me-2" type="search" style="font-family: 'Font Awesome 5 Free'; font-weight: 600; border-radius: 30px; height: 30px" placeholder=" &#xf002;" aria-label="Search" />
</form>

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
        <link rel="stylesheet" href="css/media.css">

    </head>

<body>

    <!-- awal jumbotron -->
        <!-- awal jumbotron -->
        <div class="banner">
            <video id="background-video" autoplay loop muted poster="kota.png">
              <source src="img/MEDSOS.mp4" type="video/mp4" />
            </video>
          </div>
        <!-- akhir jumbotrom -->
    <!-- akhir jumbotrom -->


    <!-- Awal embed IG -->
    <div class="feedig">

        <img src="img/instagram-icon.png" alt="instagram" width="40" height="40" class="d-inline-block" />
        <a class="usernameig" href="https://www.instagram.com/prodamasplus/">@prodamasplus</a>

        <!-- Tampilan embed Post ig -->
         <script src="https://apps.elfsight.com/p/platform.js" defer></script>
         <div class="elfsight-app-b536458b-3760-4283-b033-8973fa8cdf62"></div>

    </div>
    <!-- Akhir embed IG -->

    <!-- Awal embed tiktok-->
    <div class="feedtiktok">

        <img src="img/tiktok-icon.png" alt="tiktok" width="40" height="40" class="d-inline-block" />
        <a class="usernamett" href="https://vt.tiktok.com/ZSejpETUx/">@prodamasplus</a>

        <!-- post tiktok -->
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-15ebf52f-2c7c-4118-a19b-d937f9ed6c5f"></div>
    </div>
    <!-- Akhir embed tiktok -->

</body>

</html>
@endsection
