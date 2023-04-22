@extends('admin.master')

@section('title')
    List Destinasi
@endsection

@section('subtitle')
<a class="btn btn-primary" href="{{ Route('destinasi.create') }}" role="button">Tambah <i
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
                                        <th scope="col">Nama Destinasi</th>
                                        <th scope="col">Tiket</th>
                                        <th scope="col">Lokasi</th>
                                        <th scope="col">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($destinasis as $destinasi)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $destinasi->nama }}</td>
                                            <td>{{ $destinasi->tiket }}</td>
                                            <td>{{ $destinasi->lokasi }}</td>
                                            {{-- <td>{{ Str::limit($destinasi->deskripsi,10) }}</td> --}}
                                            <td class="pt_10 pb_10" style="display: flex; flex-direction: row;">
                                                <form
                                                    action="{{ route('destinasi.edit', [$destinasi]) }}"
                                                    method="GET" style="margin-right: 10px;">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary"><i
                                                            class="fa fa-edit"></i></button>
                                                </form>
                                                <form
                                                    onclick="return confirm('are you sure ?');"
                                                    action="{{ route('destinasi.destroy', [$destinasi]) }}"
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