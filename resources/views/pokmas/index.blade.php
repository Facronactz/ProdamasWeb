@extends('layouts.desain')
@section('pokmas', 'active')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <body>
        <div class="card">
            <!-- awal jumbotron -->
            <div class="container-fluid banner">
                <div class="container banner-content">
                    <h2><u>POKMAS</u></h2>
                    @foreach ($descriptions ?? '' as $description)
                        <h5><?= $description->desc_pokmas ?></h5>
                    @endforeach
                </div>
            </div>
            <!-- akhir jumbotrom -->
            @foreach ($pokmass as $pokmas)
                @if ($pokmas->id % 2 != 0)
                    <section class="tentang mt-5 ">
                        <div class="container">
                            <div class="row">

                                <div class="col-md-6 py-5">
                                    <img src="{{ asset('pokmasProd/' . $pokmas->foto) }}" class="img-fluid rounded-3">
                                </div>
                                <div class="col-md-6 py-5">
                                    <?= $pokmas->caption ?>
                                </div>

                            </div>
                        </div>
                    </section>
                @else
                    <section class="tentang mt-5 ">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 py-5">
                                    <?= $pokmas->caption ?>
                                </div>
                                <div class="col-md-6 py-5">
                                    <img src="{{ asset('pokmasProd/' . $pokmas->foto) }}" class="img-fluid rounded-3">
                                </div>
                            </div>
                        </div>
                    </section>
                @endif
            @endforeach
        </div>
        <!--end pengertian pokmas-->

        <!--Judul data pokmas-->
        <div>
            <h3 style='text-align: center;'><u>Data Pokmas</u></h3>
            <br>
        </div>


        <!--Grafik Pokmas-->
        <div class='tableauPlaceholder' id='viz1641401977071' style='position: relative;'>
            <object class='tableauViz' style='display:none;'>
                <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                <param name='embed_code_version' value='3' />
                <param name='site_root' value='' />
                <param name='name' value='ProfilPokmas&#47;Sheet3' />
                <param name='tabs' value='no' />
                <param name='toolbar' value='yes' />
                <param name='animate_transition' value='yes' />
                <param name='display_static_image' value='yes' />
                <param name='display_spinner' value='yes' />
                <param name='display_overlay' value='yes' />
                <param name='display_count' value='yes' />
                <param name='language' value='en-GB' />
                <param name='filter' value='publish=yes' />
            </object>
        </div>
        <script type='text/javascript'>
            var divElement = document.getElementById('viz1641401977071');
            var vizElement = divElement.getElementsByTagName('object')[0];
            vizElement.style.width = '100%';
            vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
            var scriptElement = document.createElement('script');
            scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
            vizElement.parentNode.insertBefore(scriptElement, vizElement);
        </script>
        <!--end grafik pokmas-->
        }

        <style>
            .banner {
                text-align: center;
                margin-top: 50px;
            }

            h2 h3 {
                font-family: "Inter", sans-serif;
            }

            p ol {
                font-family: "Montserrat", sans-serif;
            }

            .card {
                background-color: white;
                width: 100%;
                margin: auto;
                margin-top: 10px;
                border-radius: 5px;
            }

            .tableauPlaceholder {
                width: 100%;
                max-width: 1100px;
                margin: auto;
            }

        </style>

    </body>

    </html>
@endsection
