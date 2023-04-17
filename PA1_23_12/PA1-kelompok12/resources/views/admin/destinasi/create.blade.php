@extends('admin.master')

@section('title')
    Create Destinasi
@endsection

@section('subtitle')
    <a class="btn btn-warning" href="{{ Route('destinasi.index') }}" role="button"><i class="fa fa-arrow-left"></i>
        Kembali</a>
@endsection

@section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12 d-flex justify-content-between">
                        <h1 class="m-0">{{ __('Form Create') }}</h1>
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
                        <div class="card p-3">
                            <form method="post" action="{{ route('destinasi.store') }}">
                                @csrf 
                                <div class="form-group row border-bottom pb-4">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" value="{{ old('nama') }}" id="nama" placeholder="example: 4D5N">
                                    </div>
                                </div>
                                <div class="form-group row border-bottom pb-4">
                                    <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                                    <div class="col-sm-10">
                                    <input text="text" class="form-control" id="lokasi" name="lokasi" value="{{ old('lokasi') }}" placeholder="example: Bali, Indonesia">
                                    </div>
                                </div>
                                <div class="form-group row border-bottom pb-4">
                                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="deskripsi"  id="deskripsi" cols="30" rows="7" placeholder="Description text...">{{ old('deskripsi') }}</textarea>
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
    <style>
    .ck-editor__editable_inline {
        min-height: 200px;
    }
    </style>

    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#deskripsi' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

@endsection
