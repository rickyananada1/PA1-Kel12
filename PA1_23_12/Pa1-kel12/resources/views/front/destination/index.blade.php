<!doctype html>
<html lang="en">

<head>
    {{-- head css --}}
    @include('front.partials.head')
    {{-- head css end --}}
</head>

<body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    {{-- Navbar --}}
    @include('front.partials.navbar')
    {{-- Navbar end --}}



    <div class="hero overlay">

        <div class="img-bg rellax">
            <img src="{{ URL::asset('frontend/images/hero_2.jpg') }}" alt="Image" class="img-fluid">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-lg-6 mx-auto text-center">

                    <h1 class="heading" data-aos="fade-up">Destinasi Wisata Sekitaran Danau Toba</h1>
                    <p class="mb-4" data-aos="fade-up">Penuhi dahaga informasimu di sini, jangan ketinggalan update!
                        Blog kami berisi informasi segar seputar Danau toba terbaru. Jangan lewatkan artikel-artikel
                        menarik yang akan memperkaya wawasanmu. Ayo, simak dan rasakan pengalaman baru bersama kami!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">


            <div class="row align-items-stretch">
                @foreach ($destinations as $destination)
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="media-entry">
                            <a href="{{ Route('destinations.show', $destination->slug) }}">
                                <img src="{{ Storage::url(optional($destination->galleries->first())->images) }}"
                                    alt="Image" class="img-fluid">
                            </a>
                            <div class="bg-white m-body">
                                <span class="date">{{ $destination->updated_at->format('F j, Y') }}</span>
                                <h3><a href="{{ Route('destinations.show', $destination->slug) }}">{{ $destination->name }}</a></h3>
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




                <nav class="mt-5" aria-label="Page navigation example" data-aos="fade-up" data-aos-delay="100">
                    <ul class="custom-pagination pagination">
                        <li class="page-item prev"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item next"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
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
    
    
    @include('front.partials.script')

</body>

</html>
