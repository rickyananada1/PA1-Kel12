@extends('admin.master')

@section('title')
    Form Edit Destinasi
@endsection

@section('subtitle')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 d-flex justify-content-between">
                    <a href="{{ route('destinasi.index') }}" class="btn btn-warning"> <i class="fa fa-arrow-left"></i>
                        Kembali</a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection

@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-body">
                            @if (session('message'))
                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                    <strong>{{ session('message') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($destinasi->galleries as $gallery)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <img width="140" src="{{ Storage::url($gallery->path) }}"
                                                        alt="">
                                                </td>
                                                <td>
                                                    <a href="{{ route('destinasi.galleries.edit', [$destinasi, $gallery]) }}"
                                                        class="btn btn-info">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </a>
                                                    <form class="d-inline"
                                                        action="{{ route('destinasi.galleries.destroy', [$destinasi, $gallery]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button onClick="return confirm('Are you sure !')"
                                                            class="btn btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">Data Kosong</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('destinasi.galleries.store', $destinasi) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="path">Add Images</label>
                                    <input type="file" class="form-control col-lg-6" id="path" name="path" />
                                </div>
                                <button type="submit" class="btn btn-primary btn-block col-lg-6">Save Image</button>
                            </form>
                        </div>
                    </div>

                    <div class="card p-3">
                        <form method="post" action="{{ route('destinasi.update', [$destinasi]) }}">
                            @csrf
                            @method('put')
                            <div class="form-group row border-bottom pb-4">
                                <label for="type" class="col-sm-2 col-form-label">Nama Destinasi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama"
                                        value="{{ old('type', $destinasi->nama) }}" id="nama"
                                        placeholder="example: 4D5N">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="lokasi" class="col-sm-2 col-form-label">Harga Tiket</label>
                                <div class="col-sm-10">
                                    <input text="text" class="form-control" id="lokasi" name="lokasi"
                                        value="{{ old('lokasi', $destinasi->tiket) }}"
                                        placeholder="example: 5k">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="lokasi" class="col-sm-2 col-form-label">Lokasi Destinasi</label>
                                <div class="col-sm-10">
                                    <input text="text" class="form-control" id="lokasi" name="lokasi"
                                        value="{{ old('lokasi', $destinasi->lokasi) }}"
                                        placeholder="example: Bali, Indonesia">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Destinasi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="deskripsi" name="nama" id="deskripsi" cols="30" rows="7"
                                        placeholder="Deskripsi text...">{{ old('deskripsi', $destinasi->deskripsi) }}</textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection


@section('styles')
    <style>
        .ck-editor__editable_inline {
            min-height: 200px;
        }
    </style>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#deskripsi'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
