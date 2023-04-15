@extends('admin.master')

@section('title')
    Create Blog Kategori
@endsection

@section('subtitle')
    <a class="btn btn-warning" href="{{ Route('blogkategori.index') }}" role="button"><i class="fa fa-arrow-left"></i>
        Kembali</a>
@endsection

@section('content')
    <div class="section-body">
        <form action="{{ Route('blogkategori.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="nama">Kategori</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    placeholder="Masukkan kategori yang ingin anda tambahkan....." required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi" class="form-label">Deskripsi Kategori</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="10"
                                    placeholder="Masukkan deskripsi untuk kategori yang anda masukkan........" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
