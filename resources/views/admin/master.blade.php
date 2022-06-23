<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Page | PRODAMAS </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('/adminlte/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <!-- FavIcon -->
    {{-- <link href="{{ asset('img/icon.png') }}" rel="icon" /> --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('/adminlte/plugins/summernote/summernote-bs4.min.css') }}">
    <!-- tag -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet" />

    <style>
        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: #ffffff;
            background: #2196f3;
            padding: 3px 7px;
            border-radius: 3px;
        }

        .bootstrap-tagsinput {
            width: 100%;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('admin.partials.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('admin.partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content divide (Page divide) -->
            <section class="content-divide">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>@yield('title')</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-body">
                        
                        @hasSection('content')
                            @yield('content')
                        @else
                            @section('dashboard', 'active')
                            {{-- Admin Menu --}}

                            @php
                                $user = DB::table('users')
                                    ->where('id', '=', Auth::user()->id)
                                    ->first();
                                $level = $user->level;
                                $current = '';
                            @endphp
                            <div class="container-fluid overflow-auto h-100">
                                <div class="g-3 row justify-content-center my-3">

                                    {{-- Sidebar dan Dashboard admin ditambahkan secara manual di tabel DB 'admin_menu' --}}
                                    @foreach ($menus as $menu)
                                        @php
                                            $menu_level = $menu->level;
                                            if ($current != $menu_level) {
                                                $divide = true;
                                            } else {
                                                $divide = false;
                                            }
                                            $current = $menu_level;
                                        @endphp
                                            @if ($divide)
                                            @php
                                                $header = DB::table('users_level')->where('level', '=', $current)->first();
                                            @endphp
                                            <div class="mb-4" style="width: 100%; height: 40px; border-bottom: 1px solid black; text-align: center">
                                                <span style="font-size: 40px; background-color: #ffffff; padding: 0 10px;">
                                                    {{$header->name}}
                                                    <!--Padding is optional-->
                                                </span>
                                            </div>
                                            @endif
                                            @if ($level == 'super' || $menu->level == 'basic' || $menu->level == $level)
                                                <div class="card text-center col-sm-5 col-md-4 col-lg-3 col-xl-2 mx-2" style="background: {{ $menu->color }}; min-width: 200px;">
                                                    <div class="card-body row">
                                                        <div class="m-auto" style="color: #f4f6f9;">
                                                            <i class="{{ $menu->icon }} fa-7x"></i>
                                                            <a href="{{ $menu->link }}" class="stretched-link"></a>
                                                            <h2>{{ $menu->name }}</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="card text-center col-sm-5 col-md-4 col-lg-3 col-xl-2 mx-2 btn-secondary" style="min-width: 200px;">
                                                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Fungsi dinonaktifkan untuk akun ini. Silahkan hubungi admin">
                                                        <div class="card-body row">
                                                            <i class="{{ $menu->icon }} fa-7x"></i>
                                                            <h2>{{ $menu->name }}</h2>
                                                        </div>
                                                    </span>
                                                </div>
                                            @endif
                                        @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <!-- <b>Version</b> 3.0.5 -->
            </div>
            <strong>Copyright &copy; 2022 <a href="#">Admin Prodamas</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('/adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/adminlte/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('/adminlte/dist/js/demo.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <!-- summernote -->
    <script src="{{ asset('/adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- tag -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>

    <script>
        $(document).ready(function() {
            $('#description').summernote({
                    callbacks: {
                        onPaste: function(e) {
                            var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                            e.preventDefault();
                            document.execCommand('insertText', false, bufferText);
                        },
                    },
                    toolbar: [
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['view', ['fullscreen', 'codeview']],
                    ],
                }),
                $('.summernote').summernote({
                    callbacks: {
                        onPaste: function(e) {
                            var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                            e.preventDefault();
                            document.execCommand('insertText', false, bufferText);
                        },
                    },
                    toolbar: [
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['view', ['fullscreen', 'codeview']],
                    ],
                }),
                $('#data').summernote({
                    callbacks: {
                        onPaste: function(e) {
                            var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                            e.preventDefault();
                            document.execCommand('insertText', false, bufferText);
                        },
                    },
                    toolbar: [
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['font', ['superscript', 'subscript']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['view', ['fullscreen', 'codeview']],
                    ],
                }),
                $('#tableau').summernote({
                    callbacks: {
                        onPaste: function(e) {
                            var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                            e.preventDefault();
                            document.execCommand('insertText', false, bufferText);
                        },
                    },
                    toolbar: [
                        ['view', ['fullscreen', 'codeview']],
                    ],
                }),
                $('.tableau').summernote({
                    callbacks: {
                        onPaste: function(e) {
                            var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                            e.preventDefault();
                            document.execCommand('insertText', false, bufferText);
                        },
                    },
                    toolbar: [
                        ['view', ['fullscreen', 'codeview']],
                    ],
                })
        });
    </script>

    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>
    @stack('scripts')
    @yield('table')
</body>

</html>
