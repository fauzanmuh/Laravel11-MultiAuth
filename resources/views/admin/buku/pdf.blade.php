<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Halaman Cetak PDF</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-8">
    <h2 class="text-2xl font-bold mb-4">Daftar Buku</h2>
    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                <th class="py-2 px-4 bg-gray-200 border-b">Judul</th>
                <th class="py-2 px-4 bg-gray-200 border-b">Penulis</th>
                <th class="py-2 px-4 bg-gray-200 border-b">Penerbit</th>
                <th class="py-2 px-4 bg-gray-200 border-b">Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @isset($buku)
                @foreach ($buku as $data)
                    <tr class="bg-gray-100 hover:bg-gray-200">
                        <td class="py-2 px-4 border-b">{{ $data->judul }}</td>
                        <td class="py-2 px-4 border-b">{{ $data->penulis }}</td>
                        <td class="py-2 px-4 border-b">{{ $data->penerbit }}</td>
                        <td class="py-2 px-4 border-b">{{ $data->deskripsi }}</td>
                    </tr>
                @endforeach
            @endisset
        </tbody>
    </table>
</body>

</html>
