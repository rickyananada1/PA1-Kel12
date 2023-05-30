@extends('front.pages.post')

@section('title')
    Tentang Kami
@endsection

@section('description')
    Kami berdedikasi untuk mempersembahkan informasi terbaik tentang destinasi wisata di sekitaran Danau toba. Dengan
    pengalaman dan pengetahuan yang luas, kami siap membantu Anda menemukan pengalaman liburan yang tak terlupakan. Dengan
    penuh semangat, kami terus mengeksplorasi tempat-tempat baru dan berbagi cerita-cerita inspiratif kepada Anda semua.
    Kami percaya bahwa perjalanan bukan hanya tentang tempat, tetapi tentang pengalaman dan kenangan yang membekas di hati.
    Kami berharap dapat menjadi teman setia Anda dalam menjelajahi dunia dan menciptakan momen yang tak terlupakan.
@endsection


@section('content')
    
{{-- section  --}}
@include('front.partials.section')
{{-- section  end --}}


{{-- services --}}
@include('front.partials.services')
{{-- services end --}}


<div class="section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 mx-auto text-center">
                <div class="heading-content" data-aos="fade-up">
                    <h2 class="heading">Team Kami</h2>
                    <p>Kami berdedikasi untuk mempersembahkan informasi terbaik tentang destinasi wisata di sekitaran Danau toba.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <a href="#" class="person">
                    <img src="{{ URL::asset('frontend/images/person_1.jpg') }}" alt="Image"
                        class="img-fluid mb-4">
                    <span class="subheading d-inline-block">Project manager</span>
                    <h3 class="mb-3">Kenan Tomfie Bukit</h3>
                    {{-- <p class="text-muted">Far far away, behind the word mountains, far from the countries Vokalia
                        and Consonantia, there live the blind texts.</p> --}}
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#" class="person">
                    <img src="{{ URL::asset('frontend/images/person_2.jpg') }}" alt="Image"
                        class="img-fluid mb-4">
                    <span class="subheading d-inline-block">Data Analist</span>
                    <h3 class="mb-3">Elisabet Tambunan</h3>
                    {{-- <p class="text-muted">Far far away, behind the word mountains, far from the countries Vokalia
                        and Consonantia, there live the blind texts.</p> --}}
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#" class="person">
                    <img src="{{ URL::asset('frontend/images/person_3.jpg') }}" alt="Image"
                        class="img-fluid mb-4">
                        <span class="subheading d-inline-block">a Programer</span>
                    <h3 class="mb-3">Nania Pangaribuan</h3>
                    {{-- <p class="text-muted">Far far away, behind the word mountains, far from the countries Vokalia
                        and Consonantia, there live the blind texts.</p> --}}
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#" class="person">
                    <img src="{{ URL::asset('frontend/images/person_2.jpg') }}" alt="Image"
                        class="img-fluid mb-4">
                    <span class="subheading d-inline-block">Data Analist</span>
                    <h3 class="mb-3">Maria Pangaribuan</h3>
                    {{-- <p class="text-muted">Far far away, behind the word mountains, far from the countries Vokalia
                        and Consonantia, there live the blind texts.</p> --}}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
