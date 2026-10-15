<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana - Praktikum PBW</title>
    <!-- Tailwind CSS CDN untuk styling -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Kalkulator PHP</h2>
        
        <!-- Form menggunakan metode POST sesuai materi HTTP Method -->
        <form action="" method="POST" class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Angka Pertama:</label>
                <input type="number" step="any" name="angka1" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Angka Kedua:</label>
                <input type="number" step="any" name="angka2" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Pilih Operasi:</label>
                <select name="operasi" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    <option value="tambah">Tambah (+)</option>
                    <option value="kurang">Kurang (-)</option>
                    <option value="kali">Kali (×)</option>
                    <option value="bagi">Bagi (÷)</option>
                </select>
            </div>

            <button type="submit" name="hitung" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200">Hitung</button>
        </form>

        <!-- Bagian Proses PHP untuk Menghitung Hasil -->
        <?php
        if (isset($_POST['hitung'])) {
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $operasi = $_POST['operasi'];
            $hasil = 0;
            $error = "";

            switch ($operasi) {
                case 'tambah':
                    $hasil = $angka1 + $angka2;
                    break;
                case 'kurang':
                    $hasil = $angka1 - $angka2;
                    break;
                case 'kali':
                    $hasil = $angka1 * $angka2;
                    break;
                case 'bagi':
                    if ($angka2 != 0) {
                        $hasil = $angka1 / $angka2;
                    } else {
                        $error = "Error: Pembagian dengan nol tidak diperbolehkan!";
                    }
                    break;
            }

            if ($error != "") {
                echo "<div class='mt-4 p-3 bg-red-100 text-red-700 rounded-md text-center'>$error</div>";
            } else {
                echo "<div class='mt-4 p-3 bg-green-100 text-green-700 rounded-md text-center font-semibold'>Hasil: $hasil</div>";
            }
        }
        ?>
    </div>
</body>
</html>