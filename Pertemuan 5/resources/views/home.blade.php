@extends('layouts.app')

@section('content')
<div class="bg-blue-600 text-white rounded-lg p-8 mb-8 text-center">
    <h1 class="text-4xl font-bold mb-4">Selamat Datang di SMP Mentari</h1>
    <p class="text-lg">Mewujudkan generasi yang cerdas, berkarakter, dan berprestasi.</p>
</div>

<h2 class="text-2xl font-bold mb-6 text-gray-800">Kegiatan Terbaru</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @forelse($kegiatans as $kegiatan)
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-xl font-semibold mb-2 text-gray-800">{{ $kegiatan->judul }}</h3>
            <p class="text-gray-600 mb-4">{{ Str::limit($kegiatan->deskripsi, 100) }}</p>
            <span class="text-sm text-gray-400">{{ $kegiatan->created_at->format('d M Y') }}</span>
        </div>
    @empty
        <p class="text-gray-500 col-span-3">Belum ada kegiatan yang dipublikasikan.</p>
    @endforelse
</div>
@endsection