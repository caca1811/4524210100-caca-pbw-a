@extends('layouts.app-public')

@section('content')
<div class="max-w-xl mx-auto bg-white rounded-lg shadow p-8">
    <h1 class="text-3xl font-bold mb-6 text-gray-800 text-center">Buku Tamu</h1>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('buku-tamu.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Nama Lengkap</label>
            <input type="text" name="nama" value="{{ old('nama') }}" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
            @error('nama') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Pesan</label>
            <textarea name="pesan" rows="4" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>{{ old('pesan') }}</textarea>
            @error('pesan') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-2 rounded hover:bg-blue-700 transition">Kirim Pesan</button>
    </form>
</div>
@endsection