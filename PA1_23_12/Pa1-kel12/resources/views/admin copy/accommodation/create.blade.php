@extends('admin.master')

@section('title')
    Create Akomodasi
@endsection

@section('subtitle')
    <a class="btn btn-warning" href="{{ Route('accommodation.index') }}" role="button"><i class="fa fa-arrow-left"></i>
        Kembali</a>
@endsection

@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card p-3">
                        <form method="post" action="{{ route('accommodation.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row border-bottom pb-4">
                                <label for="name" class="col-sm-2 col-form-label">Nama Akomodasi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                        id="name" placeholder="example: Hotel Labersa">
                                </div>
                            </div>

                            <div class="form-group row border-bottom pb-4">
                                <label for="image" class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" class="form-control" id="image">
                                </div>
                            </div>

                            <div class="form-group row border-bottom pb-4">
                                <label for="category" class="col-sm-2 col-form-label">Kategory</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="category" name="category">
                                        <option value="Hotel">Hotel</option>
                                        <option value="Resort">Resort</option>
                                        <option value="Apartement">Apartement</option>
                                        <option value="Villa">Villa</option>
                                        <option value="Hostel">Hostel</option>
                                        <option value="Homestay">Homestay</option>
                                        <option value="Guest House">Guest House</option>
                                        <option value="Camping ground">Camping ground</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row border-bottom pb-4">
                                <label for="price" class="col-sm-2 col-form-label">Harga</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="price" value="{{ old('price') }}"
                                        id="price" placeholder="example: 250k">
                                </div>
                            </div>

                            <div class="form-group row border-bottom pb-4">
                                <label for="destination_id" class="col-sm-2 col-form-label">Destinasi</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="destination_id" name="destination_id">
                                        <option value="">--Pilih--</option>
                                        @foreach ($destinations as $destination)
                                            <option value="{{ $destination->id }}">{{ $destination->name }}</option>
                                        @endforeach
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
