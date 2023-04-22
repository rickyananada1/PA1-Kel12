@extends('admin.master')

@section('title')
    Create Blog
@endsection

@section('subtitle')
    <a class="btn btn-warning" href="{{ Route('blogs.index') }}" role="button"><i class="fa fa-arrow-left"></i>
        Kembali</a>
@endsection

@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card p-3">
                        <form method="post" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row border-bottom pb-4">
                                <label for="judul" class="col-sm-2 col-form-label">Judul Blog*</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="judul" value="{{ old('judul') }}"
                                        id="judul" placeholder="example: 5 tips travel">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="blog_kategoris_id" class="col-sm-2 col-form-label">Kategory</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="blog_kategoris_id" name="blog_kategoris_id">
                                        <option value="">--Pilih--</option>
                                        @foreach ($kategoris as $kategori)
                                            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="form-group row border-bottom pb-4">
                                <label for="gambar" class="col-sm-2 col-form-label">gambar</label>
                                <div class="col-sm-10">
                                    <input type="file" name="gambar" class="form-control" id="gambar">
                                </div>
                            </div> --}}
                            <div class="form-group row border-bottom pb-4">
                                <label for="kutipan" class="col-sm-2 col-form-label">Kutipan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="kutipan" id="kutipan" cols="30" rows="5">{{ old('kutipan') }}</textarea>
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
