<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin SMP Mentari') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-700">Total Kegiatan</h3>
                    <p class="text-3xl font-bold text-blue-600 mt-2">{{ $totalKegiatan }}</p>
                    <a href="{{ route('admin.kegiatan.index') }}" class="text-sm text-blue-500 hover:underline mt-4 inline-block">Kelola Kegiatan &rarr;</a>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-700">Total Pesan Tamu</h3>
                    <p class="text-3xl font-bold text-green-600 mt-2">{{ $totalPesan }}</p>
                    <a href="{{ route('admin.pesan-tamu.index') }}" class="text-sm text-blue-500 hover:underline mt-4 inline-block">Kelola Pesan Tamu &rarr;</a>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Selamat Datang, Admin!</h3>
                <p class="text-gray-600">Gunakan panel navigasi di atas untuk mengelola data website SMP Mentari dengan mudah.</p>
            </div>
        </div>
    </div>
</x-app-layout>