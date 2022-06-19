@extends('layouts.desain')
@section('data', 'active')
@section('peta', 'active')

@section('title', 'Prodamas Dalam Peta')

@section('head')
    <link rel="stylesheet" href="css/peta.css">
@endsection

@section('content')

    <div class="container-md my-3">
        <select id="selector" class="form-select" aria-label="Geomap selector">
            <option value="viz1655361597858" selected>Peta Kota Kediri berdasarkan Kecamatan</option>
            <option value="viz1655367819237">Ruang Terbuka Hijau (RTH) tahun 2022 dalam Peta</option>
            <option value="viz1655369223584">Kelompok Usaha Bersama (KUBE) dalam Peta tahun 2022</option>
            <option value="viz1655369578626">Koperasi RW Penerima Dana Hibah Tahun 2021</option>
            <option value="viz1655369620324">Kampung Keren tahun 2022 dalam Peta</option>
            <option value="viz1655369645991">SPOT EMAS tahun 2021</option>
        </select>
    </div>

    {{-- // Geomap Polos --}}
    <div class='tableauPlaceholder mb-5' id='viz1655361597858' style='position: relative; padding:0 50px;'>
        <noscript>
            <a href='#'>
                <img alt='Dashboard 1 ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ge&#47;Geomap_Kediri_Polos&#47;Dashboard1&#47;1_rss.png' style='border: none' />
            </a>
        </noscript>
        <object class='tableauViz' style='display:none;'>
            <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
            <param name='embed_code_version' value='3' />
            <param name='site_root' value='' />
            <param name='name' value='Geomap_Kediri_Polos&#47;Dashboard1' />
            <param name='tabs' value='no' />
            <param name='toolbar' value='yes' />
            <param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ge&#47;Geomap_Kediri_Polos&#47;Dashboard1&#47;1.png' />
            <param name='animate_transition' value='yes' />
            <param name='display_static_image' value='yes' />
            <param name='display_spinner' value='yes' />
            <param name='display_overlay' value='yes' />
            <param name='display_count' value='yes' />
            <param name='language' value='en-US' />
        </object>
    </div>

    <script type='text/javascript'>
        var divElement = document.getElementById('viz1655361597858');
        var vizElement = divElement.getElementsByTagName('object')[0];
        if (divElement.offsetWidth > 800) {
            vizElement.style.width = '100%';
            vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
        } else if (divElement.offsetWidth > 500) {
            vizElement.style.width = '100%';
            vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
        } else {
            vizElement.style.width = '100%';
            vizElement.style.height = '727px';
        }
        var scriptElement = document.createElement('script');
        scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
        vizElement.parentNode.insertBefore(scriptElement, vizElement);
    </script>

    {{-- Geomap RTH --}}
    <div class='tableauPlaceholder mb-5' id='viz1655367819237' style='position: relative; padding:0 50px;'>
        <noscript>
            <a href='#'>
                <img alt='Dashboard 1 ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;NZ&#47;NZS65W7CD&#47;1_rss.png' style='border: none' />
            </a>
        </noscript>
        <object class='tableauViz' style='display:none;'>
            <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
            <param name='embed_code_version' value='3' />
            <param name='path' value='shared&#47;NZS65W7CD' />
            <param name='toolbar' value='yes' />
            <param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;NZ&#47;NZS65W7CD&#47;1.png' />
            <param name='animate_transition' value='yes' />
            <param name='display_static_image' value='yes' />
            <param name='display_spinner' value='yes' />
            <param name='display_overlay' value='yes' />
            <param name='display_count' value='yes' />
            <param name='language' value='en-US' />
        </object>
    </div>
    <script type='text/javascript'>
        var divElement = document.getElementById('viz1655367819237');
        var vizElement = divElement.getElementsByTagName('object')[0];
        if (divElement.offsetWidth > 800) {
            vizElement.style.width = '100%';
            vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
        } else if (divElement.offsetWidth > 500) {
            vizElement.style.width = '100%';
            vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
        } else {
            vizElement.style.width = '100%';
            vizElement.style.height = '727px';
        }
        var scriptElement = document.createElement('script');
        scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
        vizElement.parentNode.insertBefore(scriptElement, vizElement);
    </script>

    {{-- Geomap KUBE --}}
    <div class='tableauPlaceholder mb-5' id='viz1655369223584' style='position: relative; padding:0 50px;'>
        <noscript>
            <a href='#'>
                <img alt='Dashboard 1 ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ge&#47;Geomap_KUBE&#47;Dashboard1&#47;1_rss.png' style='border: none' />
            </a>
        </noscript>
        <object class='tableauViz' style='display:none;'>
            <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
            <param name='embed_code_version' value='3' />
            <param name='site_root' value='' />
            <param name='name' value='Geomap_KUBE&#47;Dashboard1' />
            <param name='tabs' value='no' />
            <param name='toolbar' value='yes' />
            <param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ge&#47;Geomap_KUBE&#47;Dashboard1&#47;1.png' />
            <param name='animate_transition' value='yes' />
            <param name='display_static_image' value='yes' />
            <param name='display_spinner' value='yes' />
            <param name='display_overlay' value='yes' />
            <param name='display_count' value='yes' />
            <param name='language' value='en-US' />
        </object>
    </div>

    <script type='text/javascript'>
        var divElement = document.getElementById('viz1655369223584');
        var vizElement = divElement.getElementsByTagName('object')[0];
        if (divElement.offsetWidth > 800) {
            vizElement.style.width = '100%';
            vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
        } else if (divElement.offsetWidth > 500) {
            vizElement.style.width = '100%';
            vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
        } else {
            vizElement.style.width = '100%';
            vizElement.style.height = '727px';
        }
        var scriptElement = document.createElement('script');
        scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
        vizElement.parentNode.insertBefore(scriptElement, vizElement);
    </script>

    {{-- Geomap Koperasi RW --}}
    <div class='tableauPlaceholder mb-5' id='viz1655369578626' style='position: relative; padding:0 50px;'>
        <noscript>
            <a href='#'>
                <img alt='Dashboard 1 ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ge&#47;Geomap_Koperasi_RW&#47;Dashboard1&#47;1_rss.png' style='border: none' />
            </a>
        </noscript>
        <object class='tableauViz' style='display:none;'>
            <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
            <param name='embed_code_version' value='3' />
            <param name='site_root' value='' />
            <param name='name' value='Geomap_Koperasi_RW&#47;Dashboard1' />
            <param name='tabs' value='no' />
            <param name='toolbar' value='yes' />
            <param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ge&#47;Geomap_Koperasi_RW&#47;Dashboard1&#47;1.png' />
            <param name='animate_transition' value='yes' />
            <param name='display_static_image' value='yes' />
            <param name='display_spinner' value='yes' />
            <param name='display_overlay' value='yes' />
            <param name='display_count' value='yes' />
            <param name='language' value='en-US' />
        </object>
    </div>

    <script type='text/javascript'>
        var divElement = document.getElementById('viz1655369578626');
        var vizElement = divElement.getElementsByTagName('object')[0];
        if (divElement.offsetWidth > 800) {
            vizElement.style.width = '100%';
            vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
        } else if (divElement.offsetWidth > 500) {
            vizElement.style.width = '100%';
            vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
        } else {
            vizElement.style.width = '100%';
            vizElement.style.height = '727px';
        }
        var scriptElement = document.createElement('script');
        scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
        vizElement.parentNode.insertBefore(scriptElement, vizElement);
    </script>

    {{-- Geomap Kampung Keren --}}
    <div class='tableauPlaceholder mb-5' id='viz1655369620324' style='position: relative; padding:0 50px;'>
        <noscript>
            <a href='#'>
                <img alt='Dashboard 1 ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ge&#47;Geomap_Kampung_Keren&#47;Dashboard1&#47;1_rss.png' style='border: none' />
            </a>
        </noscript>
        <object class='tableauViz' style='display:none;'>
            <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
            <param name='embed_code_version' value='3' />
            <param name='site_root' value='' />
            <param name='name' value='Geomap_Kampung_Keren&#47;Dashboard1' />
            <param name='tabs' value='no' />
            <param name='toolbar' value='yes' />
            <param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ge&#47;Geomap_Kampung_Keren&#47;Dashboard1&#47;1.png' />
            <param name='animate_transition' value='yes' />
            <param name='display_static_image' value='yes' />
            <param name='display_spinner' value='yes' />
            <param name='display_overlay' value='yes' />
            <param name='display_count' value='yes' />
            <param name='language' value='en-US' />
        </object>
    </div>

    <script type='text/javascript'>
        var divElement = document.getElementById('viz1655369620324');
        var vizElement = divElement.getElementsByTagName('object')[0];
        if (divElement.offsetWidth > 800) {
            vizElement.style.width = '100%';
            vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
        } else if (divElement.offsetWidth > 500) {
            vizElement.style.width = '100%';
            vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
        } else {
            vizElement.style.width = '100%';
            vizElement.style.height = '727px';
        }
        var scriptElement = document.createElement('script');
        scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
        vizElement.parentNode.insertBefore(scriptElement, vizElement);
    </script>

    {{-- Geomap EMAS --}}
    <div class='tableauPlaceholder mb-5' id='viz1655369645991' style='position: relative; padding:0 50px;'>
        <noscript><a href='#'>
                <img alt='SPOT EMAS tahun 2021 ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ge&#47;Geomap_EMAS&#47;Sheet1&#47;1_rss.png' style='border: none' />
            </a>
        </noscript>
        <object class='tableauViz' style='display:none;'>
            <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
            <param name='embed_code_version' value='3' />
            <param name='site_root' value='' />
            <param name='name' value='Geomap_EMAS&#47;Sheet1' />
            <param name='tabs' value='no' />
            <param name='toolbar' value='yes' />
            <param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ge&#47;Geomap_EMAS&#47;Sheet1&#47;1.png' />
            <param name='animate_transition' value='yes' />
            <param name='display_static_image' value='yes' />
            <param name='display_spinner' value='yes' />
            <param name='display_overlay' value='yes' />
            <param name='display_count' value='yes' />
            <param name='language' value='en-US' />
        </object>
    </div>

    <script type='text/javascript'>
        var divElement = document.getElementById('viz1655369645991');
        var vizElement = divElement.getElementsByTagName('object')[0];
        vizElement.style.width = '100%';
        vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
        var scriptElement = document.createElement('script');
        scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
        vizElement.parentNode.insertBefore(scriptElement, vizElement);
    </script>
@endsection

@section('scripts')

    <script>
        $("iframe").ready(function() {
            $('#viz1655361597858').addClass('visually-hidden');
            $('#viz1655367819237').addClass('visually-hidden');
            $('#viz1655369223584').addClass('visually-hidden');
            $('#viz1655369578626').addClass('visually-hidden');
            $('#viz1655369620324').addClass('visually-hidden');
            $('#viz1655369645991').addClass('visually-hidden');
        });

        $(document).ready(function() {
            $("#selector").change(function() {
                if(localStorage.getItem('geomap') != null) {
                    var b = localStorage.getItem('geomap');
                    $('#' + b).addClass('visually-hidden');
                }
                var a = $('#selector').find(":selected").val();
                localStorage.setItem("geomap", a);
                $('#' + a).removeClass('visually-hidden');
            });
        });

        $(document).on('unload', function() {
            localStorage.removeItem("geomap");
        });
    </script>
@endsection
