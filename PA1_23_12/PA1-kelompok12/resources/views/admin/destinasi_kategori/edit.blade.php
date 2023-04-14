@extends('admin.master')

@section('title')
    Edit Kategori Destinasi
@endsection

@section('subtitle')
    <a class="btn btn-warning" href="{{Route('destinasikategori.index')}}" role="button">kembali<i class="fa-regular fa-hand-back-point-left"></i></a>
@endsection

@section('content')
<form action="{{ route('destinasikategori.update', ['destinasikategori' => $destinasi_kategori->id]) }}" method="post">
    @method('put')
    @csrf
    <div class="form-group">
        <label for="nama">Judul Buku</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ $destinasi_kategori->title }}" required>
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi Buku</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ $destinasi_kategori->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('destinasikategori.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection