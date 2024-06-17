<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Buku') }}
        </h2>
    </x-slot>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>

                    <div class="card-body">
                        <form method="POST" action="/admin/buku" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <label for="kode_buku" class="form-label">Kode Buku</label>
                                <input type="kode_buku" class="form-control" name="kode_buku" id="kode_buku"
                                    value="{{ old('kode_buku') }}">
                            </div>
                            <div class="col-md-6">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="judul" class="form-control" name="judul" id="judul"
                                    value="{{ old('judul') }}">
                            </div>
                            <div class="col-md-6">
                                <label for="penulis" class="form-label">Penulis</label>
                                <input type="penulis" class="form-control" name="penulis" id="penulis"
                                    value="{{ old('penulis') }}">
                            </div>
                            <div class="col-md-6">
                                <label for="penerbit" class="form-label">Penerbit</label>
                                <input type="penerbit" class="form-control" name="penerbit" id="penerbit"
                                    value="{{ old('penerbit') }}">
                            </div>
                            <div class="col-md-6">
                                <label for="foto" class="form-label">Foto</label>
                                <input type="file" class="form-control border border-gray-300" name="foto" id="foto"
                                    value="{{ old('foto') }}">
                            </div>
                            <div class="col-md-6">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="deskripsi">{{ old('deskripsi') }}</textarea>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="flex justify-between items-center mb-4" style="margin-top: 10px;">
                                    <button type="submit" class="btn btn-primary">
                                        Tambah
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
