@extends('admin.master')

@section('title')
    Kabupaten Sekitaran Toba
@endsection

@section('subtitle')
    <a class="btn btn-primary" href="{{ Route('kabupaten.create') }}" role="button">Tambah <i class="fa-solid fa-plus"></i></a>
@endsection

@section('content')
<div class="card-deck">
    <div class="row">
        @foreach ($kabupatens as $kabupaten)
            <div class="col sm-4">
                <div class="card" style="width: 18rem;">
                    <div style="height: 200px; overflow: hidden;">
                        <img class="card-img-top" src="{{ Storage::url($kabupaten->logo) }}" alt="Card image cap" style="height: 100px; width:100px; margin:25%;">
                    </div>
                    <div class="card-body">
                        <h3>{{ $kabupaten->nama }}</h3>
                        <p class="card-text">{{ Str::limit($kabupaten->deskripsi, 10, '...') }}</p>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('kabupaten.edit', $kabupaten->id) }}" class="btn btn-sm btn-primary mr-2">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('kabupaten.destroy', $kabupaten->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this item?')">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @if ($loop->iteration % 3 == 0)
    </div>
    <div class="row">
        @endif
        @endforeach
    </div>
</div>

@endsection
