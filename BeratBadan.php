<!DOCTYPE html>
<html>
<head>
    <title>Menghitung Berat Badan Ideal</title>
</head>
<body>
    <h2>Menghitung Berat Badan Ideal</h2>
    
    <!-- Form input data -->
    <form method="post" action="">
        Nama: <input type="text" name="nama" required><br><br>
        Gender: 
        <input type="radio" name="gender" value="pria" required> Pria
        <input type="radio" name="gender" value="wanita" required> Wanita<br><br>
        Tinggi Badan (cm): <input type="number" name="tinggi" step="0.01" required><br><br>
        Berat Badan Saat Ini (kg): <input type="number" name="berat" step="0.01" required><br><br>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $gender = $_POST['gender'];
        $tinggi = $_POST['tinggi'];
        $berat = $_POST['berat'];

        // Validasi input tinggi dan berat badan
        if (is_numeric($tinggi) && $tinggi > 0 && is_numeric($berat) && $berat > 0) {
            // Menghitung berat badan ideal berdasarkan gender
            if ($gender == 'pria') {
                $ideal = ($tinggi - 100) - (($tinggi - 100) * 0.10);
            } elseif ($gender == 'wanita') {
                $ideal = ($tinggi - 100) - (($tinggi - 100) * 0.15);
            }

            // Menentukan keterangan berdasarkan berat badan saat ini
            if ($berat < $ideal) {
                $keterangan = "Banyak makan!";
            } elseif ($berat == $ideal) {
                $keterangan = "Good job!";
            } else {
                $keterangan = "Lari dong di UI!";
            }

            // Tampilkan hasil lengkap
            echo "<h3>Hasil:</h3>";
            echo "Nama saya: $nama<br>";
            echo "Jenis kelamin saya: $gender<br>";
            echo "Tinggi badan saya: $tinggi cm<br>";
            echo "Berat badan ideal saya: " . number_format($ideal, 2) . " kg<br>";
            echo "Berat badan saya saat ini: $berat kg<br>";
            echo "Keterangan: $keterangan";
        } else {
            echo "<p>Masukkan tinggi dan berat badan yang valid!</p>";
        }
    }
    ?>
</body>
</html>