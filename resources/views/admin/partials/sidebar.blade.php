<aside class="main-sidebar sidebar-light-primary elevation-4" style="background-color: #E7DCF3">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('img/logoprodamas.png') }}"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold">PRODAMAS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">Selamat Datang Admin!</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/admin/list-article" class="nav-link @yield('artikel')">
                        <i class="nav-icon far fa-newspaper"></i>
                        <p>Artikel</p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="/admin/submission" class="nav-link @yield('cerita')">
                        <i class="nav-icon fas fa-user-edit"></i>
                        <p>Tulis Cerita</p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="/admin/list-foto" class="nav-link @yield('foto')">
                        <i class="nav-icon far fa-images"></i>
                        <p>Foto</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/list-video" class="nav-link @yield('video')">
                        <i class="nav-icon fas fa-video"></i>
                        <p>Video</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/list-audio" class="nav-link @yield('audio')">
                        <i class="nav-icon fas fa-microphone"></i>
                        <p>Audio</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>