<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP Mentari</title>
    
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <nav class="bg-white shadow py-4 mb-6">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <a href="<?php echo e(route('home')); ?>" class="text-xl font-bold text-blue-600">SMP Mentari</a>
            <div class="space-x-4">
                <a href="<?php echo e(route('home')); ?>" class="text-gray-700 hover:text-blue-600">Beranda</a>
                <a href="<?php echo e(route('profil')); ?>" class="text-gray-700 hover:text-blue-600">Profil</a>
                <a href="<?php echo e(route('kegiatan.index')); ?>" class="text-gray-700 hover:text-blue-600">Kegiatan</a>
                <a href="<?php echo e(route('buku-tamu.create')); ?>" class="text-gray-700 hover:text-blue-600">Buku Tamu</a>
                <?php if(auth()->guard()->check()): ?>
                    <a href="<?php echo e(route('admin.dashboard')); ?>" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Admin Dashboard</a>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" class="text-blue-600 hover:underline">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-6 min-h-screen">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer class="bg-white shadow py-6 mt-12 text-center text-gray-600">
        <p>&copy; <?php echo e(date('Y')); ?> SMP Mentari. All rights reserved.</p>
    </footer>
</body>
</html><?php /**PATH C:\Users\ASUS\SMP-Mentari\resources\views/layouts/app.blade.php ENDPATH**/ ?>