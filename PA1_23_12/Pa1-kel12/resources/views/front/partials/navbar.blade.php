<style>
    .tulisan {
        color: #FFFFFF;
        /* warna tulisan */
        mix-blend-mode: difference;
        /* efek blend */
    }
</style>

<nav class="site-nav mt-3">
    <div class="container">

        <div class="site-navigation" id="atas">
            <div class="row">
                <div class="col-6 col-lg-3">
                    <a href="{{ Route('welcome') }}" class="logo m-0 float-start">BetaTudia?</a>
                </div>
                <div class="col-lg-6 d-none d-lg-inline-block text-center nav-center-wrap">
                    <ul class="js-clone-nav  text-center site-menu p-0 m-0">
                        <li class="active"><a href="{{ Route('welcome') }}">Beranda</a></li>
                        <li><a href="{{ Route('blogs.index') }}">Blogs</a></li>
                        <li class="has-children">
                            <a href="#">Apa Carik?</a>
                            <ul class="dropdown">
                                <li><a href="{{ Route('destinations.index') }}">Destinasi wisata</a></li>
                                <li><a href="#">Tempat Makan</a></li>
                                <li><a href="#">Kulineran</a></li>
                                <li class="has-children">
                                    <a href="#">Destinasi Wisata</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Alami</a></li>
                                        <li><a href="#">Buatan</a></li>
                                        <li><a href="#">Religi</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Mau Kemana?</a>
                            <ul class="dropdown">
                                <li><a href="#">Toba Samosir</a></li>
                                <li><a href="#">Karo</a></li>
                                <li><a href="#">Simalungun</a></li>
                                <li><a href="#">Humbang Hasudutan</a></li>
                                <li><a href="#">Samosir</a></li>
                                <li><a href="#">Tapanuli Utara</a></li>
                                <li><a href="#">Dairi</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Galeri</a></li>
                        <li><a href="{{ Route('tentangkami') }}">Tentang Kami</a></li>

                    </ul>
                </div>
                <!-- Melakukan Pengecekan apakah ada session-->
                <div class="col-6 col-lg-3 text-lg-end">
                    <ul class="js-clone-nav d-none d-lg-inline-block text-end site-menu ">
                        @if (Auth::guard('contributor')->check())
                            <li class="cta-button"><a href="{{ Route('contributor.dashboard') }}">Contributor
                                    Dashboard</a></li>
                        @elseif(Auth::guard('admin')->check())
                            <li class="cta-button"><a href="{{ Route('admin.dashboard') }}">Admin Dashboard</a></li>
                        @else
                            <li class="cta-button"><a href="{{ Route('contributor.login') }}">Login</a></li>
                        @endif
                    </ul>

                    @if (session('error'))
                        <div class="mt-2 alert alert-danger" id="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <script>
                        setTimeout(function() {
                            document.getElementById('alert').style.display = 'none';
                        }, 5000);
                    </script>

                    <a href="#"
                        class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
                        data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</nav>
