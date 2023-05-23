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
    <div class="portfolio-3-section">
        <ul class="portfolio-filter pf-2 controls">
            <li class="control" data-filter="all">All</li>
            <li class="control" data-filter=".nature">Nature</li>
            <li class="control" data-filter=".studio">Studio Photography</li>
            <li class="control" data-filter=".weddings">Weddings</li>
            <li class="control" data-filter=".lifestyle">Lifestyle</li>
            <li class="control" data-filter=".fashion">Fashion</li>
        </ul>
        <div class="portfolio-grid portfolio-gallery nature">
            <div class="grid-sizer"></div>
            @foreach ($destinationGalleries as $destinationGallery)
                
            <div class="mix grid-item">
                <div class="grid-portfolio">
                    <img src="{{ Storage::url($destinationGallery->images) }}" alt="">
                    <h6>{{ $destinationGallery->name}}</h6>
                    <p>2019</p>
                </div>
            </div>
            @endforeach
            <div class="mix grid-item">
                <div class="grid-portfolio">
                    <img src="{{ asset('asset/portfolio-2/1.jpg') }}" alt="">
                    <h6>Pink Flamingo</h6>
                    <p>2019</p>
                </div>
            </div>
            <div class="mix grid-item">
                <div class="grid-portfolio">
                    <img src="{{ asset('asset/portfolio-2/1.jpg') }}" alt="">
                    <h6>Pink Flamingo</h6>
                    <p>2019</p>
                </div>
            </div>
            <div class="mix grid-item">
                <div class="grid-portfolio">
                    <img src="{{ asset('asset/portfolio-2/1.jpg') }}" alt="">
                    <h6>Pink Flamingo</h6>
                    <p>2019</p>
                </div>
            </div>
            <div class="mix grid-item">
                <div class="grid-portfolio">
                    <img src="{{ asset('asset/portfolio-2/1.jpg') }}" alt="">
                    <h6>Pink Flamingo</h6>
                    <p>2019</p>
                </div>
            </div>
            <div class="mix grid-item">
                <div class="grid-portfolio">
                    <img src="{{ asset('asset/portfolio-2/1.jpg') }}" alt="">
                    <h6>Pink Flamingo</h6>
                    <p>2019</p>
                </div>
            </div>
            <div class="mix grid-item">
                <div class="grid-portfolio">
                    <img src="{{ asset('asset/portfolio-2/1.jpg') }}" alt="">
                    <h6>Pink Flamingo</h6>
                    <p>2019</p>
                </div>
            </div>
            <div class="mix grid-item">
                <div class="grid-portfolio">
                    <img src="{{ asset('asset/portfolio-2/1.jpg') }}" alt="">
                    <h6>Pink Flamingo</h6>
                    <p>2019</p>
                </div>
            </div>
            {{-- <div class="mix grid-item grid-width-1 studio">
                <div class="grid-portfolio">
                    <img src="{{ asset('asset/portfolio-2/2.jpg') }}" alt="">
                    <h6>Pink Flamingo</h6>
                    <p>2019</p>
                </div>
            </div>
            <div class="mix grid-item weddings">
                <div class="grid-portfolio">
                    <img src="{{ asset('asset/portfolio-2/3.jpg') }}" alt="">
                    <h6>Pink Flamingo</h6>
                    <p>2019</p>
                </div>
            </div> --}}
            {{-- <div class="mix grid-item lifestyle">
                <div class="grid-portfolio">
                    <img src="{{ asset('asset/portfolio-2/4.jpg') }}" alt="">
                    <h6>Pink Flamingo</h6>
                    <p>2019</p>
                </div>
            </div>
            <div class="mix grid-item">
                <div class="grid-portfolio">
                    <img src="{{ asset('asset/portfolio-2/1.jpg') }}" alt="">
                    <h6>Pink Flamingo</h6>
                    <p>2019</p>
                </div>
            </div> --}}
              
        </div>



    </div>
@endsection

@push('script')
    <script src="{{ URL::asset('js/owl.corousel.min.js') }}"></script>
    <script src="{{ URL::asset('js/galery.js') }}"></script>
    <script src="{{ URL::asset('js/masonry.pkgd.min.js') }}"></script>
@endpush
