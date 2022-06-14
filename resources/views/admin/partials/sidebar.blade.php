<aside class="main-sidebar sidebar-light-primary elevation-4" style="background-color: #d3c4e2">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ asset('img/logoprodamas.png') }}" class="brand-image img-circle elevation-3" style="opacity: .8">
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
                {{-- @if($user->level == 'super') --}}
                <li class="nav-item">
                    <a href="{{ url('/admin/list-menu') }}" class="nav-link @yield('menu')">
                        <i class="nav-icon fas fa-bars"></i>
                        <p>Menu</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/admin/list-carousel') }}" class="nav-link @yield('carousel')">
                        <i class="nav-icon fas fa-archway"></i>
                        <p>Carousel Header</p>
                    </a>
                </li>
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
                <li class="nav-item">
                    <a href="/admin/list-prodamas" class="nav-link @yield('prodamas')">
                        <i class="nav-icon fas fa-landmark"></i>
                        <p>Prodamas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/list-kampungkeren" class="nav-link @yield('kampungkeren')">
                        <i class="nav-icon fas fa-city"></i>
                        <p>Kampung Keren</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/list-bidang" class="nav-link @yield('bidang')">
                        <i class="nav-icon fas fa-bezier-curve"></i></i>
                        <p>Bidang</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/list-pokmas" class="nav-link @yield('pokmas')">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Pokmas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/list-tuliscerita" class="nav-link @yield('tuliscerita')">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Tulis Cerita</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/list-eboost" class="nav-link @yield('eboost')">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <p>E-Boost</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/list-umkm" class="nav-link @yield('umkm')">
                        <i class="nav-icon fas fa-house-user"></i>
                        <p>UMKM</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/list-koperasirw" class="nav-link @yield('koperasirw')">
                        <i class="nav-icon fas fa-store-alt"></i>
                        <p>Koperasi RW</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/list-wirausaha" class="nav-link @yield('wirausaha')">
                        <i class="nav-icon fas fa-address-card"></i>
                        <p>Wirausaha</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/list-kube" class="nav-link @yield('kube')">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Kube</p>
                    </a>
                </li>
                {{-- @endif --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
