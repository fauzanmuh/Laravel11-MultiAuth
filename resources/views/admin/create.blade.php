<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Buku') }}
        </h2>
    </x-slot>

    
<form method="POST" action="/admin/buku" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="kode_buku" class="form-label">Kode Buku</label>
        <input type="kode_buku" class="form-control" name="kode_buku" id="kode_buku" value="{{ old('kode_buku') }}">
    </div>
    <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input type="judul" class="form-control" name="judul" id="judul" value="{{ old('judul') }}">
    </div>
    <div class="mb-3">
        <label for="penulis" class="form-label">Penulis</label>
        <input type="penulis" class="form-control" name="penulis" id="penulis" value="{{ old('penulis') }}">
    </div>
    <div class="mb-3">
        <label for="penerbit" class="form-label">Penerbit</label>
        <input type="penerbit" class="form-control" name="penerbit" id="penerbit" value="{{ old('penerbit') }}">
    </div>
    <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
        <input type="file" class="form-control" name="foto" id="foto" value="{{ old('foto') }}">
    </div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <textarea class="form-control" name="deskripsi" id="deskripsi">{{ old('deskripsi') }}</textarea>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
</x-app-layout>