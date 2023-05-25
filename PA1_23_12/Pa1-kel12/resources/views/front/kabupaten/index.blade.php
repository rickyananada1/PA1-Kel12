@extends('front.pages.post')

@section('title')
    Kabupaten {{ $kabupaten->name }}
@endsection

@section('description')
    {{ $kabupaten->description }}
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
    <!-- Start retroy layout blog posts -->
    <section class="section bg-light">
        <div class="container">
            <div class="row align-items-stretch retro-layout">
                <div class="col-md-4">
                    <a href="single.html" class="h-entry mb-30 v-height gradient">

                        <div class="featured-img" style="background-image: url('images/img_2_horizontal.jpg');"></div>

                        <div class="text">
                            <span class="date">Apr. 14th, 2022</span>
                            <h2>AI can now kill those annoying cookie pop-ups</h2>
                        </div>
                    </a>
                    <a href="single.html" class="h-entry v-height gradient">

                        <div class="featured-img" style="background-image: url('images/img_5_horizontal.jpg');"></div>

                        <div class="text">
                            <span class="date">Apr. 14th, 2022</span>
                            <h2>Don’t assume your user data in the cloud is safe</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="single.html" class="h-entry img-5 h-100 gradient">

                        <div class="featured-img" style="background-image: url('{{ Storage::url($kabupaten->logo) }}');"></div>

                        <div class="text">
                            <span class="date">{{ $kabupaten->created_at}}</span>
                            <h2>{{$kabupaten->name}}</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="single.html" class="h-entry mb-30 v-height gradient">

                        <div class="featured-img" style="background-image: url('images/img_3_horizontal.jpg');"></div>

                        <div class="text">
                            <span class="date">Apr. 14th, 2022</span>
                            <h2>Startup vs corporate: What job suits you best?</h2>
                        </div>
                    </a>
                    <a href="single.html" class="h-entry v-height gradient">

                        <div class="featured-img" style="background-image: url('images/img_4_horizontal.jpg');"></div>

                        <div class="text">
                            <span class="date">Apr. 14th, 2022</span>
                            <h2>Thought you loved Python? Wait until you meet Rust</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End retroy layout blog posts -->

    @include('front.partials.card')

    <!-- Start posts-entry -->
    <section class="section posts-entry">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Tempat Makan</h2>
                </div>
                <div class="col-sm-6 text-sm-end">
                    <a href="{{ route('restaurants.index', $kabupaten->id) }}" class="read-more">View All</a>
                </div>
                
            </div>
            <div class="row g-3">
                <div class="col-md-9">
                    <div class="row g-3">
                        @php
                            $count = 0;
                            $displayedRestaurantsFirst = [];
                        @endphp
                        @foreach ($restaurants as $restaurant)
                            @if (!in_array($restaurant->id, $displayedRestaurantsFirst))
                                <div class="col-md-6">
                                    <div class="blog-entry">
                                        <a href="{{ Route('restaurants.show', $restaurant->slug) }}" class="img-link">
                                            @if ($restaurant->galleries->where('category', 'place')->count() > 0)
                                                <img src="{{ Storage::url(optional($restaurant->galleries->where('category', 'place')->first())->images) }}"
                                                    alt="Image" class="img-fluid" style="max-width: 100%; height: auto;">
                                            @endif
                                        </a>
                                        <span class="date">{{ $restaurant->created_at->format('F j, Y') }}</span>
                                        <h2><a
                                                href="{{ Route('restaurants.show', $restaurant->slug) }}">{{ $restaurant->name }}</a>
                                        </h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis
                                            inventore vel voluptas.</p>
                                        <p><a href="{{ Route('restaurants.show', $restaurant->slug) }}"
                                                class="btn btn-sm btn-outline-primary">Read More</a></p>
                                    </div>
                                </div>
                                @php
                                    $count++;
                                    array_push($displayedRestaurantsFirst, $restaurant->id);
                                @endphp
                            @endif
                            @if ($count == 2)
                            @break
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-md-3">
                <ul class="list-unstyled blog-entry-sm">
                    @php
                        $count = 0;
                        $displayedRestaurantsSecond = [];
                    @endphp
                    <!-- Variabel hitung untuk membatasi jumlah data restoran yang ditampilkan -->
                    @foreach ($restaurants as $restaurant)
                        @if (
                            !in_array($restaurant->id, $displayedRestaurantsFirst) &&
                                !in_array($restaurant->id, $displayedRestaurantsSecond) &&
                                $count < 3)
                            <!-- Batasi hanya 3 data restoran yang ditampilkan -->
                            <li>
                                <span class="date">{{ $restaurant->created_at->format('F j, Y') }}</span>
                                <h3><a
                                        href="{{ Route('restaurants.show', $restaurant->slug) }}">{{ $restaurant->name }}</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis
                                    inventore vel voluptas.</p>
                                <p><a href="{{ Route('restaurants.show', $restaurant->slug) }}"
                                        class="read-more">Continue Reading</a></p>
                            </li>
                            @php
                                $count++;
                                array_push($displayedRestaurantsSecond, $restaurant->id);
                            @endphp
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- End posts-entry -->

<!-- Start posts-entry -->
<section class="section posts-entry posts-entry-sm bg-light">
    <div class="container">
        <div class="row">
            @php
                $count = 0;
                $displayedRestaurantsThird = [];
            @endphp
            @foreach ($restaurants as $restaurant)
                @if (
                    !in_array($restaurant->id, $displayedRestaurantsFirst) &&
                        !in_array($restaurant->id, $displayedRestaurantsSecond) &&
                        !in_array($restaurant->id, $displayedRestaurantsThird) &&
                        $count < 4)
                    <div class="col-md-6 col-lg-3">
                        <div class="blog-entry">
                            <a href="{{ Route('restaurants.show', $restaurant->slug) }}" class="img-link">
                                @if ($restaurant->galleries->where('category', 'place')->count() > 0)
                                    <img src="{{ Storage::url(optional($restaurant->galleries->where('category', 'place')->first())->images) }}"
                                        alt="Image" class="img-fluid" style="height: auto">
                                @endif
                            </a>
                            <span class="date">{{ $restaurant->created_at->format('F j, Y') }}</span>
                            <h2><a
                                    href="{{ Route('restaurants.show', $restaurant->slug) }}">{{ $restaurant->name }}</a>
                            </h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p><a href="{{ Route('restaurants.show', $restaurant->slug) }}" class="read-more">Continue
                                    Reading</a></p>
                        </div>
                    </div>
                    @php
                        $count++;
                        array_push($displayedRestaurantsThird, $restaurant->id);
                    @endphp
                @endif
            @endforeach
        </div>
    </div>
</section>


<!-- End posts-entry -->


<section class="section">
    <div class="container">

        <div class="row mb-4">
            <div class="col-sm-6">
                <h2 class="posts-entry-title">Blogs</h2>
            </div>
            <div class="col-sm-6 text-sm-end"><a href="{{ Route('blogs.index') }}" class="read-more">View All</a>
            </div>
        </div>

        <div class="row">

            @foreach ($blogs as $blog)
                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                        <a href="{{ Route('blogs.show', $blog->slug) }}" class="img-link"><img
                                src="{{ Storage::url(optional($blog->galleries->random())->images) }}" alt="Image"
                                class="img-fluid" style="height: 250px"></a>
                        <div class="excerpt">


                            <h2><a href="{{ Route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a></h2>
                            <div class="post-meta align-items-center text-left clearfix">
                                <figure class="author-figure mb-0 me-3 float-start"><img
                                        src="@if ($blog->contributor) {{ Storage::url($blog->contributor->image) }}
                                @else
                                {{ asset('Template/dist/img/profile.jpeg') }} @endif"
                                        alt="Image" class="img-fluid"></figure>
                                <span class="d-inline-block mt-1">By <a href="#">
                                        @if ($blog->contributor)
                                            {{ $blog->contributor->name }}
                                        @elseif($blog->contributor_id == null)
                                            Admin
                                        @endif
                                    </a></span>
                                <span>&nbsp;-&nbsp; {{ $blog->created_at->format('F j, Y') }}</span>
                            </div>

                            <p>{{ Str::limit($blog->excerpt, 200) }}</p>
                            <p><a href="{{ Route('blogs.show', $blog->slug) }}" class="read-more">Continue
                                    Reading</a></p>
                        </div>
                    </div>
                </div>
            @endforeach





        </div>

    </div>
</section>
@endsection
