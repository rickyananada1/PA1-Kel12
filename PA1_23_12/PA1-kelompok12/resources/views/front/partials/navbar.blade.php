<nav class="site-nav mt-3">
    <div class="container">

        <div class="site-navigation">
            <div class="row">
                <div class="col-6 col-lg-3">
                    <a href="{{Route('welcome')}}" class="logo m-0 float-start">BetaTudia?</a>
                </div>
                <div class="col-lg-6 d-none d-lg-inline-block text-center nav-center-wrap">
                    <ul class="js-clone-nav  text-center site-menu p-0 m-0">
                        <li class="active"><a href="{{Route('welcome')}}">Beranda</a></li>
                        <li><a href="{{Route('tentangkami')}}">Tentang Kami</a></li>
                        <li class="has-children">
                            <a href="#">Cari Apa?</a>
                            <ul class="dropdown">
                                <li><a href="#">Event</a></li>
                                <li class="has-children">
                                    <a href="#">Object Wisata</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Danau</a></li>
                                        <li><a href="#">Pantai</a></li>
                                        <li><a href="#">Air</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Makanan khas</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Tips & Tricks</a></li>
                        <li><a href="{{ Route('kumpulanberita')}}">Berita</a></li>

                    </ul>
                </div>
                <div class="col-6 col-lg-3 text-lg-end">
                    <ul class="js-clone-nav d-none d-lg-inline-block text-end site-menu ">
                        <li class="cta-button"><a href="contact.html">Login</a></li>
                    </ul>

                    <a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
        
    </div>
</nav>