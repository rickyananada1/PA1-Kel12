    @include('front.partials.head')

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    @include('front.partials.navbar')


    <!-- ======================================================Gambar Slider==============================================================-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          @foreach($destination->galleries as $key => $gallery)
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
          @endforeach
        </ol>
        <div class="carousel-inner">
          @foreach($destination->galleries as $key => $gallery)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
              <img src="{{ Storage::url($gallery->images) }}" class="d-block w-100" alt="...">
            </div>
          @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
      
    <!-- ======================================================Gambar Slider==============================================================-->




    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 blog-content pe-5">
					<h1>{{ $destination->name }}</h1>
                    <hr>
                    <p class="lead">{!! $destination->description !!}</p>



                    <div class="pt-5">
                        <h3 class="mb-5">6 Comments</h3>
                        <ul class="comment-list">
                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="{{ URL::asset('frontend/images/person_2.jpg') }}"
                                        alt="Free Website Template by Free-Template.co">
                                </div>
                                <div class="comment-body">
                                    <h3>Jacob Smith</h3>
                                    <div class="meta">January 9, 2018 at 2:21pm</div>
                                    <p>When she reached the first hills of the Italic Mountains, she had a last view
                                        back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet
                                        Village and the subline of her own road, the Line Lane. Pityful a rethoric
                                        question ran over her cheek, then she continued her way.</p>
                                    <p><a href="#" class="reply">Reply</a></p>
                                </div>
                            </li>

                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="{{ URL::asset('frontend/images/person_3.jpg') }}"
                                        alt="Free Website Template by Free-Template.co">
                                </div>
                                <div class="comment-body">
                                    <h3>Chris Meyer</h3>
                                    <div class="meta">January 9, 2018 at 2:21pm</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                                        necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim
                                        sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                    <p><a href="#" class="reply">Reply</a></p>
                                </div>

                                <ul class="children">
                                    <li class="comment">
                                        <div class="vcard bio">
                                            <img src="{{ URL::asset('frontend/images/person_1.jpg') }}"
                                                alt="Free Website Template by Free-Template.co">
                                        </div>
                                        <div class="comment-body">
                                            <h3>Chintan Patel</h3>
                                            <div class="meta">January 9, 2018 at 2:21pm</div>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia
                                                and Consonantia, there live the blind texts. Separated they live in
                                                Bookmarksgrove right at the coast of the Semantics, a large language
                                                ocean.</p>
                                            <p><a href="#" class="reply">Reply</a></p>
                                        </div>


                                        <ul class="children">
                                            <li class="comment">
                                                <div class="vcard bio">
                                                    <img src="{{ URL::asset('frontend/images/person_1.jpg') }}"
                                                        alt="Free Website Template by Free-Template.co">
                                                </div>
                                                <div class="comment-body">
                                                    <h3>Jean Doe</h3>
                                                    <div class="meta">January 9, 2018 at 2:21pm</div>
                                                    <p>A small river named Duden flows by their place and supplies it
                                                        with the necessary regelialia. It is a paradisematic country, in
                                                        which roasted parts of sentences fly into your mouth.</p>
                                                    <p><a href="#" class="reply">Reply</a></p>
                                                </div>

                                                <ul class="children">
                                                    <li class="comment">
                                                        <div class="vcard bio">
                                                            <img src="{{ URL::asset('frontend/images/person_2.jpg') }}"
                                                                alt="Free Website Template by Free-Template.co">
                                                        </div>
                                                        <div class="comment-body">
                                                            <h3>Ben Afflick</h3>
                                                            <div class="meta">January 9, 2018 at 2:21pm</div>
                                                            <p>Even the all-powerful Pointing has no control about the
                                                                blind texts it is an almost unorthographic life One day
                                                                however a small line of blind text by the name of Lorem
                                                                Ipsum decided to leave for the far World of Grammar.</p>
                                                            <p><a href="#" class="reply">Reply</a></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="{{ URL::asset('frontend/images/person_1.jpg') }}"
                                        alt="Free Website Template by Free-Template.co">
                                </div>
                                <div class="comment-body">
                                    <h3>Jean Doe</h3>
                                    <div class="meta">January 9, 2018 at 2:21pm</div>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                        almost unorthographic life One day however a small line of blind text by the
                                        name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                    <p><a href="#" class="reply">Reply</a></p>
                                </div>
                            </li>
                        </ul>
                        <!-- END comment-list -->

                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Leave a comment</h3>
                            <form action="#" class="">
                                <div class="mb-3">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="mb-3">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="mb-3">
                                    <label for="website">Website</label>
                                    <input type="url" class="form-control" id="website">
                                </div>

                                <div class="mb-3">
                                    <label for="message">Message</label>
                                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="mb-3">
                                    <input type="submit" value="Post Comment"
                                        class="btn btn-primary btn-md text-white">
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 sidebar">
                    <div class="sidebar-box">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" class="form-control"
                                    placeholder="Type a keyword and hit enter">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box">
                        <div class="categories">
                            <h3>Categories</h3>
                            <li><a href="#">Creatives <span>(12)</span></a></li>
                            <li><a href="#">News <span>(22)</span></a></li>
                            <li><a href="#">Design <span>(37)</span></a></li>
                            <li><a href="#">HTML <span>(42)</span></a></li>
                            <li><a href="#">Web Development <span>(14)</span></a></li>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <img src="{{ URL::asset('frontend/images/person_1.jpg') }}"
                            alt="Free Website Template by Free-Template.co"
                            class="img-fluid mb-4 w-50 rounded-circle">
                        <h3 class="text-black">About The Author</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
                            decided to leave for the far World of Grammar.</p>
                        <p><a href="#" class="btn btn-primary btn-md text-white">Read More</a></p>
                    </div>

                    <div class="sidebar-box">
                        <h3 class="text-black">Paragraph</h3>
                        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the
                            skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of
                            her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she
                            continued her way.</p>
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
