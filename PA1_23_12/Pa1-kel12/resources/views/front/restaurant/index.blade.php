@extends('front.pages.post')

@section('title')
    Tempat Makan
@endsection

@section('description')
    Kumpulan tempat makan
@endsection


@section('content')
    <div class="section">
        <div class="container">

            <!-- ================================================ Card Destinasi =====================================================-->
            <div class="row align-items-stretch">
                @foreach ($restaurants as $restaurant)
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="media-entry">
                            <a href="{{ Route('restaurants.show', $restaurant->slug) }}">
                                @if ($restaurant->galleries->where('category', 'place')->count() > 0)
                                    <img src="{{ Storage::url(optional($restaurant->galleries->where('category', 'place')->first())->images) }}"
                                        alt="Restaurant Image" class="img-fluid gambar">
                                @endif

                            </a>
                            <div class="bg-white m-body">
                                <span class="date">{{ $restaurant->updated_at->format('F j, Y') }}</span>&mdash;
                                <span class="date">{{ $restaurant->location }}</span>
                                <h3><a href="{{ Route('restaurants.show', $restaurant->slug) }}">{{ $restaurant->name }}</a>
                                </h3>
                                <p>{{ Str::limit(strip_tags($restaurant->description), 100) }}</p>

                                <a href="{{ Route('restaurants.show', $restaurant->slug) }}"
                                    class="more d-flex align-items-center float-start">
                                    <span class="label">Baca selengkapnya..</span>
                                    <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- ================================================ Card Destinasi =====================================================-->


                <!--============================================= Paginate ===================================================-->
                <nav class="mt-5" aria-label="Page navigation example" data-aos="fade-up" data-aos-delay="100">
                    <ul class="custom-pagination pagination">
                        @if ($restaurants->onFirstPage())
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        @else
                            <li class="page-item"><a class="page-link"
                                    href="{{ $restaurants->previousPageUrl() }}">Previous</a></li>
                        @endif

                        @for ($i = 1; $i <= $restaurants->lastPage(); $i++)
                            <li class="{{ $i == $restaurants->currentPage() ? 'active' : '' }}"><a class="page-link"
                                    href="{{ $restaurants->url($i) }}">{{ $i }}</a></li>
                        @endfor

                        @if ($restaurants->hasMorePages())
                            <li class="page-item"><a class="page-link" href="{{ $restaurants->nextPageUrl() }}">Next</a>
                            </li>
                        @else
                            <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
                        @endif
                    </ul>
                </nav>
                <!--============================================= Paginate ===================================================-->

            </div>
        </div>
    </div>
@endsection
