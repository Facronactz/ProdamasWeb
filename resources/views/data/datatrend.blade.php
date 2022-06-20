@extends('layouts.desain')
@section('data', 'active')
@section('koperasi', 'active')

@section('title', 'Prodamas Dalam Peta')

@section('head')
    <link rel="stylesheet" href="css/peta.css">
@endsection

@section('content')

    <div class="container-md my-3">
        <select id="selector" class="form-select" aria-label="Geomap selector">
            <option value="viz1655393574272" selected>Data Trend Anggaran, Serapan, dan Sisa Kota Kediri</option>
            <option value="viz1655395412741">Data Trend Anggaran, Serapan, dan Sisa Kota Kediri Per Kecamatan</option>
            <option value="viz1655395721778">Data Trend Anggaran, Serapan, dan Sisa Kota Kediri Per Kelurahan</option>
        </select>
    </div>
    {{-- <div  class='row' > --}}
    <div class='tableauPlaceholder' id='viz1655393574272' style='position: relative; padding:0 50px; margin:50px 0'>
        <noscript>
            <a href='#'>
                <img alt='Data Trend Anggaran, Serapan, dan Sisa Kota Kediri ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Tr&#47;Trend_Kota_Kediri&#47;Sheet1&#47;1_rss.png' style='border: none' />
            </a>
        </noscript>
        <object class='tableauViz' style='display:none;'>
            <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
            <param name='embed_code_version' value='3' />
            <param name='site_root' value='' />
            <param name='name' value='Trend_Kota_Kediri&#47;Sheet1' />
            <param name='tabs' value='no' />
            <param name='toolbar' value='yes' />
            <param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Tr&#47;Trend_Kota_Kediri&#47;Sheet1&#47;1.png' />
            <param name='animate_transition' value='yes' />
            <param name='display_static_image' value='yes' />
            <param name='display_spinner' value='yes' />
            <param name='display_overlay' value='yes' />
            <param name='display_count' value='yes' />
            <param name='language' value='en-US' />
        </object>
    </div>
    <script type='text/javascript'>
        var divElement = document.getElementById('viz1655393574272');
        var vizElement = divElement.getElementsByTagName('object')[0];
        vizElement.style.width = '100%';
        // vizElement.style.height=(divElement.offsetWidth*0.75)+'px';                    
        vizElement.style.height = '800px';
        var scriptElement = document.createElement('script');
        scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
        vizElement.parentNode.insertBefore(scriptElement, vizElement);
    </script>

    <div class='tableauPlaceholder' id='viz1655395412741' style='position: relative; padding:0 50px; margin:50px 0'>
        <noscript>
            <a href='#'>
                <img alt='Dashboard 1 ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Tr&#47;Trend_Per_Kecamatan&#47;Dashboard1&#47;1_rss.png' style='border: none' />
            </a>
        </noscript>
        <object class='tableauViz' style='display:none;'>
            <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
            <param name='embed_code_version' value='3' />
            <param name='site_root' value='' />
            <param name='name' value='Trend_Per_Kecamatan&#47;Dashboard1' />
            <param name='tabs' value='no' />
            <param name='toolbar' value='yes' />
            <param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Tr&#47;Trend_Per_Kecamatan&#47;Dashboard1&#47;1.png' />
            <param name='animate_transition' value='yes' />
            <param name='display_static_image' value='yes' />
            <param name='display_spinner' value='yes' />
            <param name='display_overlay' value='yes' />
            <param name='display_count' value='yes' />
            <param name='language' value='en-US' />
        </object>
    </div>
    <script type='text/javascript'>
        var divElement = document.getElementById('viz1655395412741');
        var vizElement = divElement.getElementsByTagName('object')[0];
        // if (divElement.offsetWidth > 800) {
        //     vizElement.style.width = '100%';
        //     vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
        // } else if (divElement.offsetWidth > 500) {
        //     vizElement.style.width = '100%';
        //     vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
        // } else {
        //     vizElement.style.width = '100%';
        //     vizElement.style.height = '727px';
        // }
        vizElement.style.width = '100%';
        vizElement.style.height='800px';
        var scriptElement = document.createElement('script');
        scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
        vizElement.parentNode.insertBefore(scriptElement, vizElement);
    </script>

    <div class='tableauPlaceholder' id='viz1655395721778' style='position: relative; padding:0 50px; margin:50px 0'> <noscript>
            <a href='#'>
                <img alt='Data Trend Anggaran, Serapan, dan Sisa Per Kelurahan di Kota Kediri ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Tr&#47;TrendPerKelurahan&#47;Sheet1&#47;1_rss.png' style='border: none' />
            </a>
        </noscript>
        <object class='tableauViz' style='display:none;'>
            <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
            <param name='embed_code_version' value='3' />
            <param name='site_root' value='' />
            <param name='name' value='TrendPerKelurahan&#47;Sheet1' />
            <param name='tabs' value='no' />
            <param name='toolbar' value='yes' />
            <param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Tr&#47;TrendPerKelurahan&#47;Sheet1&#47;1.png' />
            <param name='animate_transition' value='yes' />
            <param name='display_static_image' value='yes' />
            <param name='display_spinner' value='yes' />
            <param name='display_overlay' value='yes' />
            <param name='display_count' value='yes' />
            <param name='language' value='en-US' />
        </object>
    </div>
    <script type='text/javascript'>
        var divElement = document.getElementById('viz1655395721778');
        var vizElement = divElement.getElementsByTagName('object')[0];
        vizElement.style.width = '100%';
        // vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
        vizElement.style.height='800px';
        var scriptElement = document.createElement('script');
        scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
        vizElement.parentNode.insertBefore(scriptElement, vizElement);
    </script>
    {{-- </div> --}}
@endsection

@section('scripts')

    <script>
        $("iframe").ready(function() {
            $('#viz1655393574272').addClass('visually-hidden');
            $('#viz1655395412741').addClass('visually-hidden');
            $('#viz1655395721778').addClass('visually-hidden');
        });

        $(document).ready(function() {
            $("#selector").change(function() {
                if (sessionStorage.getItem('geomap') != null) {
                    var b = sessionStorage.getItem('geomap');
                    $('#' + b).addClass('visually-hidden');
                }
                var a = $('#selector').find(":selected").val();
                sessionStorage.setItem("geomap", a);
                $('#' + a).removeClass('visually-hidden');
            });
        });

        $(window).on('unload', function() {
            sessionStorage.removeItem("geomap");
        });
    </script>
@endsection
