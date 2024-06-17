<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <div class="container mx-auto p-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Daftar Staff</h1>
            <div>
                <form action="/admin/staff/cari" method="GET">
                    <div class="flex items-center">
                        <input type="text" name="cari" class="border border-gray-300 rounded-md px-2 py-1 mr-2"
                            placeholder="Cari staff...">
                        <button type="submit" class="btn btn-primary">Cari</button>
                        <a href="/admin/staff/create" class="btn btn-primary ml-2">Tambah</a>
                        <a href="/admin/staff/cetak" class="btn btn-secondary ml-2">Cetak PDF</a>
                    </div>
                </form>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $s)
                    <tr>
                        <td>{{ $s->nik }}</td>
                        <td>{{ $s->nama }}</td>
                        <td>{{ $s->email }}</td>
                        <td>{{ $s->alamat }}</td>
                        <td>{{ $s->no_hp }}</td>
                        <td>
                            <a href="/admin/staff/{{ $s->nik }}" class="btn btn-sm btn-primary">Detail</a>
                            <a href="/admin/staff/{{ $s->nik }}/edit" class="btn btn-sm btn-warning">Edit</a>
                            <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                action="/admin/staff/{{ $s->nik }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
</x-app-layout>
