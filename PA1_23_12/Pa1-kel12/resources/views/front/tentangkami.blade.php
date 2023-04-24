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
    {{-- Navbar End --}}


    <div class="hero overlay">

        <div class="img-bg rellax">
            <img src="{{ URL::asset('frontend/images/hero_1.jpg') }}" alt="Image" class="img-fluid">
        </div>

        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-lg-7">

                    <h1 class="heading" data-aos="fade-up">Tentang Kami</h1>
                    <p class="mb-5" data-aos="fade-up">Kami berdedikasi untuk mempersembahkan informasi terbaik tentang destinasi wisata di sekitaran Danau toba. Dengan pengalaman dan pengetahuan yang luas, kami siap membantu Anda menemukan pengalaman liburan yang tak terlupakan. Dengan penuh semangat, kami terus mengeksplorasi tempat-tempat baru dan berbagi cerita-cerita inspiratif kepada Anda semua. Kami percaya bahwa perjalanan bukan hanya tentang tempat, tetapi tentang pengalaman dan kenangan yang membekas di hati. Kami berharap dapat menjadi teman setia Anda dalam menjelajahi dunia dan menciptakan momen yang tak terlupakan.</p>
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
