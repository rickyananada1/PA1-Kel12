@extends('admin.master')

@section('title')
    edit Destinasi
@endsection


@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12 d-flex justify-content-between">
                <h1 class="m-0">{{ __('Form Edit') }}</h1>
                <a href="{{ route('destinasi.index') }}" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> </a>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-0">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Images</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse($destinasi->galleries as $gallery)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $gallery->nama }}</td>
                                    <td>
                                        <a href="{{ Storage::url($gallery->gambar) }}" target="_blank">
                                            <img width="100" src="{{ Storage::url($gallery->gambar) }}" alt="{{ $gallery->nama }}">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('galleries.edit', [$destinasi,$gallery]) }}" class="btn btn-sm btn-info"> <i class="fa fa-edit"></i> </a>              
                                        <form onclick="return confirm('are you sure ?');" class="d-inline-block" action="{{ route('galleries.destroy', [$destinasi,$gallery]) }}" method="post">
                                            @csrf 
                                            @method('delete')
                                            <button class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </button>
                                        </form>                              
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="4">Gallery Kosong</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card p-3">
                    <form method="post" action="{{ route('galleries.store', [$destinasi]) }}" enctype="multipart/form-data">
                        @csrf 
                        <div class="form-group row border-bottom pb-4">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" value="{{ old('nama') }}" id="nama" placeholder="example: Kuta">
                            </div>
                        </div>
                       
                        <div class="form-group row border-bottom pb-4">
                            <label for="images" class="col-sm-2 col-form-label">Gambar</label>
                            <div class="col-sm-10">
                            <input type="file" class="form-control" name="gambar" value="{{ old('gambar') }}" id="images">
                            </div>
                        </div>
                       
                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>

                <div class="card p-3">
                    <form method="post" action="{{ route('destinasi.update', [$destinasi]) }}">
                        @csrf 
                        @method('put')
                        <div class="form-group row border-bottom pb-4">
                            <label for="type" class="col-sm-2 col-form-label">Type</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="type" value="{{ old('type', $destinasi->nama) }}" id="nama" placeholder="example: 4D5N">
                            </div>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                            <div class="col-sm-10">
                            <input text="text" class="form-control" id="lokasi" name="lokasi" value="{{ old('lokasi', $destinasi->lokasi) }}" placeholder="example: Bali, Indonesia">
                            </div>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="deskripsi" name="nama" id="deskripsi" cols="30" rows="7" placeholder="Deskripsi text...">{{ old('deskripsi', $destinasi->deskripsi) }}</textarea>
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
    .create( document.querySelector( '#deskripsi' ) )
    .catch( error => {
        console.error( error );
    } );
</script>
@endsection
