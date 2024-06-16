<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Buku') }}
        </h2>
    </x-slot>

    <form method="POST" action="/admin/buku/{{ $data->kode_buku }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="kode_buku" class="form-label">Kode Buku</label>
            <input type="kode_buku" class="form-control" name="kode_buku" id="kode_buku" readonly value="{{ $data->kode_buku }}">
        </div>
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="judul" class="form-control" name="judul" id="judul" value="{{ $data->judul }}">
        </div>
        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="penulis" class="form-control" name="penulis" id="penulis" value="{{ $data->penulis }}">
        </div>
        <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="penerbit" class="form-control" name="penerbit" id="penerbit" value="{{ $data->penerbit }}">
        </div>
        @if ($data->foto)
        <div class="mb-3">
            <img style="max-width: 50px" src="{{ url('foto').'/'.$data->foto }}">
        </div>
        @endif
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" name="foto" id="foto" value="{{ $data->foto }}">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi">{{ $data->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update</button>
    </form>
</x-app-layout>
