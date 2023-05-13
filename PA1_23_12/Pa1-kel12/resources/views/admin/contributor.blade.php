@extends('admin.master')

@section('title')
    List Kontributor
@endsection

@section('subtitle')
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
                                        <th scope="col">Nama Contributor</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contributors as $contributor)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $contributor->name }}</td>
                                            <td>{{ $contributor->email }}</td>
                                            <td>
                                                <form action="{{ route('admin.updateStatus', $contributor->id) }}" method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-sm @if ($contributor->status == 1) btn-success @else btn-danger @endif">
                                                        @if ($contributor->status == 1)
                                                            Diterima
                                                        @else
                                                            Ditolak
                                                        @endif
                                                    </button>
                                                    @error('status')
                                                        <span class="text-danger mt-2">{{ $message }}</span>
                                                    @enderror
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

