@extends('admin.master')

@section('title')
    List Blog
@endsection

@section('subtitle')
<a class="btn btn-primary" href="{{ Route('blog.create') }}" role="button">Tambah <i
    class="fa-solid fa-plus"></i></a>    
@endsection

@push('styles')
    <link href="https://cdn.datatables.net/v/bs4/dt-1.13.4/datatables.min.css" rel="stylesheet" />
@endpush

@section('content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered " id="example1">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Judul Blog</th>
                                        <th scope="col">Kutipan</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $blog)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $blog->title }}</td>
                                            <td>{{ $blog->excerpt }}</td>
                                            <td>{{ $blog->blog_category_id }}</td>
                                            <td class="pt_10 pb_10" style="display: flex; flex-direction: row;">
                                                <form
                                                    action="{{ route('blog.edit', [$blog]) }}"
                                                    method="GET" style="margin-right: 10px;">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary"><i
                                                            class="fa fa-edit"></i></button>
                                                </form>
                                                <form
                                                    onclick="return confirm('are you sure ?');"
                                                    action="{{ route('blog.destroy', [$blog]) }}"
                                                    method="POST" style="margin-right: 10px;">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn btn-danger">
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

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#example1').DataTable();
        });
    </script>
    <script src="https://cdn.datatables.net/v/bs4/dt-1.13.4/datatables.min.js"></script>
@endpush