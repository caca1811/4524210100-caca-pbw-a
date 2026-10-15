@extends('layouts.app-public')

@section('content')
<h1 class="text-3xl font-bold mb-6 text-gray-800">Semua Kegiatan SMP Mentari</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
    @forelse($kegiatans as $kegiatan)
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-xl font-semibold mb-2 text-gray-800">{{ $kegiatan->judul }}</h3>
            <p class="text-gray-600 mb-4">{{ $kegiatan->deskripsi }}</p>
            <span class="text-sm text-gray-400">{{ $kegiatan->created_at->format('d M Y') }}</span>
        </div>
    @empty
        <p class="text-gray-500">Belum ada kegiatan tersedia.</p>
    @endforelse
</div>

<div>
    {{ $kegiatans->links() }}
</div>
@endsection