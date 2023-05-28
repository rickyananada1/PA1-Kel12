@extends('admin.master')

@section('title')
    List Kontributor
@endsection

@section('subtitle')
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
                            <table class="table table-bordered" id="example1">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Nama Contributor</th>
                                        <th scope="col">Isi Testimoni</th>
                                        <th scope="col">View</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($testimonies as $testimony)
                                        <tr class="product-item">
                                            <td>{{ $testimony->contributor->name }}</td>
                                            <td class="description">{{ Str::limit($testimony->description, 20) }}</td>
                                            <td>
                                                <button class="btn btn-info btn-sm btn-action"
                                                    data-title="{{ $testimony->contributor->name }}"
                                                    data-description="{{ $testimony->description }}"
                                                    data-image="@if ($testimony->contributor){{ Storage::url($testimony->contributor->image) }}@else{{ asset('Template/dist/img/profile.jpeg') }}@endif">
                                                    <i class="fas fa-eye" data-toggle="tooltip" data-placement="top"></i>
                                                </button>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.updateTestimony', $testimony->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit"
                                                        class="btn btn-sm @if ($testimony->status == 1) btn-success @else btn-danger @endif">
                                                        @if ($testimony->status == 1)
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

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>
    <script>
        function showProductDetails(title, description, image) {
            Swal.fire({
                title: title,
                html: `<img src="${image}" alt="${title} Profile Image" style="max-width: 200px; max-height: 200px; border-radius: 50%;"><br>${description}`,
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            const eyeButtons = document.querySelectorAll('.btn-action');
            eyeButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    const title = this.dataset.title;
                    const description = this.dataset.description;
                    const image = this.dataset.image;

                    showProductDetails(title, description, image);
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#example1').DataTable();
        });
    </script>
    <script src="https://cdn.datatables.net/v/bs4/dt-1.13.4/datatables.min.js"></script>
@endpush
