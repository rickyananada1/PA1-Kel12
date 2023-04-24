<!doctype html>
<html lang="en">

<head>
    {{-- head css --}}
    @include('front.partials.head')
    {{-- head css end --}}
</head>

<body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    {{-- Navbar --}}
    @include('front.partials.navbar')
    {{-- Navbar end --}}



    <div class="hero overlay">

        <div class="img-bg rellax">
            <img src="{{ URL::asset('asset/thumbnail.jpg') }}" alt="Image" class="img-fluid">
        </div>

        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-lg-5">

                    <h1 class="heading" data-aos="fade-up">Website Wisata Sekitaran Danau Toba</h1><span
                        id="i"></span>
                    <h3 class="mb-5" data-aos="fade-up" id="heading" style="color: white;">BetaTudia adalah website
                        penyedia informasi dan tips unik untuk
                        kamu sekalian</h3>
                </div>
            </div>
        </div>


    </div>

    {{-- section  --}}
    @include('front.partials.section')
    {{-- section  end --}}


    {{-- services --}}
    @include('front.partials.services')
    {{-- services end --}}

    {{-- card --}}
    @include('front.partials.card')
    {{-- card end --}}



    <div class="section">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0 order-lg-2" data-aos="fade-up">
                    <img src="{{ URL::asset('frontend/images/img-1.jpg') }}" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="heading mb-4">Sweet Memories Come To Life Again</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                        a large language ocean.</p>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
                        is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <p class="my-4" data-aos="fade-up" data-aos-delay="200"><a href="#"
                            class="btn btn-primary">Read more</a></p>
                </div>
            </div>
        </div>
    </div>

    {{-- card --}}
    {{-- @include('front.partials.testimoni') --}}
    {{-- card end --}}

    <div class="section">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <img src="{{ URL::asset('frontend/images/img_v_2.jpg') }}" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-5 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="100">

                    <h2 class="heading mb-5">Frequently Asked <br> Questions</h2>

                    <div class="custom-accordion" id="accordion_1">
                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How
                                    to download and register?</button>
                            </h2>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordion_1">
                                <div class="accordion-body">
                                    Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right
                                    at the coast of the Semantics, a large language ocean.
                                </div>
                            </div>
                        </div> <!-- .accordion-item -->

                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">How to create your paypal account?</button>
                            </h2>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordion_1">
                                <div class="accordion-body">
                                    A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                                    into your mouth.
                                </div>
                            </div>
                        </div> <!-- .accordion-item -->
                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">How to link your paypal and bank account?</button>
                            </h2>

                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordion_1">
                                <div class="accordion-body">
                                    When she reached the first hills of the Italic Mountains, she had a last view back
                                    on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and
                                    the subline of her own road, the Line Lane. Pityful a rethoric question ran over her
                                    cheek, then she continued her way.
                                </div>
                            </div>

                        </div> <!-- .accordion-item -->


                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">We are better than others?</button>
                            </h2>

                            <div id="collapseFour" class="collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordion_1">
                                <div class="accordion-body">
                                    When she reached the first hills of the Italic Mountains, she had a last view back
                                    on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and
                                    the subline of her own road, the Line Lane. Pityful a rethoric question ran over her
                                    cheek, then she continued her way.
                                </div>
                            </div>

                        </div> <!-- .accordion-item -->

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section">
        <div class="container">

            <div class="row">
                <div class="col-12"data-aos="fade-up" data-aos-delay="0">

                    <h2 class="heading mb-5">Recent Posts</h2>
                </div>
            </div>
            <div class="row align-items-stretch">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="media-entry">
                        <a href="#">
                            <img src="{{ URL::asset('frontend/images/gal_1.jpg') }}" alt="Image"
                                class="img-fluid">
                        </a>
                        <div class="bg-white m-body">
                            <span class="date">May 14, 2020</span>
                            <h3><a href="#">Far far away, behind the word mountains</a></h3>
                            <p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>

                            <a href="single.html" class="more d-flex align-items-center float-start">
                                <span class="label">Read More</span>
                                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="media-entry">
                        <a href="#">
                            <img src="{{ URL::asset('frontend/images/gal_2.jpg') }}" alt="Image"
                                class="img-fluid">
                        </a>
                        <div class="bg-white m-body">
                            <span class="date">May 14, 2020</span>
                            <h3><a href="#">Far far away, behind the word mountains</a></h3>
                            <p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>

                            <a href="single.html" class="more d-flex align-items-center float-start">
                                <span class="label">Read More</span>
                                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="media-entry">
                        <a href="#">
                            <img src="{{ URL::asset('frontend/images/gal_3.jpg') }}" alt="Image"
                                class="img-fluid">
                        </a>
                        <div class="bg-white m-body">
                            <span class="date">May 14, 2020</span>
                            <h3><a href="#">Far far away, behind the word mountains</a></h3>
                            <p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
                            <a href="single.html" class="more d-flex align-items-center float-start">
                                <span class="label">Read More</span>
                                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="media-entry">
                        <a href="#">
                            <img src="{{ URL::asset('frontend/images/gal_4.jpg') }}" alt="Image"
                                class="img-fluid">
                        </a>
                        <div class="bg-white m-body">
                            <span class="date">May 14, 2020</span>
                            <h3><a href="#">Far far away, behind the word mountains</a></h3>
                            <p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
                            <a href="single.html" class="more d-flex align-items-center float-start">
                                <span class="label">Read More</span>
                                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- /.site-footer -->
    @include('front.partials.footer')
    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>


    <script src="{{ URL::asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('frontend/js/tiny-slider.js') }}"></script>
    <script src="{{ URL::asset('frontend/js/aos.js') }}"></script>
    <script src="{{ URL::asset('frontend/js/navbar.js') }}"></script>
    <script src="{{ URL::asset('frontend/js/counter.js') }}"></script>
    <script src="{{ URL::asset('frontend/js/rellax.js') }}"></script>
    <script src="{{ URL::asset('frontend/js/flatpickr.js') }}"></script>
    <script src="{{ URL::asset('frontend/js/glightbox.min.js') }}"></script>
    <script src="{{ URL::asset('frontend/js/custom.js') }}"></script>

    <script>
        var app = document.getElementById('heading');

        var typewriter = new Typewriter(app, {
            loop: false,
            delay: 75
        });

        typewriter.typeString('Jelajahi keindahan Danau Toba di website kami')
            .pauseFor(1000)
            .deleteAll()
            .typeString('Liburan lebih seru bersama kami di sekitaran Danau Toba')
            .pauseFor(1000)
            .deleteAll()
            .typeString('Danau Toba merupakan destinasi terbaik di Sumatera Utara')
            .pauseFor(1000)
            .start();

        var app = document.getElementById('text');

        var typewriter = new Typewriter(app, {
            loop: false,
            delay: 75
        });

        typewriter.typeString('Kota Jakarta kota metropolitan, Surga impian para perantau <br> Kusapa“ Horas apa kabar kawan” Hampa hatiku dibalas“ fine, thank you” ')
                .pauseFor(1000)
                .deleteAll()
                .typeString('Liburan lebih seru bersama kami di sekitaran Danau Toba')
                .pauseFor(1000)
                .deleteAll()
                .typeString('Danau Toba merupakan destinasi terbaik di Sumatera Utara')
                .pauseFor(1000)
                .start();
    </script>
</body>

</html>
