<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - LaraPress</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen flex flex-col justify-between font-sans antialiased">

    <!-- Navbar -->
    <header class="border-b border-slate-800 bg-slate-950/50 backdrop-blur">
        <div class="max-w-4xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="text-xl font-bold bg-gradient-to-r from-indigo-400 to-cyan-400 bg-clip-text text-transparent">LaraPress</a>
            <nav class="space-x-4 text-sm font-medium">
                <a href="/" class="text-slate-400 hover:text-slate-200 transition">Home</a>
                <a href="/tentang-kami" class="text-indigo-400">Tentang Kami</a>
                <a href="/kontak" class="text-slate-400 hover:text-slate-200 transition">Kontak</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-3xl mx-auto px-6 py-12">
        <div class="bg-slate-800/50 border border-slate-700/50 rounded-2xl p-8 backdrop-blur">
            <h1 class="text-3xl font-bold mb-4 text-white">Tentang LaraPress</h1>
            <p class="text-slate-300 leading-relaxed mb-6">
                LaraPress adalah sebuah proyek blog sederhana yang dibuat untuk mempelajari dasar-dasar framework <strong class="text-indigo-400">Laravel 12</strong>, seperti pengenalan Route, Controller, dan Blade Templating Engine.
            </p>
            
            <div class="pt-4 border-t border-slate-700/50 flex gap-4">
                <a href="/" class="text-sm font-medium text-indigo-400 hover:text-indigo-300 transition">&larr; Kembali ke Utama</a>
                <a href="/kontak" class="text-sm font-medium text-slate-400 hover:text-slate-200 transition">Ke Halaman Kontak &rarr;</a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="border-t border-slate-800 py-6 text-center text-sm text-slate-500">
        &copy; 2026 LaraPress. All rights reserved.
    </footer>

</body>
</html>