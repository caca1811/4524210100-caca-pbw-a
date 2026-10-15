<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ isset($kegiatan) ? 'Edit Kegiatan' : 'Tambah Kegiatan' }}</h2>
    </x-slot>

    <div class="py-12 max-w-2xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <form action="{{ isset($kegiatan) ? route('admin.kegiatan.update', $kegiatan->id) : route('admin.kegiatan.store') }}" method="POST">
                @csrf
                @if(isset($kegiatan)) @method('PUT') @endif

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Judul</label>
                    <input type="text" name="judul" value="{{ old('judul', $kegiatan->judul ?? '') }}" class="w-full border rounded px-3 py-2" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Deskripsi</label>
                    <textarea name="deskripsi" rows="5" class="w-full border rounded px-3 py-2" required>{{ old('deskripsi', $kegiatan->deskripsi ?? '') }}</textarea>
                </div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
            </form>
        </div>
    </div>
</x-app-layout>