@extends('admin.master')

@section('title')
    Kategori Destinasi
@endsection

@section('subtitle')
    <a class="btn btn-primary" href="{{ Route('admin.destinationCategory.create') }}" role="button">Tambah <i
            class="fa-solid fa-plus"></i></a>
@endsection


@section('content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                        @push('scripts')
                            @if (session('alert-type') === 'success')
                                <script>
                                    Swal.fire({
                                        icon: 'success',
                                        title: '{{ session('message') }}',
                                        showConfirmButton: true,
                                        timer: 2000
                                    });
                                </script>
                            
                            @endif
                        @endpush

                            <div class="table-responsive">
                                <table class="table table-bordered " id="example1">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Kategori Destinasi</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($destinationCategories as $category)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ Str::limit($category->description, 10) }}</td>
                                                <td class="pt_10 pb_10" style="display: flex; flex-direction: row;">
                                                    <form
                                                        action="{{ route('admin.destinationCategory.edit', ['destinationCategory' => $category->id]) }}"
                                                        method="GET" style="margin-right: 10px;">
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary"><i
                                                                class="fa fa-edit"></i></button>
                                                    </form>
                                                    <form
                                                        action="{{ route('admin.destinationCategory.destroy', ['destinationCategory' => $category->id]) }}"
                                                        method="POST" style="margin-right: 10px;">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn btn-danger"
                                                             id="btn-delete">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
