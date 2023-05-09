@extends('admin.master')

@section('title')
    Create Tempat Makan
@endsection

@section('subtitle')
    <a class="btn btn-warning" href="{{ Route('admin.restaurant.index') }}" role="button" id="btn-batal"><i class="fa fa-arrow-left"></i>
        Kembali</a>
@endsection

@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card p-3">
                        <form method="post" action="{{ route('admin.restaurant.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row border-bottom pb-4">
                                <label for="name" class="col-sm-2 col-form-label">Nama Restaurant</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                        id="name" placeholder="example: Distro">
                                </div>
                            </div>

                            <div class="form-group row border-bottom pb-4">
                                <label for="location" class="col-sm-2 col-form-label">Lokasi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="location" value="{{ old('location') }}"
                                        id="location" placeholder="example: Balige">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="phone" class="col-sm-2 col-form-label">No Telepon</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}"
                                        id="phone" placeholder="example: +6219349012">
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
                                <label for="is_share" class="col-sm-2 col-form-label">Is Sharable?</label>
                                <div class="col-sm-10">
                                    <select name="is_share" class="form-control">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row border-bottom pb-4">
                                <label for="description" class="col-sm-2 col-form-label">description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description" id="description" cols="30" rows="7">{{ old('description') }}</textarea>
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
