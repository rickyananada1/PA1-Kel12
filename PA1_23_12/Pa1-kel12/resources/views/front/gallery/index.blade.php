@extends('front.pages.post')

@section('title')
    Galeri BetaTudia
@endsection

@section('description')
    Kumpulan gambar
@endsection

@push('style')
    <link rel="stylesheet" href="{{ URL::asset('frontend/css/gallery.css') }}">
@endpush

@section('content')
<div class="row align-items-stretch">
    @foreach ($restaurants as $restaurant)
        <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="media-entry">
                <a href="{{ Route('restaurants.show', $restaurant->slug) }}" class="zoom-image">
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


    

</div>
@endsection

@push('script')
    <script src="{{ URL::asset('js/owl.corousel.min.js') }}"></script>
    <script src="{{ URL::asset('js/galery.js') }}"></script>
    <script src="{{ URL::asset('js/masonry.pkgd.min.js') }}"></script>
@endpush
