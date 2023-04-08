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
    {{-- Navbar end --}}



    <div class="hero overlay">

        <div class="img-bg rellax">
            <img src="{{ URL::asset('frontend/images/hero_2.jpg') }}" alt="Image" class="img-fluid">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-lg-6 mx-auto text-center">

                    <h1 class="heading" data-aos="fade-up">Cakupan Lokasi BetaTudia?</h1>
                    <p class="mb-4" data-aos="fade-up">Kawasan Danau Toba mencakup 8 (delapan) kabupaten di Provinsi
                        Sumatera Utara, yang terdiri dari Kabupaten Karo, Simalungun, Toba Samosir, Tapanuli Utara,
                        Humbang Hasundutan, Samosir, Pakpak Bharat, dan Dairi.</p>


                </div>
            </div>
        </div>


    </div>



    <div class="section">
        <div class="container mx-auto text-center">



            <div class="row g-0">
				<div class="col-md-6">
					<div class="card mb-3" style="max-width: 540px;">
						<img src="{{ URL::asset('asset/thumbnail.jpg') }}" class="img-fluid rounded-start" alt="...">
						<div class="card-body">
							<h5 class="card-title">Card title 1</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card mb-3" style="max-width: 540px;">
						<img src="{{ URL::asset('asset/thumbnail.jpg') }}" class="img-fluid rounded-start" alt="...">
						<div class="card-body">
							<h5 class="card-title">Card title 2</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row g-0">
				<div class="col-md-6">
					<div class="card mb-3" style="max-width: 540px;">
						<img src="{{ URL::asset('asset/thumbnail.jpg') }}" class="img-fluid rounded-start" alt="...">
						<div class="card-body">
							<h5 class="card-title">Card title 1</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card mb-3" style="max-width: 540px;">
						<img src="{{ URL::asset('asset/thumbnail.jpg') }}" class="img-fluid rounded-start" alt="...">
						<div class="card-body">
							<h5 class="card-title">Card title 2</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
				</div>
			</div>

			<div class="row g-0">
				<div class="col-md-6">
					<div class="card mb-3" style="max-width: 540px;">
						<img src="{{ URL::asset('asset/thumbnail.jpg') }}" class="img-fluid rounded-start" alt="...">
						<div class="card-body">
							<h5 class="card-title">Card title 1</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card mb-3" style="max-width: 540px;">
						<img src="{{ URL::asset('asset/thumbnail.jpg') }}" class="img-fluid rounded-start" alt="...">
						<div class="card-body">
							<h5 class="card-title">Card title 2</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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
</body>

</html>
