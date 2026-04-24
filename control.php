<html>
<body>

<?php
// 1. Perbaikan Variabel (Menambahkan tanda kutip yang hilang)
$nama = "Alex"; 
$angka = 10;

// 2. Array (Sekumpulan data)
$data = ["Alex1", "Alex2", "Alex3"];

echo "<h2>Halo, nama saya $nama</h2>";
echo "Data pertama dari array: " . $data[0] . "<br><hr>";

// 3. Aritmatika (Operasi Matematika)
$a = 15;
$b = 5;
$tambah = $a + $b;
$kurang = $a - $b;
$kali   = $a * $b;
$bagi   = $a / $b;

echo "<h3>Aritmatika</h3>";
echo "$a + $b = $tambah <br>";
echo "$a * $b = $kali <br><hr>";

// 4. Perbandingan & Boolean (Hasilnya true atau false)
$x = 10;
$y = 5;

// Di PHP, 'true' ditampilkan sebagai 1, dan 'false' ditampilkan sebagai kosong/string kosong
$isGreater = $x > $y; // Hasilnya true
$isEqual   = $x == $y; // Hasilnya false

echo "<h3>Perbandingan & Boolean</h3>";
echo "Apakah $x > $y? Jawabannya: " . ($isGreater ? "Benar (True)" : "Salah (False)") . "<br>";
echo "Apakah $x == $y? Jawabannya: " . ($isEqual ? "Benar (True)" : "Salah (False)") . "<br>";

?>
<?php
// ... kode sebelumnya ...

// 5. Struktur Kendali: Switch Case
$hari = "Senin";

echo "<h3>Switch Case (Jadwal Harian)</h3>";

switch ($hari) {
    case "Senin":
        echo "Hari ini adalah $hari: Waktunya mulai bekerja!";
        break;
    case "Jumat":
        echo "Hari ini adalah $hari: Siap-siap akhir pekan.";
        break;
    case "Minggu":
        echo "Hari ini adalah $hari: Waktunya istirahat.";
        break;
    default:
        echo "Hari ini adalah $hari: Jalani hari seperti biasa.";
        break;
}

?>
</body>
</html>