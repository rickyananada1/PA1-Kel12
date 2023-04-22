<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('Template/dist/img/LogoBetaTudia.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Admin BetaTudia?</a>
        </div>
    </div>

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            <a href="{{ route('profile.show') }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
    </div>


    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{Route('admin_dashboard')}}" class="nav-link">
                    <i class="nav-icon fa-solid fa-home"></i>
                    <p>
                        {{ __('Dashboard') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        {{ __('Pemilik Wisata') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{Route('kabupaten.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-map"></i>
                    <p>
                        {{ __('Kabupaten') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{Route('kuliner.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-burger"></i>
                    <p>
                        {{ __('Kuliner') }}
                    </p>
                </a>
            </li>

            {{-- Wisata --}}
            <li class="nav-item">
                <a href="{{Route('destinasikategori.index')}}" class="nav-link">
                    <i class="nav-icon fa fa-map-pin"></i>
                    <p>
                        Wisata
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{Route('destinasikategori.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{__('Kategori')}}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{Route('destinasi.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{__('Destinasi')}}</p>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- Post --}}
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-newspaper nav-icon"></i>
                    <p>
                        Blog
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('blogkategori.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Kategori</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{Route('blogs.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Blog</p>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- Akomodasi --}}
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-hotel nav-icon"></i>
                    <p>
                        Akomodasi
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Kategori</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Akomodasi</p>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </nav>
</div>
