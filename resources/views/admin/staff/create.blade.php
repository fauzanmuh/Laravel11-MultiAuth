<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Staff') }}
        </h2>
    </x-slot>

    
<form method="POST" action="/admin/staff" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="nik" class="form-label">NIK</label>
        <input type="nik" class="form-control" name="nik" id="nik" value="{{ old('nik') }}">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="nama" class="form-control" name="nama" id="nama" value="{{ old('nama') }}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" id="alamat">{{ old('alamat') }}</textarea>
    </div>
    <div class="mb-3">
        <label for="no_hp" class="form-label">No Telepon</label>
        <input type="no_hp" class="form-control" name="no_hp" id="no_hp" value="{{ old('no_hp') }}">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
</x-app-layout>