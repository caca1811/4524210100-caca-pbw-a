<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang - LaraPress</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen flex flex-col justify-between font-sans antialiased">

    <!-- Navbar -->
    <header class="border-b border-slate-800 bg-slate-950/50 backdrop-blur">
        <div class="max-w-4xl mx-auto px-6 py-4 flex justify-between items-center">
            <span class="text-xl font-bold bg-gradient-to-r from-indigo-400 to-cyan-400 bg-clip-text text-transparent">LaraPress</span>
            <nav class="space-x-4 text-sm font-medium">
                <a href="/" class="text-indigo-400">Dashboard</a>
                <a href="/tentang-kami" class="text-slate-400 hover:text-slate-200 transition">Tentang Kami</a>
                <a href="/kontak" class="text-slate-400 hover:text-slate-200 transition">Kontak</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto px-6 py-16 text-center">
        <span class="inline-block px-3 py-1 mb-4 text-xs font-semibold tracking-wider text-indigo-400 uppercase bg-indigo-500/10 rounded-full border border-indigo-500/20">
            Laravel 12 Project
        </span>
        <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight mb-4 text-white">
            Selamat Datang di Blog <span class="bg-gradient-to-r from-indigo-400 to-cyan-400 bg-clip-text text-transparent">LaraPress</span>
        </h1>
        <p class="text-lg text-slate-400 max-w-2xl mx-auto mb-8">
            Ini adalah halaman utama dari aplikasi blog sederhana kita yang dibangun menggunakan framework Laravel 12.
        </p>
        
        <div class="flex justify-center gap-4">
            <a href="/tentang-kami" class="px-6 py-3 rounded-lg bg-indigo-600 hover:bg-indigo-500 text-white font-medium shadow-lg shadow-indigo-500/25 transition">
                Lihat Tentang Kami
            </a>
            <a href="/kontak" class="px-6 py-3 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-200 font-medium border border-slate-700 transition">
                Hubungi Kami
            </a>
        </div>
    </main>

    <!-- Footer -->
    <footer class="border-t border-slate-800 py-6 text-center text-sm text-slate-500">
        &copy; 2026 LaraPress. All rights reserved.
    </footer>

</body>
</html>