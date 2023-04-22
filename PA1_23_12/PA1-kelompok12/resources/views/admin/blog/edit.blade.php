@extends('admin.master')

@section('title')
    Edit Blog
@endsection

@section('subtitle')
    <a class="btn btn-warning" href="{{ Route('blogs.index') }}" role="button"><i class="fa fa-arrow-left"></i>
        Kembali</a>
@endsection

@section('content')

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
                                    <th>Name</th>
                                    <th>Images</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse($blog->galleries as $gallery)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $gallery->name }}</td>
                                    <td>
                                        <a href="{{ Storage::url($gallery->images) }}" target="_blank">
                                            <img width="100" src="{{ Storage::url($gallery->images) }}" alt="{{ $gallery->name }}">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('blogs.galleries.edit', [$blog,$gallery]) }}" class="btn btn-sm btn-info"> <i class="fa fa-edit"></i> </a>              
                                        <form onclick="return confirm('are you sure ?');" class="d-inline-block" action="{{ route('blogs.galleries.destroy', [$blog , $gallery]) }}" method="post">
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
                    <form method="post" action="{{ route('blogs.galleries.store', [$blog]) }}" enctype="multipart/form-data">
                        @csrf 
                        <div class="form-group row border-bottom pb-4">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name" placeholder="example: Kuta">
                            </div>
                        </div>
                       
                        <div class="form-group row border-bottom pb-4">
                            <label for="images" class="col-sm-2 col-form-label">Images</label>
                            <div class="col-sm-10">
                            <input type="file" class="form-control" name="images" value="{{ old('images') }}" id="images">
                            </div>
                        </div>
                       
                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
<!-- images -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card p-3">
                        <form method="post" action="{{ route('blogs.update', [$blog->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group row border-bottom pb-4">
                                <label for="judul" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="judul"
                                        value="{{ old('judul', $blog->judul) }}" id="judul"
                                        placeholder="example: 5 tips travel">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="blog_kategoris_id" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="blog_kategoris_id" id="blog_kategoris_id">
                                        @foreach ($kategoris as $kategori)
                                        <option value="{{ $kategori->id }}" {{ $kategori->id == $blog->blog_kategoris_id ? 'selected' : '' }}">{{ $kategori->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                           
                            <div class="form-group row border-bottom pb-4">
                                <label for="kutipan" class="col-sm-2 col-form-label">Kutipan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="kutipan" id="kutipan" cols="30" rows="5">{{ old('kutipan', $blog->kutipan) }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="deskripsi" class="col-sm-2 col-form-label">deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="7">{{ old('deskripsi', $blog->deskripsi) }}</textarea>
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
