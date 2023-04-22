@extends('admin.master')

@section('title')
    edit Blog Kategori
@endsection


@section('content')
<form action="{{ route('blogkategori.update', [$blogkategori]) }}" method="post">
    @method('put')
    @csrf
    <div class="form-group">
        <label for="nama">Judul Buku</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ $blogkategori->nama }}" required>
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi Buku</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="10" required>{{ $blogkategori->deskripsi }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('blogkategori.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection

@section('styles')
    <style>
        .ck-editor__editable_inline {
            min-height: 200px;
        }
    </style>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#deskripsi'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
