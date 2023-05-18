@extends('front.pages.postdetail')

@section('title')
    {{ $blog->blogCategory->name }}
@endsection

@section('back')
<p class="m-0"><a class="text-white" href="{{ route('blogs.index') }}">Blog</a></p>
@endsection

@section('subtitle')
    {{ 'Blog Detail' }}
@endsection

@push('style')
    <link rel="stylesheet" href="{{ URL::asset('frontend/css/main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('frontend/css/variables.css') }}">
@endpush

@section('content')
    <main id="main">

        <section class="single-post-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 post-content" data-aos="fade-up">

                        <!-- ======= Single Post Content ======= -->
                        <div class="single-post">
                            <div class="post-meta"><span class="date">{{ $blog->blogCategory->name }}</span> <span
                                    class="mx-1">&bullet;</span> <span>{{ $blog->created_at->format('F j, Y') }}</span>
                            </div>
                            <h1 class="mb-5">{{ $blog->title }}</h1>
                            <p><span
                                    class="firstcharacter">{{ substr($blog->excerpt, 0, 1) }}</span>{{ substr($blog->excerpt, 1) }}
                            </p>

                            @php
                                $usedImageIds = [];
                            @endphp

                            <figure class="my-4 small-img">
                                @php
                                    $randomImage1 = optional($blog->galleries->random());
                                    $usedImageIds[] = $randomImage1->id;
                                @endphp
                                <img src="{{ Storage::url($randomImage1->images) }}" alt="" class="img-fluid"
                                    style="width: 24cm">
                                <figcaption>{{ $randomImage1->name }}
                                </figcaption>
                            </figure>


                            @php
                                $description = $blog->description;
                                $paragraphs = explode('</p>', $description);
                                $totalParagraphs = count($paragraphs);
                                $halfLength = ceil($totalParagraphs / 2);
                                $firstHalf = implode('</p>', array_slice($paragraphs, 0, $halfLength)) . '</p>';
                                $secondHalf = implode('</p>', array_slice($paragraphs, $halfLength));
                            @endphp

                            <p>{!! $firstHalf !!}</p>

                            @if ($blog->galleries->count() > 0)
                                <figure class="my-4">
                                    @php
                                        $randomImage2 = optional($blog->galleries->random());
                                        $usedImageIds[] = $randomImage2->id;
                                    @endphp
                                    <img src="{{ Storage::url($randomImage2->images) }}" alt="" class="img-fluid"
                                        style="width: 24cm">
                                    <figcaption>{{ $randomImage2->name }}</figcaption>
                                </figure>
                            @endif
                            <p>{!! $secondHalf !!}</p>
                        </div><!-- End Single Post Content -->

                        <!-- ======= Comments ======= -->
                        <div class="comments">
                            <h5 class="comment-title py-4">2 Comments</h5>
                            <div class="comment d-flex mb-4">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm rounded-circle">
                                        <img class="avatar-img" src="assets/img/person-5.jpg" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-2 ms-sm-3">
                                    <div class="comment-meta d-flex align-items-baseline">
                                        <h6 class="me-2">Jordan Singer</h6>
                                        <span class="text-muted">2d</span>
                                    </div>
                                    <div class="comment-body">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non minima ipsum at
                                        amet doloremque qui magni, placeat deserunt pariatur itaque laudantium impedit
                                        aliquam eligendi repellendus excepturi quibusdam nobis esse accusantium.
                                    </div>

                                    <div class="comment-replies bg-light p-3 mt-3 rounded">
                                        <h6 class="comment-replies-title mb-4 text-muted text-uppercase">2 replies</h6>

                                        <div class="reply d-flex mb-4">
                                            <div class="flex-shrink-0">
                                                <div class="avatar avatar-sm rounded-circle">
                                                    <img class="avatar-img" src="assets/img/person-4.jpg" alt=""
                                                        class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-2 ms-sm-3">
                                                <div class="reply-meta d-flex align-items-baseline">
                                                    <h6 class="mb-0 me-2">Brandon Smith</h6>
                                                    <span class="text-muted">2d</span>
                                                </div>
                                                <div class="reply-body">
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reply d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avatar avatar-sm rounded-circle">
                                                    <img class="avatar-img" src="assets/img/person-3.jpg" alt=""
                                                        class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-2 ms-sm-3">
                                                <div class="reply-meta d-flex align-items-baseline">
                                                    <h6 class="mb-0 me-2">James Parsons</h6>
                                                    <span class="text-muted">1d</span>
                                                </div>
                                                <div class="reply-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio
                                                    dolore sed eos sapiente, praesentium.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment d-flex">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm rounded-circle">
                                        <img class="avatar-img" src="assets/img/person-2.jpg" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="flex-shrink-1 ms-2 ms-sm-3">
                                    <div class="comment-meta d-flex">
                                        <h6 class="me-2">Santiago Roberts</h6>
                                        <span class="text-muted">4d</span>
                                    </div>
                                    <div class="comment-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto laborum in
                                        corrupti dolorum, quas delectus nobis porro accusantium molestias sequi.
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Comments -->

                        <!-- ======= Comments Form ======= -->
                        <div class="row justify-content-center mt-5">

                            <div class="col-lg-12">
                                <h5 class="comment-title">Leave a Comment</h5>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <label for="comment-name">Name</label>
                                        <input type="text" class="form-control" id="comment-name"
                                            placeholder="Enter your name">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="comment-email">Email</label>
                                        <input type="text" class="form-control" id="comment-email"
                                            placeholder="Enter your email">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="comment-message">Message</label>

                                        <textarea class="form-control" id="comment-message" placeholder="Enter your name" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <input type="submit" class="btn btn-primary" value="Post comment">
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Comments Form -->

                    </div>
                    @include('front.blog.sidebar')
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
