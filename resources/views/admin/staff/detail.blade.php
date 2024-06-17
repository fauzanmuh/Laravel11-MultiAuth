<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Staff') }}
        </h2>
    </x-slot>

    <div class="container mx-auto p-6">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden flex">
            <div class="p-6 w-2/3">
                <h1 class="text-3xl font-bold mb-4">NIK: {{ $data->nik }}</h1>
                <h2 class="text-xl font-semibold mb-2">Nama Pegawai: {{ $data->nama }}</h2>
                <h2 class="text-xl font-semibold mb-2">Email: {{ $data->email }}</h2>
                <h2 class="text-xl font-semibold mb-2">No Tlp. {{ $data->no_hp }}</h2>
                <p class="text-gray-700 mb-4">Alamat: {{ $data->alamat }}</p>
                <a href="{{ url()->previous() }}" class="text-indigo-600 hover:text-indigo-900">Back to list</a>
            </div>
        </div>
    </div>
</x-app-layout>
