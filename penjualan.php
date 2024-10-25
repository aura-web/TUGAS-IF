<!DOCTYPE html>
<html>
<head>
    <title>Program Menghitung Jumlah Pembelanjaan dengan Diskon</title>
</head>
<body>
    <h2>Hitung Jumlah Pembelanjaan dengan Diskon</h2>

    <!-- Form input harga dan diskon -->
    <form method="post" action="">
        Harga Buah (Rp): <input type="number" name="harga_buah" required><br><br>
        Harga Sayur (Rp): <input type="number" name="harga_sayur" required><br><br>
        Harga Gula (Rp): <input type="number" name="harga_gula" required><br><br>

        <!-- Input untuk persentase diskon -->
        Diskon Awal (%): <input type="number" name="diskon_awal" step="0.01" min="0" max="100" required><br><br>

        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    // Proses jika form disubmit
    if (isset($_POST['submit'])) {
        // Ambil data dari form
        $harga_buah = $_POST['harga_buah'];
        $harga_sayur = $_POST['harga_sayur'];
        $harga_gula = $_POST['harga_gula'];

        // Ambil persentase diskon dari input
        $diskon_awal = $_POST['diskon_awal'] / 100;

        // Total harga sebelum diskon
        $total_harga = $harga_buah + $harga_sayur + $harga_gula;

        // Menghitung jumlah diskon
        $jumlah_diskon = $total_harga * $diskon_awal;

        // Total harga setelah diskon
        $total_setelah_diskon = $total_harga - $jumlah_diskon;

        // Inisiasi variabel keterangan
        $keterangan = "";

        // Cek jika total harga sebelum diskon lebih dari Rp 75.000
        if ($total_harga > 75000) {
            $keterangan = "Selamat! Anda mendapatkan hadiah gelas cantik.";
        } else {
            $keterangan = "Belanja lebih banyak untuk mendapatkan hadiah.";
        }

        // Menampilkan hasil perhitungan
        echo "<h3>Hasil Perhitungan:</h3>";
        echo "<p>Total harga sebelum diskon: Rp " . number_format($total_harga, 2, ',', '.') . "</p>";
        echo "<p>Diskon Awal " . ($_POST['diskon_awal']) . "%: Rp " . number_format($jumlah_diskon, 2, ',', '.') . "</p>";
        echo "<p>Total diskon: Rp " . number_format($jumlah_diskon, 2, ',', '.') . "</p>";
        echo "<p>Total harga setelah diskon: Rp " . number_format($total_setelah_diskon, 2, ',', '.') . "</p>";

        // Menampilkan keterangan
        echo "<p><strong>Keterangan:</strong> $keterangan</p>";
    }
    ?>
</body>
</html>