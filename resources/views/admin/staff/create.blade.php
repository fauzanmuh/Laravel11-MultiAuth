<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Staff') }}
        </h2>
    </x-slot>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>

                    <div class="card-body">
                        <form method="POST" action="/admin/staff" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <label for="nik" class="col-md-4 col-form-label text-md-right">NIK</label>
                                <input type="nik" class="form-control" name="nik" id="nik"
                                    value="{{ old('nik') }}">
                            </div>
                            <div class="col-md-6">
                                <label for="nama" class="col-md-4 col-form-label text-md-right">Nama</label>
                                <input type="nama" class="form-control" name="nama" id="nama"
                                    value="{{ old('nama') }}">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    value="{{ old('email') }}">
                            </div>
                            <div class="col-md-6">
                                <label for="alamat" class="col-md-4 col-form-label text-md-right">Alamat</label>
                                <textarea class="form-control" name="alamat" id="alamat">{{ old('alamat') }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="no_hp" class="col-md-4 col-form-label text-md-right">No Telepon</label>
                                <input type="no_hp" class="form-control" name="no_hp" id="no_hp"
                                    value="{{ old('no_hp') }}">
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
