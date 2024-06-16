<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Buku') }}
        </h2>
    </x-slot>

    <a href="/admin/buku/create" class="btn btn-primary">Tambah</a>
    <hr>
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
                            <img src="{{ url('foto').'/'.$s->foto }}" width="45px"></td>
                        @endif
                        <td>{{ $s->penerbit }}</td>
                    <td>
                        <a href="/admin/buku/{{ $s->kode_buku }}" class="btn btn-primary">Detail</a>
                        <a href="/admin/buku/{{ $s->kode_buku }}/edit" class="btn btn-warning">Edit</a>
                        <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')" action="/admin/buku/{{ $s->kode_buku }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
</x-app-layout>
