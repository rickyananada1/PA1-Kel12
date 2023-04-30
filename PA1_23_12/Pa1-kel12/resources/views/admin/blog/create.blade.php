@extends('admin.master')

@section('title')
    Create Blog
@endsection

@section('subtitle')
    <a class="btn btn-warning" href="{{ Route('blog.index') }}" role="button"><i class="fa fa-arrow-left"></i>
        Kembali</a>
@endsection

@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card p-3">
                        <form method="post" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row border-bottom pb-4">
                                <label for="title" class="col-sm-2 col-form-label">Judul Blog*</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}"
                                        id="title" placeholder="example: 5 tips travel">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="blog_category_id" class="col-sm-2 col-form-label">Kategory</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="blog_category_id" name="blog_category_id">
                                        <option value="">--Pilih--</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="kabupaten_id" class="col-sm-2 col-form-label">Kabupaten</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="kabupaten_id" name="kabupaten_id">
                                        <option value="">--Pilih--</option>
                                        @foreach ($kabupatens as $kabupaten)
                                            <option value="{{ $kabupaten->id }}">{{ $kabupaten->name }}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="excerpt" class="col-sm-2 col-form-label">Kutipan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="excerpt" id="excerpt" cols="30" rows="5">{{ old('excerpt') }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="description" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description" id="description" cols="30" rows="7">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success" id="btn-simpan">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection


@push('styles')
    <style>
        .ck-editor__editable_inline {
            min-height: 200px;
        }
    </style>
@endpush

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
