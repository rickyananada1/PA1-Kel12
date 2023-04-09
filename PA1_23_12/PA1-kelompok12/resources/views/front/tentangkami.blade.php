<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Brygada+1918:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@400;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('frontend/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('frontend/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('frontend/css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('frontend/css/aos.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('frontend/css/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('frontend/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('frontend/css/style.css') }}">


    <title>Sterial &mdash; Free Bootstrap 5 Website Template by Untree.co </title>
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
    {{-- Navbar End --}}


    <div class="hero overlay">

        <div class="img-bg rellax">
            <img src="{{ URL::asset('frontend/images/hero_1.jpg') }}" alt="Image" class="img-fluid">
        </div>

        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-lg-5">

                    <h1 class="heading" data-aos="fade-up">About Us</h1>
                    <p class="mb-5" data-aos="fade-up">A small river named Duden flows by their place and supplies it
                        with the necessary regelialia. It is a paradisematic country, in which roasted parts of
                        sentences fly into your mouth.</p>

                    <div data-aos="fade-up">
                        <a href="https://www.youtube.com/watch?v=5n-e6lOhVq0"
                            class="play-button align-items-center d-flex glightbox3">
                            <span class="icon-button me-3">
                                <span class="icon-play"></span>
                            </span>
                            <span class="caption">Watch Video</span>
                        </a>
                    </div>
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


	{{-- ourteams --}}
		@include('front.partials.ourteams')
	{{-- ourteams end --}}



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



</body>

</html>
