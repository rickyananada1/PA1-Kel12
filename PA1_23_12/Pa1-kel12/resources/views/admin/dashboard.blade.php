@extends('admin.master')

@section('title')
    Selamat Datang {{ Auth::user()->name }}
@endsection

@section('subtitle')
    Kumpulan data
@endsection

@section('content')
    {{-- custom --}}
    <div class="row">
        <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-purple">
                <div class="inner">
                    <h3>{{ $sumDestinationCategory }}</h3>
                    <p>Kategori Destinasi</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{ Route('admin.destinationCategory.index') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $sumBlogCategory }}</h3>

                    <p>Kategori Blog</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{ Route('admin.blogCategory.index') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $sumKabupaten }}</h3>

                    <p>Jumlah Kabupaten</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{ Route('admin.kabupaten.index') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-purple">
                <div class="inner">
                    <h3>{{ $sumDestination }}</h3>

                    <p>Jumlah Destinasi</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="{{ Route('admin.destination.index') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $sumBlog }}</h3>

                    <p>Jumlah Blog</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="{{ Route('admin.blog.index') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-pink">
                <div class="inner">
                    <h3>{{ $sumRestaurant }}</h3>

                    <p>Jumlah Tempat Makan</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
@endsection
