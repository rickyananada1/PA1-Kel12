<div class="section section-3" data-aos="fade-up" data-aos-delay="100">
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
    <style>
        .gambar {
            height: 200px; /* ganti ukuran yang diinginkan */
            height: 400px; /**/
            object-fit: cover;
        }
    </style>

    <div class="destination-slider-wrap">
        <div class="destination-slider">

            @foreach ($destinations as $destination)
                
            <div class="destination">
                <div class="thumb card zoom-image">
                    <a href="{{ Route('destinations.show', $destination->slug) }}">
                        <img src="{{ Storage::url(optional($destination->galleries->random())->images) }}" alt="Image" class="img-fluid gambar">
                    </a>
                    <div class="price">{{ $destination->destinationCategory->name }}</div>
                </div>
                <div class="mt-4">
                    <h3><a href="{{Route('destinations.show',[$destination])}}">{{ $destination->name }}</a></h3>
                    <span class="meta">{{ $destination->location }}</span>
                </div>
            </div>
            
            @endforeach

        </div>
    </div>

</div>