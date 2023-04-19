@extends('admin.master')

@section('title')
    Kategori Destinasi
@endsection

@section('subtitle')
    Form Edit
@endsection

@section('content')
<form action="{{ route('destinasikategori.update', ['destinasikategori' => $destinasi_kategori->id]) }}" method="post">
    @method('put')
    @csrf
    <div class="form-group">
        <label for="nama">Nama Kategori*</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ $destinasi_kategori->nama }}" required>
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi Kategori*</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="10" required>{{ $destinasi_kategori->deskripsi }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('destinasikategori.index') }}" class="btn btn-warning">Batal</a>
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