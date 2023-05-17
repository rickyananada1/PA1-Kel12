@extends('front.pages.post')

@section('title')
    Kumpulan Blog
@endsection

@section('description')
    Penuhi dahaga informasimu di sini, jangan ketinggalan update!
    Blog kami berisi informasi segar seputar Danau toba terbaru. Jangan lewatkan artikel-artikel menarik yang akan
    memperkaya wawasanmu. Ayo, simak dan rasakan pengalaman baru bersama kami!
@endsection

@push('style')
    <link rel="stylesheet" href="{{ URL::asset('frontend/css/main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('frontend/css/variables.css') }}">
@endpush

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">

                <div class="col-md-9 aos-init aos-animate" data-aos="fade-up">
                    <h3 class="category-title">Category: Business</h3>

                    @foreach ($blogs as $blog)
                        <div class="d-md-flex post-entry-2 half">
                            <a href="{{ Route('blogs.show', $blog->slug) }}" class="me-4 thumbnail">
                                <img src="{{ Storage::url(optional($blog->galleries->random())->images) }}" alt=""
                                    class="img-fluid">
                            </a>
                            <div>
                                <div class="post-meta"><span class="date">
                                        @if ($blog->blogCategory)
                                            {{ $blog->blogCategory->name }}         
                                        @endif
                                    </span> <span class="mx-1">•</span>
                                    <span>{{ $blog->updated_at->format('F j, Y') }}</span>
                                </div>
                                <h3><a href="{{ Route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a></h3>
                                <p>{{ $blog->excerpt }}</p>
                                <div class="d-flex align-items-center author">
                                    <div class="photo"><img src=" 
                                        @if ($blog->contributor)
                                        {{ Storage::url($blog->contributor->image) }}
                                        @else
                                        {{ asset('Template/dist/img/profile.jpeg') }}
                                        @endif
                                        " alt="" class="img-fluid">
                                    </div>
                                    <div class="name">
                                        <h3 class="m-0 p-0">
                                            @if ($blog->contributor)
                                                {{ $blog->contributor->name }}
                                            @elseif($blog->contributor_id == null)
                                                Admin
                                            @endif
                                        </h3>
                                    </div>
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


                @include('front.blog.sidebar')
            </div>

        </div>
    </div>

    </div>
    </div>
    </div>
@endsection
