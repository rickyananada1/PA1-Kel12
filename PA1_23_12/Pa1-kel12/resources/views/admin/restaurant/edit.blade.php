@extends('admin.master')

@section('title')
    Edit Akamodasi
@endsection

@section('subtitle')
    <a class="btn btn-warning" href="{{ Route('restaurant.index') }}" role="button"><i class="fa fa-arrow-left"></i>
        Kembali</a>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body p-0">


                                <!-- Main content -->
                                <div class="content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card p-3">
                                                    <form method="post" action="{{ route('restaurant.update', [$restaurant->id]) }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                        <div class="form-group row border-bottom pb-4">
                                                            <label for="name"
                                                                class="col-sm-2 col-form-label">Nama Tempat Makan</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="name"
                                                                    value="{{ old('name', $restaurant->name) }}" id="name"
                                                                    placeholder="example: Distro">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row border-bottom pb-4">
                                                            <label for="image" class="col-sm-2 col-form-label">Gambar Tempat Makan</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" name="image" class="form-control" id="image">
                                                            </div>
                                                        </div>


                                                        <div class="form-group row border-bottom pb-4">
                                                            <label for="location" class="col-sm-2 col-form-label">Lokasi</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="location" value="{{ old('location', $restaurant->location) }}"
                                                                    id="location" placeholder="example: 250k">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row border-bottom pb-4">
                                                            <label for="phone" class="col-sm-2 col-form-label">No Hp</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="phone" value="{{ old('phone', $restaurant->phone) }}"
                                                                    id="phone" placeholder="example: 250k">
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
                                                            <label for="description"
                                                                class="col-sm-2 col-form-label">description</label>
                                                            <div class="col-sm-10">
                                                                <textarea class="form-control" name="description" id="description" cols="30" rows="7">{{ old('description', $restaurant->description) }}</textarea>
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
