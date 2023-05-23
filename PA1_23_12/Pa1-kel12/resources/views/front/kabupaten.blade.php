@extends('front.pages.post')

@section('title')
    Kabupaten {{ $kabupaten->name}}
@endsection

@section('description')
    {{ $kabupaten->description }}
@endsection

@section('content')
    {{-- card --}}
    @include('front.partials.card')
    {{-- card end --}}

    @foreach ($blogs as $blog)
                    
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="media-entry">
                        <a href="{{Route('blogs.show', $blog->slug)}}">
                            <img src="{{ Storage::url(optional($blog->galleries->random())->images) }}" alt="Image"
                                class="img-fluid">
                        </a>
                        <div class="bg-white m-body">
                            <span class="date">{{ $blog->updated_at->format('F j, Y') }}</span>
                            <h3><a href="{{Route('blogs.show', $blog->slug)}}">{{ $blog->title}}</a></h3>
                            <p>{{ Str::limit($blog->excerpt,100)}}</p>

                            <a href="{{Route('blogs.show', $blog->slug)}}" class="more d-flex align-items-center float-start">
                                <span class="label">Read More</span>
                                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
@endsection