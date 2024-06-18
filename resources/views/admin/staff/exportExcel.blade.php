<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Halaman Excel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-8">
    <h2 class="text-2xl font-bold mb-4">Daftar Staff</h2>
    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                <th class="py-2 px-4 bg-gray-200 border-b">NIK</th>
                <th class="py-2 px-4 bg-gray-200 border-b">Nama</th>
                <th class="py-2 px-4 bg-gray-200 border-b">Email</th>
                <th class="py-2 px-4 bg-gray-200 border-b">Alamat</th>
                <th class="py-2 px-4 bg-gray-200 border-b">No HP</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($data as $data)
                    <tr class="bg-gray-100 hover:bg-gray-200">
                        <td class="py-2 px-4 border-b">{{ $data->nik }}</td>
                        <td class="py-2 px-4 border-b">{{ $data->nama }}</td>
                        <td class="py-2 px-4 border-b">{{ $data->email }}</td>
                        <td class="py-2 px-4 border-b">{{ $data->alamat }}</td>
                        <td class="py-2 px-4 border-b">{{ $data->no_hp }}</td>
                    </tr>
                @endforeach
        </tbody>
    </table>
</body>

</html>
