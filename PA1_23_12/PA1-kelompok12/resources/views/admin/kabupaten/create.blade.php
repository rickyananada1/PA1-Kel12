@extends('admin.master')

@section('title')
    Create Kabupaten
@endsection

@section('subtitle')
    <a class="btn btn-warning" href="{{ Route('kabupaten.index') }}" role="button"><i class="fa fa-arrow-left"></i>
        Kembali</a>
@endsection

@section('content')

@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card p-3">
                        <form method="post" action="{{ route('kabupaten.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row border-bottom pb-4">
                                <label for="nama" class="col-sm-2 col-form-label">Nama Kabupaten</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" value="{{ old('nama') }}"
                                        id="nama" placeholder="example: Toba Samosir">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="logo" class="col-sm-2 col-form-label">Logo</label>
                                <div class="col-sm-10">
                                    <input type="file" name="logo" class="form-control" id="logo">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="deskripsi" class="col-sm-2 col-form-label">deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="7">{{ old('deskripsi') }}</textarea>
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
