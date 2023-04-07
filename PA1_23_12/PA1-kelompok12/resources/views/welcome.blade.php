<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="author" content="Untree.co">
	<link rel="website icon" type="png" href="{{asset('Template/dist/img/LogoBetaTudia.png')}}">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Brygada+1918:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ URL::asset('frontend/fonts/icomoon/style.css')}}">
	<link rel="stylesheet" href="{{ URL::asset('frontend/fonts/flaticon/font/flaticon.css')}}">

	<link rel="stylesheet" href="{{ URL::asset('frontend/css/tiny-slider.css')}}">
	<link rel="stylesheet" href="{{ URL::asset('frontend/css/aos.css')}}">
	<link rel="stylesheet" href="{{ URL::asset('frontend/css/flatpickr.min.css')}}">
	<link rel="stylesheet" href="{{ URL::asset('frontend/css/glightbox.min.css')}}">
	<link rel="stylesheet" href="{{ URL::asset('frontend/css/style.css')}}">


	<title>Beta &mdash;Tudia?</title>
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
			<img src="{{ URL::asset('asset/thumbnail.jpg')}}" alt="Image" class="img-fluid">
		</div>

		<div class="container">
			<div class="row align-items-center justify-content-start">
				<div class="col-lg-5">

					<h1 class="heading" data-aos="fade-up">Website Wisata Sekitaran Toba</h1><span id="i"></span>
					<p class="mb-5" data-aos="fade-up">BetaTudia adalah website penyedia informasi dan tips unik untuk kamu sekalian</p>

					<div data-aos="fade-up">
						<a href="https://www.youtube.com/watch?v=5n-e6lOhVq0" class="play-button align-items-center d-flex glightbox3" >
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

	<div class="section section-3" data-aos="fade-up" data-aos-delay="100">
		<div class="container">
			<div class="row align-items-center justify-content-between  mb-5">
				<div class="col-lg-5" data-aos="fade-up">
					<h2 class="heading mb-3">Beberapa Destinasi Favorite</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
				</div>		
				<div class="col-lg-5 text-md-end" data-aos="fade-up" data-aos-delay="100">
					<div id="destination-controls">
						<span class="prev me-3" data-controls="prev">
							<span class="icon-chevron-left"></span>

						</span>
						<span class="next" data-controls="next">
							<span class="icon-chevron-right"></span>

						</span>
					</div>
				</div>
			</div>	

		</div>		

		<div class="destination-slider-wrap">
			<div class="destination-slider">
				<div class="destination">
					<div class="thumb">
						<img src="{{ URL::asset('frontend/images/img-1.jpg')}}" alt="Image" class="img-fluid">
						<div class="price">$430</div>
					</div>
					<div class="mt-4">
						<h3><a href="#">Paradise Beach, Palawan Island</a></h3>
						<span class="meta">Maldives, Repbulic Maldives</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="{{ URL::asset('frontend/images/img-2.jpg')}}" alt="Image" class="img-fluid">
						<div class="price">$560</div>
					</div>
					<div class="mt-4">
						<h3><a href="#">Paradise Beach, Palawan Island</a></h3>
						<span class="meta">Maldives, Repbulic Maldives</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="{{ URL::asset('frontend/images/img-3.jpg')}}" alt="Image" class="img-fluid">
						<div class="price">$490</div>
					</div>
					<div class="mt-4">
						<h3><a href="#">Paradise Beach, Palawan Island</a></h3>
						<span class="meta">Maldives, Repbulic Maldives</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="{{ URL::asset('frontend/images/img-4.jpg')}}" alt="Image" class="img-fluid">
						<div class="price">$490</div>
					</div>
					<div class="mt-4">
						<h3><a href="#">Paradise Beach, Palawan Island</a></h3>
						<span class="meta">Maldives, Repbulic Maldives</span>
					</div>
				</div>


				<div class="destination">
					<div class="thumb">
						<img src="{{ URL::asset('frontend/images/img-5.jpg')}}" alt="Image" class="img-fluid">
						<div class="price">$430</div>
					</div>
					<div class="mt-4">
						<h3><a href="#">Paradise Beach, Palawan Island</a></h3>
						<span class="meta">Maldives, Repbulic Maldives</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="{{ URL::asset('frontend/images/img-6.jpg')}}" alt="Image" class="img-fluid">
						<div class="price">$560</div>
					</div>
					<div class="mt-4">
						<h3><a href="#">Paradise Beach, Palawan Island</a></h3>
						<span class="meta">Maldives, Repbulic Maldives</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="{{ URL::asset('frontend/images/img-7.jpg')}}" alt="Image" class="img-fluid">
						<div class="price">$490</div>
					</div>
					<div class="mt-4">
						<h3><a href="#">Paradise Beach, Palawan Island</a></h3>
						<span class="meta">Maldives, Repbulic Maldives</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="{{ URL::asset('frontend/images/img-4.jpg')}}" alt="Image" class="img-fluid">
						<div class="price">$490</div>
					</div>
					<div class="mt-4">
						<h3><a href="#">Paradise Beach, Palawan Island</a></h3>
						<span class="meta">Maldives, Repbulic Maldives</span>
					</div>
				</div>

			</div>
		</div>

	</div>

	<div class="section">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-5 mb-4 mb-lg-0 order-lg-2" data-aos="fade-up">
					<img src="{{ URL::asset('frontend/images/img-1.jpg')}}" alt="Image" class="img-fluid">
				</div>
				<div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
					<h2 class="heading mb-4">Sweet Memories Come To Life Again</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
					<p class="my-4" data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-primary">Read more</a></p>
				</div>	
			</div>
		</div>
	</div>

	<div class="section bg-light">
		



		<h2 class="heading mb-5 text-center">Testimonials</h2>

		<div class="text-center mb-5">
			<div id="prevnext-testimonial">
				<span class="prev me-3" data-controls="prev">
					<span class="icon-chevron-left"></span>

				</span>
				<span class="next" data-controls="next">
					<span class="icon-chevron-right"></span>

				</span>
			</div>
		</div>

		<div class="wide-slider-testimonial-wrap">
			<div class="wide-slider-testimonial">
				<div class="item">
					<blockquote class="block-testimonial">
						<div class="author">
							<img src="{{ URL::asset('frontend/images/person_1.jpg')}}" alt="Free template by TemplateUX">
							<h3>John Doe</h3>
							<p class="position mb-5">CEO, Founder</p>
						</div>
						<p>
							<div class="quote">&ldquo;</div>
						&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
					</blockquote>
				</div>

				<div class="item">
					<blockquote class="block-testimonial">
						<div class="author">
							<img src="{{ URL::asset('frontend/images/person_2.jpg')}}" alt="Free template by TemplateUX">
							<h3>James Woodland</h3>
							<p class="position mb-5">Designer at Facebook</p>
						</div>
						<p>
							<div class="quote">&ldquo;</div>
						&ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.&rdquo;</p>

					</blockquote>
				</div>

				<div class="item">
					<blockquote class="block-testimonial">
						<div class="author">
							<img src="{{ URL::asset('frontend/images/person_3.jpg')}}" alt="Free template by TemplateUX">
							<h3>Rob Smith</h3>
							<p class="position mb-5">Product Designer at Twitter</p>
						</div>
						<p>
							<div class="quote">&ldquo;</div>
						&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
					</blockquote>
				</div>

				<div class="item">
					<blockquote class="block-testimonial">
						<div class="author">
							<img src="{{ URL::asset('frontend/images/person_1.jpg')}}" alt="Free template by TemplateUX">
							<h3>John Doe</h3>
							<p class="position mb-5">CEO, Founder</p>
						</div>
						<p>
							<div class="quote">&ldquo;</div>
						&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
					</blockquote>
				</div>

				<div class="item">
					<blockquote class="block-testimonial">
						<div class="author">
							<img src="{{ URL::asset('frontend/images/person_2.jpg')}}" alt="Free template by TemplateUX">
							<h3>James Woodland</h3>
							<p class="position mb-5">Designer at Facebook</p>
						</div>
						<p>
							<div class="quote">&ldquo;</div>
						&ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.&rdquo;</p>

					</blockquote>
				</div>

				<div class="item">
					<blockquote class="block-testimonial">
						<div class="author">
							<img src="{{ URL::asset('frontend/images/person_3.jpg')}}" alt="Free template by TemplateUX">
							<h3>Rob Smith</h3>
							<p class="position mb-5">Product Designer at Twitter</p>
						</div>
						<p>
							<div class="quote">&ldquo;</div>
						&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
					</blockquote>
				</div>
			</div>
		</div>



	</div> <!-- /.untree_co-section -->

	<div class="section">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-5 mb-4 mb-lg-0">
					<img src="{{ URL::asset('frontend/images/img_v_2.jpg')}}" alt="Image" class="img-fluid">
				</div>
				<div class="col-lg-5 mt-4 mt-lg-0"  data-aos="fade-up" data-aos-delay="100">

					<h2 class="heading mb-5">Frequently Asked <br> Questions</h2>

					<div class="custom-accordion" id="accordion_1">
						<div class="accordion-item">
							<h2 class="mb-0">
								<button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How to download and register?</button>
							</h2>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion_1">
								<div class="accordion-body">
									Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
								</div>
							</div>
						</div> <!-- .accordion-item -->

						<div class="accordion-item">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How to create your paypal account?</button>
							</h2>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion_1">
								<div class="accordion-body">
									A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
								</div>
							</div>
						</div> <!-- .accordion-item -->
						<div class="accordion-item">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How to link your paypal and bank account?</button>
							</h2>

							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion_1">
								<div class="accordion-body">
									When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.
								</div>
							</div>

						</div> <!-- .accordion-item -->


						<div class="accordion-item">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">We are better than others?</button>
							</h2>

							<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion_1">
								<div class="accordion-body">
									When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.
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
							<img src="{{ URL::asset('frontend/images/gal_1.jpg')}}" alt="Image" class="img-fluid">
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
							<img src="{{ URL::asset('frontend/images/gal_2.jpg')}}" alt="Image" class="img-fluid">
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
							<img src="{{ URL::asset('frontend/images/gal_3.jpg')}}" alt="Image" class="img-fluid">
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
							<img src="{{ URL::asset('frontend/images/gal_4.jpg')}}" alt="Image" class="img-fluid">
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



	<div class="py-5 bg-primary">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 text-center mb-3 mb-lg-0 text-lg-start">
					<h3 class="text-white m-0">Begin your adventurous journey here.</h3>
				</div>		
				<div class="col-lg-5 text-center text-lg-end">
					<a href="#" class="btn btn-outline-white">Get started</a>
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
