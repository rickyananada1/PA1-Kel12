@extends('admin.master')

@section('title')
    Kategori Destinasi
@endsection

@section('subtitle')
    <a class="btn btn-primary" href="{{ Route('destinasikategori.create') }}" role="button">Tambah <i
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
                                        <th scope="col">Kategori Destinasi</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($destinasi_kategoris as $kategori)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $kategori->nama }}</td>
                                            <td>{{ Str::limit($kategori->deskripsi,10) }}</td>
                                            <td class="pt_10 pb_10" style="display: flex; flex-direction: row;">
                                                <form
                                                    action="{{ route('destinasikategori.edit', ['destinasikategori' => $kategori->id]) }}"
                                                    method="GET" style="margin-right: 10px;">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary"><i
                                                            class="fa fa-edit"></i></button>
                                                </form>
                                                <form
                                                    action="{{ route('destinasikategori.destroy', ['destinasikategori' => $kategori->id]) }}"
                                                    method="POST" style="margin-right: 10px;">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn btn-danger"
                                                        onClick="return confirm('Apakah anda yakin ingin menghapus kategori destinasi?');">
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
