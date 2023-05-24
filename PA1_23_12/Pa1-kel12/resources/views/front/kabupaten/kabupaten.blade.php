@extends('front.pages.post')

@section('title')
    Kabupaten {{ $kabupaten->name }}
@endsection

@section('description')
    {{ $kabupaten->description }}
@endsection

@push('style')
<style>

    .heading {
        font-size: 46px;
        color: #343661;
        font-weight: 700;
    }
</style>
@endpush

@section('content')
    {{-- card --}}
    @include('front.partials.card')
    {{-- card end --}}

    <div class="container">
        <div class="row align-items-center justify-content-between  mb-5">
            <div class="col-lg-5" data-aos="fade-up">
                <h2 class="heading mb-3">Beberapa Destinasi Favorite</h2>
                <p>Terlepas dari keindahan alamnya, Danau Toba juga memiliki beberapa destinasi wisata populer yang bisa Anda kunjungi. Destinasi-destinasi ini menawarkan pemandangan alam yang menakjubkan dan berbagai aktivitas yang menyenangkan</p>
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
            @foreach ($blogs as $blog)
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-right" data-aos-delay="100">
                    <div class="media-entry zoom-image">
                        <a href="{{ Route('blogs.show', $blog->slug) }}">
                            <img src="{{ Storage::url(optional($blog->galleries->random())->images) }}" alt="Image"
                                class="img-fluid">
                        </a>
                        <div class="bg-white m-body">
                            <span class="date">{{ $blog->updated_at->format('F j, Y') }}</span>
                            <h3><a href="{{ Route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a></h3>
                            <p>{{ Str::limit($blog->excerpt, 100) }}</p>

                            <a href="{{ Route('blogs.show', $blog->slug) }}"
                                class="more d-flex align-items-center float-start">
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
@endsection
