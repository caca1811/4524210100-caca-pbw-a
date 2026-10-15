<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP Mentari</title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <nav class="bg-white shadow py-4 mb-6">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-xl font-bold text-blue-600">SMP Mentari</a>
            <div class="space-x-4">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600">Beranda</a>
                <a href="{{ route('profil') }}" class="text-gray-700 hover:text-blue-600">Profil</a>
                <a href="{{ route('kegiatan.index') }}" class="text-gray-700 hover:text-blue-600">Kegiatan</a>
                <a href="{{ route('buku-tamu.create') }}" class="text-gray-700 hover:text-blue-600">Buku Tamu</a>
                @auth
                    <a href="{{ route('admin.dashboard') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Admin Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login</a>
                @endauth
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-6 min-h-screen">
        @yield('content')
    </main>

    <footer class="bg-white shadow py-6 mt-12 text-center text-gray-600">
        <p>&copy; {{ date('Y') }} SMP Mentari. All rights reserved.</p>
    </footer>
</body>
</html>