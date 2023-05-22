@extends('front.pages.post')

@section('title')
    Destinasi Wisata Sekitaran Danau Toba
@endsection

@section('description')
    Selamat datang di halaman destinasi BetaTudia?, salah
    satu destinasi wisata terpopuler di Indonesia yang menawarkan keindahan alam yang memukau dan
    kearifan lokal yang kaya akan budaya. mulai dari pemandangan hijau perbukitan, air terjun yang
    indah, dan keindahan pantai yang menawan. Selain itu,
    destinasi wisata sekitaran Danau Toba juga menawarkan pengalaman wisata budaya yang tak
    terlupakan, seperti mengunjungi desa tradisional Batak dan mencicipi kuliner khas daerah. Mari
    jelajahi keindahan alam dan kearifan lokal yang memukau di destinasi wisata sekitaran Danau
    Toba.
@endsection



@section('content')
    <div class="section">
        <div class="container">

            @if ($selectedCategory)
                        @php
                            $category = \App\Models\DestinationCategory::find($selectedCategory);
                        @endphp

                        <h3 class="category-title">Category: {{ $category->name }}</h3>
                    @else
                        <h3 class="category-title">Kategori: Semua Kategori</h3>
                    @endif

            <style>
                .gambar {
                    height: 200px;
                    /* ganti ukuran yang diinginkan */
                    height: 250px;
                    /**/
                    object-fit: cover;
                }
            </style>

            <!-- ================================================ Card Destinasi =====================================================-->
            <div class="row align-items-stretch">
                @foreach ($destinations as $destination)
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="media-entry">
                            <a href="{{ Route('destinations.show', $destination->slug) }}">
                                <img src="{{ Storage::url(optional($destination->galleries->first())->images) }}"
                                    alt="Image" class="img-fluid gambar">
                            </a>
                            <div class="bg-white m-body">
                                <span class="date">{{ $destination->updated_at->format('F j, Y') }}</span>&mdash;
                                <span class="date">{{ $destination->location }}</span>
                                <h3><a
                                        href="{{ Route('destinations.show', $destination->slug) }}">{{ $destination->name }}</a>
                                </h3>
                                <p>{{ Str::limit(strip_tags($destination->description), 100) }}</p>

                                <a href="{{ Route('destinations.show', $destination->slug) }}"
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
                        @if ($destinations->onFirstPage())
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        @else
                            <li class="page-item"><a class="page-link"
                                    href="{{ $destinations->previousPageUrl() }}">Previous</a></li>
                        @endif

                        @for ($i = 1; $i <= $destinations->lastPage(); $i++)
                            <li class="{{ $i == $destinations->currentPage() ? 'active' : '' }}"><a
                                    class="page-link" href="{{ $destinations->url($i) }}">{{ $i }}</a></li>
                        @endfor

                        @if ($destinations->hasMorePages())
                            <li class="page-item"><a class="page-link" href="{{ $destinations->nextPageUrl() }}">Next</a>
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
