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

@push('style')
    <link rel="stylesheet" href="{{ URL::asset('frontend/css/destination.css') }}">
@endpush

@section('content')
    <div class="section search-result-wrap">
        <div class="container">

            <div class="row posts-entry">
                @if ($selectedCategory)
                    @php
                        $category = \App\Models\DestinationCategory::find($selectedCategory);
                    @endphp

                    <h3 class="category-title">Kategori Wisata: {{ $category->name }}</h3>
                @endif

                @if ($selectedKabupaten)
                    @php
                        $kabupaten = \App\Models\Kabupaten::find($selectedKabupaten);
                    @endphp

                    <h3 class="category-title">Kabupaten: {{ $kabupaten->name }}</h3>
                @endif
                <hr class="mb-5">

                <div class="col-lg-8">

                    <div class="alldata">

                        @foreach ($destinations as $destination)
                            <div class="blog-entry d-flex blog-entry-search-item">
                                <a href="{{ Route('destinations.show', $destination->slug) }}"
                                    class="img-link me-4 zoom-image">
                                    <img src="{{ Storage::url(optional($destination->galleries->random())->images) }}"
                                        alt="Image" class="img-fluidd">
                                </a>
                                <div>
                                    <span class="date">{{ $destination->created_at->format('F j, Y') }} &bullet; <a
                                            href="#">{{ $destination->destinationCategory->name }}</a></span>
                                    <h2><a
                                            href="{{ Route('destinations.show', $destination->slug) }}">{{ $destination->name }}</a>
                                    </h2>
                                    <p>{{ Str::limit(strip_tags($destination->description), 150) }}</p>
                                    <p><a href="{{ Route('destinations.show', $destination->slug) }}"
                                            class="btn btn-sm btn-outline-primary">Baca selengkapnya..</a></p>
                                </div>
                            </div>
                        @endforeach





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
                                            class="page-link" href="{{ $destinations->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor

                                @if ($destinations->hasMorePages())
                                    <li class="page-item"><a class="page-link"
                                            href="{{ $destinations->nextPageUrl() }}">Next</a>
                                    </li>
                                @else
                                    <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
                                @endif
                            </ul>
                        </nav>
                    </div>

                    <div id="Content" class="searchdata"></div>
                </div>



                <div class="col-lg-4 sidebar">

                    <div class="search d-flex">

                        <input type="search" class="form-control" name="search" id="search"
                            placeholder="Cari Destinasi Wisata..">
                        <div class="input-group-append" for="search">
                            <span class="input-group-text">
                                <i class="fa fa-search fa-2x"></i>
                            </span>
                        </div>
                    </div>


                    <div class="input-group">
                        <form id="searchForm" action="{{ route('destinations.index') }}" method="GET">
                            <select name="kabupaten" id="kabupaten" class="custom-select ">
                                @if ($selectedKabupaten)
                                    @php
                                        $kabupaten = \App\Models\Kabupaten::find($selectedKabupaten);
                                    @endphp
                                    <option value="{{ $kabupaten->id }}" class="text-center" selected>
                                        {{ $kabupaten->name }}</option>
                                @else
                                    <option value="" class="text-center" selected>Mau Kemana?</option>
                                @endif

                                @foreach ($kabupatens as $kabupaten)
                                    <option value="{{ $kabupaten->id }} "class="text-center">{{ $kabupaten->name }}
                                    </option>
                                @endforeach
                            </select>
                            <button type="submit" style="display: none;" hidden></button>
                        </form>
                    </div>

                    <script>
                        const selectKabupaten = document.getElementById('kabupaten');
                        const searchForm = document.getElementById('searchForm');

                        selectKabupaten.addEventListener('change', function() {
                            searchForm.submit();
                        });
                    </script>



                    <div class="sidebar-box">
                        <h3 class="heading">Kategori Wisata</h3>
                        <ul class="categories">

                            <li><a href="{{ route('destinations.index') }}">Semua kategori</a></li>
                            @foreach ($destinationCategories as $destinationCategory)
                                <li><a
                                        href="{{ route('destinations.index', ['category' => $destinationCategory->id]) }}">{{ $destinationCategory->name }}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <!-- END sidebar-box -->

                    <!-- END sidebar-box -->
                    <div class="sidebar-box">
                        <h3 class="heading">Popular Posts</h3>
                        <div class="post-entry-sidebar">
                            <ul>
                                @php $count = 0 @endphp
                                @foreach ($popularDestinations as $popularDestination)
                                    <li>
                                        <a href="">
                                            <img src="{{ Storage::url(optional($popularDestination->galleries->random())->images) }}"
                                                alt="Image placeholder" class="me-4 rounded">
                                            <div class="text">
                                                <h4>{{ $popularDestination->name }}</h4>
                                                <div class="post-meta">
                                                    <span
                                                        class="mr-2">{{ $popularDestination->created_at->format('F j, Y') }}</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    @php $count++ @endphp
                                    @if ($count == 6)
                                    @break
                                @endif
                            @endforeach

                        </ul>
                    </div>
                </div>
                <!-- END sidebar-box -->


                <script>
                    $('#search').on('keyup', function() {
                        $value = $(this).val();

                        // alert($value);
                        if ($value) {
                            $('.alldata').hide();
                            $('.searchdata').show();
                        } else {
                            $('.alldata').show();
                            $('.searchdata').hide();
                        }

                        $.ajax({
                            type: 'get',
                            url: '{{ route('searchDest') }}',
                            data: {
                                'search': $value,
                            },

                            success: function(data) {
                                console.log(data);
                                $('#Content').html(data)
                            }

                        })
                    })
                </script>
            </div>

        </div>
    </div>
@endsection
