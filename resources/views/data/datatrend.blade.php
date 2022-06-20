@extends('layouts.desain')
@section('data', 'active')
@section('koperasi', 'active')

@section('title', 'Prodamas Dalam Peta')

@section('head')
    <link rel="stylesheet" href="css/peta.css">
@endsection

@section('content')

    {{-- <div class="container-md my-3">
        <select id="selector" class="form-select" aria-label="datatrend selector">
            <option value="viz1655393574272" selected>Data Trend Anggaran, Serapan, dan Sisa Kota Kediri</option>
            <option value="viz1655707617330">Data Trend Anggaran, Serapan, dan Sisa Kota Kediri Per Kecamatan</option>
            <option value="viz1655395721778">Data Trend Anggaran, Serapan, dan Sisa Kota Kediri Per Kelurahan</option>
        </select>
    </div> --}}
    
    <div class="row mx-auto">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-kota-tab" data-bs-toggle="pill" data-bs-target="#pills-kota" type="button" role="tab" aria-controls="pills-kota" aria-selected="true">Kota</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-kecamatan-tab" data-bs-toggle="pill" data-bs-target="#pills-kecamatan" type="button" role="tab" aria-controls="pills-kecamatan" aria-selected="false">Kecamatan</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-kelurahan-tab" data-bs-toggle="pill" data-bs-target="#pills-kelurahan" type="button" role="tab" aria-controls="pills-kelurahan" aria-selected="false">Kelurahan</button>
            </li>
        </ul>
    </div>
    <div class="tab-content" id="pills-tabContent">
        {{-- Kota --}}
        <div class="tab-pane show active" id="pills-kota" role="tabpanel" aria-labelledby="pills-kota-tab">
            <div class='tableauPlaceholder' id='viz1655687902206' style='position: relative'><noscript><a href='#'><img alt='Data Trend Anggaran, Serapan, dan Sisa Kota Kediri ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Tr&#47;Trend_Kota_Kediri&#47;Sheet1&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz' style='display:none;'>
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
        </div>

        {{-- Kecamatan --}}
        <div class="tab-pane" id="pills-kecamatan" role="tabpanel" aria-labelledby="pills-kecamatan-tab">
            <div class='tableauPlaceholder' id='viz1655688094243' style='position: relative'><noscript><a href='#'><img alt='Data Trend Anggaran, Serapan, dan Sisa Per Kecamatan di Kota Kediri ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Tr&#47;Trend_Per_Kecamatan&#47;Sheet1&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz' style='display:none;'>
                    <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                    <param name='embed_code_version' value='3' />
                    <param name='site_root' value='' />
                    <param name='name' value='Trend_Per_Kecamatan&#47;Sheet1' />
                    <param name='tabs' value='no' />
                    <param name='toolbar' value='yes' />
                    <param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Tr&#47;Trend_Per_Kecamatan&#47;Sheet1&#47;1.png' />
                    <param name='animate_transition' value='yes' />
                    <param name='display_static_image' value='yes' />
                    <param name='display_spinner' value='yes' />
                    <param name='display_overlay' value='yes' />
                    <param name='display_count' value='yes' />
                    <param name='language' value='en-US' />
                </object>
            </div>
        </div>

        {{-- Kota --}}
        <div class="tab-pane" id="pills-kelurahan" role="tabpanel" aria-labelledby="pills-kelurahan-tab">
            <div class='tableauPlaceholder' id='viz1655688275145' style='position: relative'><noscript><a href='#'><img alt='Data Trend Anggaran, Serapan, dan Sisa Per Kelurahan di Kota Kediri ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Tr&#47;TrendPerKelurahan&#47;Sheet1&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz' style='display:none;'>
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
        </div>
    </div>
@endsection

@section('scripts')

    <script type='text/javascript'>
        var divElement = document.getElementById('viz1655687902206');
        var vizElement = divElement.getElementsByTagName('object')[0];
        if (divElement.offsetWidth > 800) {
            vizElement.style.width = '100%';
            vizElement.style.height = (divElement.offsetWidth * 0.4) + 'px';
        } else if (divElement.offsetWidth > 500) {
            vizElement.style.width = '100%';
            vizElement.style.height = (divElement.offsetWidth * 0.4) + 'px';
        } else {
            vizElement.style.width = '100%';
            vizElement.style.height = '727px';
        }
        var scriptElement = document.createElement('script');
        scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
        vizElement.parentNode.insertBefore(scriptElement, vizElement);
    </script>


    <script type='text/javascript'>
        var divElement = document.getElementById('viz1655688094243');
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

    <script type='text/javascript'>
        var divElement = document.getElementById('viz1655688275145');
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
@endsection

{{-- @section('')

    <script>
        $("iframe").ready(function() {
            // $('#viz1655393574272').addClass('visually-hidden');
            $('#selector').val('viz1655393574272');

            sessionStorage.setItem("datatrend", 'viz1655393574272');
            $('#viz1655707617330').addClass('visually-hidden');
            $('#viz1655395721778').addClass('visually-hidden');
        });

        $(document).ready(function() {
            $("#selector").change(function() {
                if (sessionStorage.getItem('datatrend') != null) {
                    var b = sessionStorage.getItem('datatrend');
                    $('#' + b).addClass('visually-hidden');
                }
                var a = $('#selector').find(":selected").val();
                sessionStorage.setItem("datatrend", a);
                $('#' + a).removeClass('visually-hidden');
            });
        });

        $(window).on('unload', function() {
            sessionStorage.removeItem("datatrend");
        });
    </script>
@endsection --}}
