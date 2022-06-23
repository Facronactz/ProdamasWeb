<aside class="main-sidebar sidebar-light-primary elevation-4" style="background-color: #d3c4e2">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ asset('img/logoprodamas.png') }}" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold">PRODAMAS</span>
    </a>
    @php
        $user = DB::table('users')
            ->where('id', '=', Auth::user()->id)
            ->first();
        $level = $user->level;
        
        $menus = DB::table('admin_menu')->get();
    @endphp
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block text-wrap">Selamat Datang {{ $user->name }}</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="/admin" class="nav-link @yield('dashboard')">
                        <i class="nav-icon fas fa-tachometer-alt-fast"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                
                {{-- Sidebar dan Dashboard admin ditambahkan secara manual di tabel DB 'admin_menu' --}}
                @foreach ($menus as $menu)
                    @if ($level == 'super' || $menu->level == 'basic' || $menu->level == $level)
                        <li class="nav-item">
                            <a href="{{ $menu->link }}" class="nav-link @yield($menu->yield)">
                                <i class="nav-icon {{ $menu->icon }}"></i>
                                <p>{{ $menu->name }}</p>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
