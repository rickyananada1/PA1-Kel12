
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
	{{-- Navbar end--}}

	

	<div class="hero overlay">

		<div class="img-bg rellax">
			<img src="{{ URL::asset('frontend/images/hero_2.jpg')}}" alt="Image" class="img-fluid">
		</div>
		<div class="container">
			<div class="row align-items-center justify-content-start">
				<div class="col-lg-6 mx-auto text-center">

					<h1 class="heading" data-aos="fade-up">Blog</h1>
					<p class="mb-4" data-aos="fade-up">Penuhi dahaga informasimu di sini, jangan ketinggalan update!
						Blog kami berisi informasi segar seputar Danau toba terbaru. Jangan lewatkan artikel-artikel menarik yang akan memperkaya wawasanmu. Ayo, simak dan rasakan pengalaman baru bersama kami!</p>

					<div data-aos="fade-up">
						<a href="https://www.youtube.com/watch?v=5n-e6lOhVq0" class="play-button glightbox3 w-100 text-center" >
							<div class="d-inline-flex align-items-center ">
								<span class="icon-button me-3">
									<span class="icon-play"></span>
								</span>
								<span class="caption">Watch Video</span>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>

		
	</div>



	<div class="section">
		<div class="container">

			
			<div class="row align-items-stretch">
				<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
					<div class="media-entry">
						<a href="index.html">
							<img src="{{ URL::asset('frontend/images/gal_1.jpg')}}" alt="Image" class="img-fluid">
						</a>
						<div class="bg-white m-body">
							<span class="date">May 14, 2020</span>
							<h3><a href="index.html">Far far away, behind the word mountains</a></h3>
							<p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>

							<a href="{{Route('berita')}}" class="more d-flex align-items-center float-start">
								<span class="label">Read More</span>
								<span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
					<div class="media-entry">
						<a href="index.html">
							<img src="{{ URL::asset('frontend/images/gal_2.jpg')}}" alt="Image" class="img-fluid">
						</a>
						<div class="bg-white m-body">
							<span class="date">May 14, 2020</span>
							<h3><a href="index.html">Far far away, behind the word mountains</a></h3>
							<p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>

							<a href="single.html" class="more d-flex align-items-center float-start">
								<span class="label">Read More</span>
								<span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
					<div class="media-entry">
						<a href="index.html">
							<img src="{{ URL::asset('frontend/images/gal_3.jpg')}}" alt="Image" class="img-fluid">
						</a>
						<div class="bg-white m-body">
							<span class="date">May 14, 2020</span>
							<h3><a href="index.html">Far far away, behind the word mountains</a></h3>
							<p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
							<a href="single.html" class="more d-flex align-items-center float-start">
								<span class="label">Read More</span>
								<span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="400">
					<div class="media-entry">
						<a href="index.html">
							<img src="{{ URL::asset('frontend/images/gal_4.jpg')}}" alt="Image" class="img-fluid">
						</a>
						<div class="bg-white m-body">
							<span class="date">May 14, 2020</span>
							<h3><a href="index.html">Far far away, behind the word mountains</a></h3>
							<p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
							<a href="single.html" class="more d-flex align-items-center float-start">
								<span class="label">Read More</span>
								<span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
							</a>
						</div>
					</div>
				</div>

				<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
					<div class="media-entry">
						<a href="index.html">
							<img src="{{ URL::asset('frontend/images/gal_1.jpg')}}" alt="Image" class="img-fluid">
						</a>
						<div class="bg-white m-body">
							<span class="date">May 14, 2020</span>
							<h3><a href="index.html">Far far away, behind the word mountains</a></h3>
							<p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>

							<a href="single.html" class="more d-flex align-items-center float-start">
								<span class="label">Read More</span>
								<span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
					<div class="media-entry">
						<a href="index.html">
							<img src="{{ URL::asset('frontend/images/gal_2.jpg')}}" alt="Image" class="img-fluid">
						</a>
						<div class="bg-white m-body">
							<span class="date">May 14, 2020</span>
							<h3><a href="index.html">Far far away, behind the word mountains</a></h3>
							<p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>

							<a href="single.html" class="more d-flex align-items-center float-start">
								<span class="label">Read More</span>
								<span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
					<div class="media-entry">
						<a href="index.html">
							<img src="{{ URL::asset('frontend/images/gal_3.jpg')}}" alt="Image" class="img-fluid">
						</a>
						<div class="bg-white m-body">
							<span class="date">May 14, 2020</span>
							<h3><a href="index.html">Far far away, behind the word mountains</a></h3>
							<p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
							<a href="single.html" class="more d-flex align-items-center float-start">
								<span class="label">Read More</span>
								<span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="400">
					<div class="media-entry">
						<a href="index.html">
							<img src="{{ URL::asset('frontend/images/gal_4.jpg')}}" alt="Image" class="img-fluid">
						</a>
						<div class="bg-white m-body">
							<span class="date">May 14, 2020</span>
							<h3><a href="index.html">Far far away, behind the word mountains</a></h3>
							<p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
							<a href="single.html" class="more d-flex align-items-center float-start">
								<span class="label">Read More</span>
								<span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
							</a>
						</div>
					</div>
				</div>



				<nav class="mt-5" aria-label="Page navigation example" data-aos="fade-up" data-aos-delay="100">
					<ul class="custom-pagination pagination">
						<li class="page-item prev"><a class="page-link" href="#">Previous</a></li>
						<li class="page-item active"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item next"><a class="page-link" href="#">Next</a></li>
					</ul>
				</nav>
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


		<script src="{{ URL::asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{ URL::asset('frontend/js/tiny-slider.js')}}"></script>
		<script src="{{ URL::asset('frontend/js/aos.js')}}"></script>
		<script src="{{ URL::asset('frontend/js/navbar.js')}}"></script>
		<script src="{{ URL::asset('frontend/js/counter.js')}}"></script>
		<script src="{{ URL::asset('frontend/js/rellax.js')}}"></script>
		<script src="{{ URL::asset('frontend/js/flatpickr.js')}}"></script>
		<script src="{{ URL::asset('frontend/js/glightbox.min.js')}}"></script>
		<script src="{{ URL::asset('frontend/js/custom.js')}}"></script>
	</body>
	</html>
