<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Student</title>
</head>
<body>
    <h2>Form Nilai Student</h2>
    <form method="POST" action="">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="kelas">Kelas:</label><br>
        <input type="text" id="kelas" name="kelas" required><br><br>

        <label for="nilai_tugas">Nilai Tugas:</label><br>
        <input type="number" id="nilai_tugas" name="nilai_tugas" required><br><br>

        <label for="nilai_projek">Nilai Projek:</label><br>
        <input type="number" id="nilai_projek" name="nilai_projek" required><br><br>

        <label for="nilai_mt">Nilai MT:</label><br>
        <input type="number" id="nilai_mt" name="nilai_mt" required><br><br>

        <label for="absensi">Absensi (%):</label><br>
        <input type="number" id="absensi" name="absensi" required><br><br>

        <input type="submit" name="submit" value="Submit">
        <input type="reset" value="Cancel">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Ambil nilai dari form
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $nilai_tugas = $_POST['nilai_tugas'];
        $nilai_projek = $_POST['nilai_projek'];
        $nilai_mt = $_POST['nilai_mt'];
        $absensi = $_POST['absensi'];

        // Hitung total nilai
        $total_nilai = ($nilai_tugas * 0.30) + ($nilai_projek * 0.50) + ($nilai_mt * 0.20);

        // Tentukan keterangan lulus atau tidak menggunakan ternary operator
        $keterangan = ($total_nilai > 75 && $absensi > 75) ? "Lulus" : "Tidak Lulus";

        // Tampilkan hasil
        echo "<h3>Hasil Nilai</h3>";
        echo "Nama Student: " . $nama . "<br>";
        echo "Kelas: " . $kelas . "<br>";
        echo "Total Nilai: " . number_format($total_nilai, 2) . "<br>";
        echo "Keterangan: " . $keterangan . "<br>";
    }
    ?>
</body>
</html>
