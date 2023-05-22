@extends('front.pages.postdetail')

@section('title')
    {{ $destination->destinationCategory->name }}
@endsection

@section('back')
    <p class="m-0"><a class="text-white" href="{{ route('destinations.index') }}">Home</a></p>
@endsection

@section('subtitle')
    {{ 'Destinasi Wisata Detail' }}
@endsection

@section('content')
    <div class="container py-5">
        <div class="row pt-5">
            <div class="col-lg-8">
                <div class="d-flex flex-column text-left mb-3">
                    <div class="post-meta"><span class="date">{{ $destination->destinationCategory->name }}</span> <span
                            class="mx-1">&bullet;</span> <span>{{ $destination->created_at->format('F j, Y') }}</span>
                    </div>
                    <h1 class="mb-3 bold">{{ $destination->name }}</h1>
                    <p class="section-title pr-5">
                        <span class="pr-2">{{ $destination->location }}</span>
                    </p>
                    <hr>
                </div>
                <!-- =============================================Image====================================================-->
                <div class="mb-5">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach ($destination->galleries as $key => $gallery)
                                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}"
                                    class="{{ $key == 0 ? 'active' : '' }}"></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            @foreach ($destination->galleries as $key => $gallery)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <img src="{{ Storage::url($gallery->images) }}" class="d-block w-100" alt="...">
                                </div>
                            @endforeach
                        </div>
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
                    <!-- =============================================Image====================================================-->
                    {{-- <span class="date">Created {{ $destination->created_at->format('F j, Y') }}</span>
                    <span class="date">Updated {{ $destination->updated_at->format('F j, Y') }}</span> --}}
                    {{-- <br> --}}
                    <p>
                        <span class="firstcharacter">{{ substr($destination->description, 0, 1) }}</span>
                        {!! $destination->description !!}
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem deleniti assumenda numquam ipsam
                        minima repellendus doloremque, nisi aperiam delectus quasi perferendis ratione saepe aspernatur
                        natus quod veritatis sed, ipsum eaque. Et aliquid assumenda quisquam, iusto mollitia quae provident
                        vel doloremque vero, ipsam hic nam maiores maxime tenetur, libero veniam! Voluptatum sed a
                        cupiditate quod, sit aspernatur? Nihil, asperiores aliquid numquam optio fugit dicta soluta ex, cum
                        necessitatibus provident veritatis id ipsam rem iusto perferendis autem laudantium debitis repellat
                        ullam esse accusamus minima labore. Aut nam vero animi aperiam! Nisi cupiditate saepe mollitia
                        voluptates sunt provident, fugit ex est, distinctio, odio beatae. Minus odio corrupti quo
                        necessitatibus ex dolorem soluta modi at, dignissimos expedita, officiis repellat fugiat fuga porro
                        perspiciatis, consequatur quis neque provident aspernatur minima est officia exercitationem sint!
                        Est quae asperiores cupiditate sapiente repellendus qui? Soluta culpa rem temporibus, ratione
                        dolores magni illum cupiditate. Quidem maxime praesentium dolorum molestias, repellendus aliquid
                        modi at exercitationem cum quod repudiandae tempora in itaque, eos recusandae mollitia iure.
                        Necessitatibus similique velit cupiditate vel veniam nam a. Ab autem beatae aut dignissimos optio!
                        Fuga, laboriosam fugiat! Ab fugiat eaque, reiciendis, nesciunt nemo dicta quasi sint eligendi ex,
                        quis tenetur iusto quos sit inventore assumenda.</p>
                    <h3>Harga Tiket Masuk</h3>
                    <hr>
                    <p>

                        {!! $destination->ticket !!}
                    </p>

                </div>

                <!-- ==============================Related Post========================================= -->
                <div class="mb-5">
                    <h2 class="mb-4 ml-3">Related Post</h2>
                    <div class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($destinations as $destination)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mx-3">
                                        <img class="img-fluid"
                                            src="{{ Storage::url(optional($destination->galleries->first())->images) }}"
                                            style="width: 80px; height: 80px" />&nbsp;
                                        <div class="pl-3">
                                            <h5 class="">{{ $destination->name }}</h5>
                                            <div class="d-flex">
                                                <small class="mr-3"><i class="fa fa-user text-primary"></i>
                                                    Admin</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- ==============================Related Post========================================= -->


                <!-- Comment List -->
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
                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on
                                    the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the
                                    subline of her own road, the Line Lane. Pityful a rethoric question ran over her
                                    cheek, then she continued her way.</p>
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
                                    necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente
                                    iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
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
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                            Consonantia, there live the blind texts. Separated they live in
                                            Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                                        </p>
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
                                                <p>A small river named Duden flows by their place and supplies it with
                                                    the necessary regelialia. It is a paradisematic country, in which
                                                    roasted parts of sentences fly into your mouth.</p>
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
                                                        <p>Even the all-powerful Pointing has no control about the blind
                                                            texts it is an almost unorthographic life One day however a
                                                            small line of blind text by the name of Lorem Ipsum decided
                                                            to leave for the far World of Grammar.</p>
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
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic life One day however a small line of blind text by the name of Lorem
                                    Ipsum decided to leave for the far World of Grammar.</p>
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

            <div class="col-lg-4 mt-5 mt-lg-0">
                <!-- Author Bio -->
                <div class="d-flex flex-column text-center bg-primary rounded mb-5 py-5 px-4">
                    <img src="
                    @if ($destination->contributor) {{ Storage::url($destination->contributor->image) }}
                    @else
                        {{ asset('Template/dist/img/profile.jpeg') }} @endif
                    "
                        class="img-fluid rounded-circle mx-auto mb-3" style="width: 100px" />
                    <h3 class="text-secondary mb-3">{{ $destination->contributor->name }}</h3>
                    <p class="text-white m-0">
                        Jadilah seorang contributor seperti saya untuk membagikan berbagai informasi menarik
                    </p>
                </div>

                <!-- Category Destination List -->
                <div class="mb-5">
                    <h2 class="mb-4">Kategori Destinasi</h2>
                    <ul class="list-group list-group-flush">
                        @foreach ($categories as $category)
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a
                                    href="{{ route('destinations.index', ['category' => $category->id]) }}">{{ $category->name }}</a>
                                <span class="badge badge-primary badge-pill">15</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- Category Destination List -->

                <!-- Single Image -->
                <div class="mb-5">
                    <img src="{{ URL::asset('frontend/images/hero_2.jpg') }}" alt=""
                        class="img-fluid rounded" />
                </div>

                <!-- Recent Post -->
                <div class="mb-5">
                    <h2 class="mb-4">Recent Post</h2>
                    <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="{{ URL::asset('frontend/images/hero_2.jpg') }}"
                            style="width: 80px; height: 80px" />
                        <div class="pl-3">
                            <h5 class="">Diam amet eos at no eos</h5>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Akomodasi -->
                <div class="mb-5">
                    <h2 class="mb-4">Akomodasi Terdekat </h2>
                    <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="{{ URL::asset('frontend/images/hero_2.jpg') }}"
                            style="width: 80px; height: 80px" />
                        <div class="pl-3">
                            <h5 class="">Diam amet eos at no eos</h5>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Plain Text -->
                <div>
                    <h2 class="mb-4">Plain Text</h2>
                    Aliquyam sed lorem stet diam dolor sed ut sit. Ut sanctus erat ea
                    est aliquyam dolor et. Et no consetetur eos labore ea erat voluptua
                    et. Et aliquyam dolore sed erat. Magna sanctus sed eos tempor rebum
                    dolor, tempor takimata clita sit et elitr ut eirmod.
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- ======================================================Gambar Slider==============================================================-->
