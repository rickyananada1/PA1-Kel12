@extends('front.pages.postdetail')

@section('title')
    Tempat Makan
@endsection

@section('back')
    <p class="m-0"><a class="text-white" href="{{ route('restaurants.index') }}">Home</a></p>
@endsection

@section('subtitle')
    {{ 'Tempat Makan Detail' }}
@endsection

@push('style')
    <style>
        .cards .card {
            transition: filter 0.3s ease;
        }

        .cards .card:hover {
            transform: scale(1.15);
            filter: blur(0);
        }

        .cards:hover .card:not(:hover) {
            filter: blur(8px);
        }
        .h {
          display: none;
        }
    </style>
@endpush

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 blog-content pe-5">
                    <h1 class="lead heading aos-init aos-animate">{{ $restaurant->name }}</h1>
                    <p>{{ $restaurant->location }}</p>
                    <hr class="heading">
                    <p>{!! $restaurant->description !!}</p>

                    <div id="carouselExampleIndicators" class="carousel slide col-md-12 mb-4" data-bs-ride="carousel">
                        @php
                            $placeGalleries = $restaurant->galleries->where('category', 'place');
                        @endphp

                        @if ($placeGalleries->count() > 0)
                            <ol class="carousel-indicators">
                                @foreach ($placeGalleries as $key => $gallery)
                                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}"
                                        class="{{ $key == 0 ? 'active' : '' }}"></li>
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                @foreach ($placeGalleries as $key => $gallery)
                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                        <img src="{{ Storage::url($gallery->images) }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>

                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                        paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

                    <blockquote>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
                            decided to leave for the far World of Grammar.</p>
                    </blockquote>

                    <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question
                        Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia,
                        put her initial into the belt and made herself on the way.</p>

                    <h3 class="text-black">Daftar Menu</h3>


                    @if ($restaurant->galleries->where('category', 'menu')->count() > 0)
                        <div class="row justify-content-center cards">
                            @foreach ($restaurant->galleries->where('category', 'menu') as $menu)
                                <div class="col-md-4 mb-3">
                                    <div class="card hover-card">
                                        <img class="card-img-top gambar" src="{{ Storage::url($menu->images) }}"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <h3>{{ Str::limit($menu->name, 20) }}</h3>
                                                <p>{{ Str::limit($menu->description, 20) }}</p>
                                            </div>
                                            <div class="card-details h">
                                                <h3>{{ $menu->name }}</h3>
                                                <p>{{ $menu->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p>No menu galleries found.</p>
                    @endif
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function() {
                    const cards = $('.hover-card');

                    cards.on('mouseover', function() {
                        cards.not(this).css('filter', 'blur(8px)');
                        $(this).find('.card-text').hide();
                        $(this).find('.card-details').show();
                    });

                    cards.on('mouseout', function() {
                        cards.css('filter', 'blur(0)');
                        $(this).find('.card-text').show();
                        $(this).find('.card-details').hide();
                    });

                    $('.cards').on('mouseleave', function() {
                        if (!cards.is(':hover')) {
                            cards.css('filter', 'blur(0)');
                            cards.find('.card-text').show();
                            cards.find('.card-details').hide();
                        }
                    });
                });
                
            </script>






            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of
                her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the
                Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>

            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

            <blockquote>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                    unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
                    decided to leave for the far World of Grammar.</p>
            </blockquote>

            <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question
                Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia,
                put her initial into the belt and made herself on the way.</p>

            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of
                her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the
                Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>


            <div class="pt-5">
                <p>Categories: <a href="#">Design</a>, <a href="#">Events</a> Tags: <a href="#">#html</a>,
                    <a href="#">#trends</a>
                </p>
            </div>


            <div class="pt-5">
                <h3 class="mb-5">6 Comments</h3>
                <ul class="comment-list">
                    <li class="comment">
                        <div class="vcard bio">
                            <img src="images/person_2.jpg" alt="Free Website Template by Free-Template.co">
                        </div>
                        <div class="comment-body">
                            <h3>Jacob Smith</h3>
                            <div class="meta">January 9, 2018 at 2:21pm</div>
                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on
                                the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the
                                subline of her own road, the Line Lane. Pityful a rethoric question ran over her
                                cheek, then she continued her way.</p>
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
                            <input type="submit" value="Post Comment" class="btn btn-primary btn-md text-white">
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
                        <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
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
                <img src="images/person_1.jpg" alt="Free Website Template by Free-Template.co"
                    class="img-fluid mb-4 w-50 rounded-circle">
                <h3 class="text-black">About The Author</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                    unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
                    decided to leave for the far World of Grammar.</p>
                <p><a href="#" class="btn btn-primary btn-md text-white">Read More</a></p>
            </div>

            <div class="sidebar-box">
                <h3 class="text-black">Paragraph</h3>
                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline
                    of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own
                    road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.
                </p>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
