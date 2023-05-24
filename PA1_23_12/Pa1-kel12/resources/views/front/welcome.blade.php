{{-- head css --}}
@include('front.partials.head')
{{-- head css end --}}

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



    <div class="hero overlay zoom">
        <div class="img-bg rellax">
          <img src="{{ URL::asset('asset/thumbnail.jpg') }}" alt="Image" class="img-fluid zoom-anim" id="image">
        </div>
        <div class="container">
          <div class="row align-items-center justify-content-start">
            <div class="col-lg-6">
              <h1 class="heading" data-aos="fade-up">Website Wisata Sekitaran Danau Toba</h1><span
                id="i"></span>
              <h3 class="mb-5" data-aos="fade-up" id="heading" style="color: white;">BetaTudia adalah website
                penyedia informasi dan tips unik untuk kamu sekalian</h3>
                <form class="form glass" data-aos="fade-down-right" data-aos-delay="100">
                    <div class="row mb-2">
                      <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                        <div class="input-group">
                          <select name="" id="" class="form-control custom-select">
                            <option value="">Cari Apa?</option>
                            <option value="">Destinati Wisata</option>
                            <option value="">Blog</option>
                            <option value="">Tempat Makan</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-5">
                        <div class="input-group">
                          <select name="" id="" class="form-control custom-select">
                            <option value="">Kemana?</option>
                            @foreach ($kabupatens as $kabupaten)
                            <option value="{{ route('kabupatens', $kabupaten->slug) }}">{{$kabupaten->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-3">
                        <div class="input-group">
                          <select name="" id="" class="form-control custom-select">
                            <option value="">Kategori</option>
                            <option value="">Peru</option>
                            <option value="">Japan</option>
                            <option value="">Thailand</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row align-items-center">
                      <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                        <button type="submit" class="btn btn-primary btn-block">Search</button>
                      </div>
                      <div class="col-lg-8">
                        <div class="form-check mt-3">
                          <input type="checkbox" class="form-check-input" id="saveSearch" checked="checked">
                          <label class="form-check-label" for="saveSearch">Save this search</label>
                        </div>
                      </div>
                    </div>
                  </form>
                  
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
                    <h2 class="heading mb-4">Bersama kami dan dapatkan kenangan manis untuk dikenang</h2>
                    <p>Mengunjungi website wisata sekitaran Toba membawa kenangan manis yang tak terlupakan, seperti
                        merasakan keindahan alamnya yang menakjubkan dan merasakan kehangatan keramahan penduduk
                        setempat.
                    </p>
                    <p>Semua itu telah kami sajikan agar menjadi sebuah kenangan manis yang selalu terukir dalam ingatan
                        dan hati.</p>
                    <p class="my-4" data-aos="fade-up" data-aos-delay="200"><a href="#"
                            class="btn btn-primary">Read more</a></p>
                </div>
            </div>
        </div>
    </div>

    {{-- card --}}
    @include('front.partials.testimoni')
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
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How
                                    to create your paypal account?</button>
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
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">We
                                    are better than others?</button>
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


    <!--============================================ Recent Post ==============================================-->
    <div class="section">
        <div class="container">

            <div class="row">
                <div class="col-12"data-aos="fade-up" data-aos-delay="0">

                    <h2 class="heading mb-5">Postingan Terbaru</h2>
                </div>
            </div>
            <div class="row align-items-stretch">

                @foreach ($blogs as $blog)
                    
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="media-entry">
                        <a href="{{Route('blogs.show', $blog->slug)}}" class="zoom-image">
                            <img src="{{ Storage::url(optional($blog->galleries->random())->images) }}" alt="Image"
                                class="img-fluid gambar2">
                        </a>
                        <div class="bg-white m-body">
                            <span class="date">{{$blog->blogCategory->name}} &mdash; {{ $blog->updated_at->format('F j, Y') }}</span>
                            <h3><a href="{{Route('blogs.show', $blog->slug)}}">{{ $blog->title}}</a></h3>
                            <p>{{ Str::limit($blog->excerpt,100)}}</p>

                            <a href="{{Route('blogs.show', $blog->slug)}}" class="more d-flex align-items-center float-start">
                                <span class="label">Read More</span>
                                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!--============================================ Recent Post ==============================================-->





    <!-- /.site-footer -->
    @include('front.partials.footer')
    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    @include('front.partials.script')

    

</body>

</html>
