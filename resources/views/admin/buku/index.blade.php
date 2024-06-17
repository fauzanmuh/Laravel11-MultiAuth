<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <div class="container mx-auto p-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Daftar Buku</h1>
            <div>
                <form action="/admin/buku/cari" method="GET">
                    <div class="flex items-center">
                        <input type="text" name="cari" class="border border-gray-300 rounded-md px-2 py-1 mr-2"
                            placeholder="Cari buku...">
                        <button type="submit" class="btn btn-primary">Cari</button>
                        <a href="/admin/buku/create" class="btn btn-primary ml-2">Tambah</a>
                        <a href="/admin/buku/cetak" class="btn btn-secondary ml-2">Cetak PDF</a>
                    </div>
                </form>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Kode Buku</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Foto</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $s)
                    <tr>
                        <td>{{ $s->kode_buku }}</td>
                        <td>{{ $s->judul }}</td>
                        <td>{{ $s->penulis }}</td>
                        <td>{{ $s->penerbit }}</td>
                        <td>
                            @if ($s->foto)
                                <img src="{{ url('foto') . '/' . $s->foto }}" width="45px">
                        </td>
                @endif
                <td>{{ Str::limit($s->deskripsi, 20) }}</td>
                <td>
                    <a href="/admin/buku/{{ $s->kode_buku }}" class="btn btn-sm btn-primary">Detail</a>
                    <a href="/admin/buku/{{ $s->kode_buku }}/edit" class="btn btn-sm btn-warning">Edit</a>
                    <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                        action="/admin/buku/{{ $s->kode_buku }}" method="post" class="d-inline">
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
    </div>
</x-app-layout>
