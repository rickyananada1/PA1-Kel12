@extends('contributor.master')

@section('title')
    Kabupaten Sekitaran Danau Toba
@endsection

@section('subtitle')

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
                        <h3>{{ $kabupaten->name }}</h3>
                        <p class="card-text">{{ Str::limit($kabupaten->description, 10, '...') }}</p>
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