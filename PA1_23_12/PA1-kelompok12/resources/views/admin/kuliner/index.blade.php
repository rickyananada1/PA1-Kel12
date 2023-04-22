@extends('admin.master')

@section('title')
    List Kuliner
@endsection

@section('subtitle')
<a class="btn btn-primary" href="{{ Route('blogs.create') }}" role="button">Tambah <i
    class="fa-solid fa-plus"></i></a>    
@endsection

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
                                        <th scope="col">Nama Kuliner</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Kutipan</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $blog)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $blog->judul }}</td>
                                            <td>
                                                <a href="{{ Storage::url($blog->gambar) }}" target="_blank">
                                                    <img src="{{ Storage::url($blog->gambar) }}" width="100" alt="">
                                                </a>
                                            </td>
                                            <td>{{ $blog->kutipan }}</td>
                                            <td>{{ $blog->blog_kategoris_id }}</td>
                                            <td class="pt_10 pb_10" style="display: flex; flex-direction: row;">
                                                <form
                                                    action="{{ route('blogs.edit', [$blog]) }}"
                                                    method="GET" style="margin-right: 10px;">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary"><i
                                                            class="fa fa-edit"></i></button>
                                                </form>
                                                <form
                                                    onclick="return confirm('are you sure ?');"
                                                    action="{{ route('blogs.destroy', [$blog]) }}"
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
