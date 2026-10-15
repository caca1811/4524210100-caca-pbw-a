<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Daftar Pesan Tamu</h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            @if(session('success'))
                <div class="bg-green-100 text-green-700 p-3 rounded mb-4">{{ session('success') }}</div>
            @endif

            <table class="w-full border-collapse border border-gray-200">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-200 px-4 py-2">Nama</th>
                        <th class="border border-gray-200 px-4 py-2">Email</th>
                        <th class="border border-gray-200 px-4 py-2">Pesan</th>
                        <th class="border border-gray-200 px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pesanTamus as $tamu)
                        <tr>
                            <td class="border border-gray-200 px-4 py-2 font-semibold">{{ $tamu->nama }}</td>
                            <td class="border border-gray-200 px-4 py-2">{{ $tamu->email }}</td>
                            <td class="border border-gray-200 px-4 py-2">{{ $tamu->pesan }}</td>
                            <td class="border border-gray-200 px-4 py-2 text-center">
                                <form action="{{ route('admin.pesan-tamu.destroy', $tamu->id) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Hapus pesan ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="4" class="text-center p-4 text-gray-500">Belum ada pesan masuk.</td></tr>
                    @endforelse
                </tbody>
            </table>
            <div class="mt-4">{{ $pesanTamus->links() }}</div>
        </div>
    </div>
</x-app-layout>