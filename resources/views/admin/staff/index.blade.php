<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Staff') }}
        </h2>
    </x-slot>

    <a href="/admin/staff/create" class="btn btn-primary">Tambah</a>
    <hr>
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
                        <a href="/admin/staff/{{ $s->nik }}" class="btn btn-primary">Detail</a>
                        <a href="/admin/staff/{{ $s->nik }}/edit" class="btn btn-warning">Edit</a>
                        <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')" action="/admin/staff/{{ $s->nik }}" method="post" class="d-inline">
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
