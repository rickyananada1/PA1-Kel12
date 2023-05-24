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
    <style>
        body {
            color: black;
        }
    </style>
@endpush

@section('content')
<div class="section search-result-wrap">
    <div class="container">
      
      <div class="row posts-entry">
        <div class="col-lg-8">
            @if ($selectedCategory)
                @php
                    $category = \App\Models\DestinationCategory::find($selectedCategory);
                @endphp

                <h3 class="category-title">Category: {{ $category->name }}</h3>
            @else
                <h3 class="category-title mb-5">Kategori: Semua Kategori</h3>
            @endif
            <hr class="mb-5">

            @foreach ($destinations as $destination)
                
            <div class="blog-entry d-flex blog-entry-search-item zoom-image">
              <a href="{{ Route('destinations.show', $destination->slug) }}" class="img-link me-4">
                <img src="{{ Storage::url(optional($destination->galleries->random())->images) }}" alt="Image" class="img-fluid">
              </a>
              <div>
                <span class="date">{{ $destination->created_at->format('F j, Y') }} &bullet; <a href="#">{{ $destination->destinationCategory->name}}</a></span>
                <h2><a href="{{ Route('destinations.show', $destination->slug) }}">{{ $destination->name }}</a></h2>
                <p>{{ Str::limit(strip_tags($destination->description), 150) }}</p>
                <p><a href="{{ Route('destinations.show', $destination->slug) }}" class="btn btn-sm btn-outline-primary">Baca selengkapnya..</a></p>
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
                        <li class="{{ $i == $destinations->currentPage() ? 'active' : '' }}"><a class="page-link"
                                href="{{ $destinations->url($i) }}">{{ $i }}</a></li>
                    @endfor

                    @if ($destinations->hasMorePages())
                        <li class="page-item"><a class="page-link" href="{{ $destinations->nextPageUrl() }}">Next</a>
                        </li>
                    @else
                        <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
                    @endif
                </ul>
            </nav>

        </div>

        <div class="col-lg-4 sidebar">

          <div class="sidebar-box search-form-wrap mb-4">
            <form action="#" class="sidebar-search-form">
              <span class="bi-search"></span>
              <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
            </form>
          </div>
          

          <div class="sidebar-box">
            <h3 class="heading">Kategori Wisata</h3>
            <ul class="categories">

                @foreach ($destinationCategories as $destinationCategory)
                    
                <li><a href="{{ route('destinations.index', ['category' => $destinationCategory->id ])}}">{{ $destinationCategory->name }}</a></li>
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
                    <img src="{{ Storage::url(optional($popularDestination->galleries->random())->images) }}" alt="Image placeholder" class="me-4 rounded">
                    <div class="text">
                      <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                      <div class="post-meta">
                        <span class="mr-2">March 15, 2018 </span>
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

        </div>
      </div>
    </div>
  </div>
@endsection
