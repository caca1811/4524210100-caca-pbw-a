<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata Mahasiswa</title>
    <!-- Menggunakan Tailwind CSS CDN agar tampilan rapi dan modern -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen py-10">
    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md border border-gray-100">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Form Biodata Mahasiswa</h2>
        
        <!-- Form menggunakan method POST untuk mengirim data -->
        <form action="" method="POST" class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Nama Lengkap:</label>
                <input type="text" name="nama" value="Syalsabila Putri Irawan" required 
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">NIM:</label>
                <input type="text" name="nim" value="4524210100" required 
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Program Studi / Jurusan:</label>
                <input type="text" name="prodi" value="Teknik Informatika" required 
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Hobi:</label>
                <input type="text" name="hobi" placeholder="Masukkan hobi" required 
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <button type="submit" name="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200 font-semibold shadow">
                Tampilkan Biodata
            </button>
        </form>

        <!-- Proses PHP untuk Menampilkan Data setelah Tombol Diklik -->
        <?php
        if (isset($_POST['submit'])) {
            $nama = htmlspecialchars($_POST['nama']);
            $nim = htmlspecialchars($_POST['nim']);
            $prodi = htmlspecialchars($_POST['prodi']);
            $hobi = htmlspecialchars($_POST['hobi']);

            echo "<div class='mt-6 p-4 bg-blue-50 border border-blue-200 rounded-lg text-gray-800 space-y-2'>";
            echo "<h3 class='font-bold text-lg text-blue-900 border-b pb-1'>Hasil Output Biodata:</h3>";
            echo "<p><strong>Nama:</strong> $nama</p>";
            echo "<p><strong>NIM:</strong> $nim</p>";
            echo "<p><strong>Program Studi:</strong> $prodi</p>";
            echo "<p><strong>Hobi:</strong> $hobi</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>