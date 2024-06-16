<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Buku') }}
        </h2>
    </x-slot>

    <div class="container mx-auto p-6">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden flex">
            @if($data->foto)
            <img src="{{ url('foto').'/'.$data->foto }}" class="w-1/3 object-cover">
            @endif
            <div class="p-6 w-2/3">
                <h1 class="text-3xl font-bold mb-4">{{ $data->kode_buku }}</h1>
                <h1 class="text-3xl font-bold mb-4">{{ $data->judul }}</h1>
                <h2 class="text-xl font-semibold mb-2">Penulis: {{ $data->penulis }}</h2>
                <h2 class="text-xl font-semibold mb-2">Penerbit: {{ $data->penerbit }}</h2>
                <p class="text-gray-700 mb-4">{{ $data->deskripsi }}</p>
                <a href="{{ url()->previous() }}" class="text-indigo-600 hover:text-indigo-900">Back to list</a>
            </div>
        </div>
    </div>
</x-app-layout>
