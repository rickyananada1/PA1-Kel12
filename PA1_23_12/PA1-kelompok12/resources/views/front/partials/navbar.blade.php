<nav class="site-nav mt-3">
    <div class="container">

        <div class="site-navigation">
            <div class="row">
                <div class="col-6 col-lg-3">
                    <a href="{{ Route('welcome') }}" class="logo m-0 float-start">BetaTudia?</a>
                </div>
                <div class="col-lg-6 d-none d-lg-inline-block text-center nav-center-wrap">
                    <ul class="js-clone-nav  text-center site-menu p-0 m-0">
                        <li class="active"><a href="{{ Route('welcome') }}">Beranda</a></li>
                        <li class="has-children">
                            <a href="{{ Route('kumpulanberita') }}">Blog</a>
                            <ul class="dropdown">
                                <li><a href="#">Berita</a></li>
                                <li><a href="#">Tips & Triks</a></li>
                                <li><a href="#">Event</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Cari Apa?</a>
                            <ul class="dropdown">
                                <li><a href="#">Hotel</a></li>
                                <li class="has-children">
                                    <a href="#">Object Wisata</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Alami</a></li>
                                        <li><a href="#">Buatan</a></li>
                                        <li><a href="#">Religi</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">Makanan</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Pedas</a></li>
                                        <li><a href="#">Manis</a></li>
                                        <li><a href="#">Unik</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Lokasi Wisata</a>
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
                        <li><a href="{{ Route('tentangkami') }}">Tentang Kami</a></li>

                    </ul>
                </div>
                <div class="col-6 col-lg-3 text-lg-end">
                    <ul class="js-clone-nav d-none d-lg-inline-block text-end site-menu ">
                        <li class="cta-button"><a href="{{ Route('admin_dashboard') }}">Login</a></li>
                    </ul>

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
