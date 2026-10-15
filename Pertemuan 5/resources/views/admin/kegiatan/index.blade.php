<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Daftar Kegiatan</h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <a href="{{ route('admin.kegiatan.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block hover:bg-blue-700">+ Tambah Kegiatan</a>

            @if(session('success'))
                <div class="bg-green-100 text-green-700 p-3 rounded mb-4">{{ session('success') }}</div>
            @endif

            <table class="w-full border-collapse border border-gray-200 mt-4">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-200 px-4 py-2">Judul</th>
                        <th class="border border-gray-200 px-4 py-2">Deskripsi</th>
                        <th class="border border-gray-200 px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($kegiatans as $kegiatan)
                        <tr>
                            <td class="border border-gray-200 px-4 py-2 font-semibold">{{ $kegiatan->judul }}</td>
                            <td class="border border-gray-200 px-4 py-2">{{ Str::limit($kegiatan->deskripsi, 50) }}</td>
                            <td class="border border-gray-200 px-4 py-2 text-center space-x-2">
                                <a href="{{ route('admin.kegiatan.edit', $kegiatan->id) }}" class="text-yellow-600 hover:underline">Edit</a>
                                <form action="{{ route('admin.kegiatan.destroy', $kegiatan->id) }}" method="POST" class="inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Yakin hapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="3" class="text-center p-4 text-gray-500">Belum ada data kegiatan.</td></tr>
                    @endforelse
                </tbody>
            </table>
            <div class="mt-4">{{ $kegiatans->links() }}</div>
        </div>
    </div>
</x-app-layout>