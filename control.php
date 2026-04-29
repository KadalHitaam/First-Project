<?php
// 1. Hubungkan ke file koneksi
require 'koneksi.php';

// Sekarang variabel $koneksi dari koneksi.php sudah bisa digunakan di sini.
?>

<html>
<body>

<?php
// Contoh: Mengambil data nama dari database (Opsional)
// $query = mysqli_query($koneksi, "SELECT nama FROM users");
// $data = mysqli_fetch_all($query, MYSQLI_ASSOC);

$nama = "Alex"; 
$angka = 10;

// Data array statis (bisa diganti dengan data dari database nanti)
$data = ["Alex1", "Alex2", "Alex3"];

echo "<h2>Halo, nama saya $nama</h2>";
echo "Data pertama dari array: " . $data[0] . "<br><hr>";

$a = 15;
$b = 5;
$tambah = $a + $b;
$kurang = $a - $b;
$kali   = $a * $b;
$bagi   = $a / $b;

echo "<h3>Aritmatika</h3>";
echo "$a + $b = $tambah <br>";
echo "$a * $b = $kali <br><hr>";

$x = 10;
$y = 5;

$isGreater = $x > $y; // Hasilnya true
$isEqual   = $x == $y; // Hasilnya false

echo "<h3>Perbandingan & Boolean</h3>";
echo "Apakah $x > $y? Jawabannya: " . ($isGreater ? "Benar (True)" : "Salah (False)") . "<br>";
echo "Apakah $x == $y? Jawabannya: " . ($isEqual ? "Benar (True)" : "Salah (False)") . "<br>";
?>

<?php
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

<?php
echo "<h3>For Loop (Menghitung 1-5)</h3>";
for ($i = 1; $i <= 5; $i++) {
    echo "Nomor urut: $i <br>";
}

echo "<hr>";

echo "<h3>While Loop (Iterasi Array)</h3>";
$index = 0;

while ($index < count($data)) {
    echo "Isi data ke-$index adalah: " . $data[$index] . "<br>";
    $index++; 
}
?>

<?php
$data = ["Alex1", "Alex2", "Alex3", "Alex4", "Alex5"];
$jumlahData = count($data);

echo "<h3>Fungsi count()</h3>";
echo "Jumlah orang dalam array data adalah: **$jumlahData** orang.<br><hr>";

echo "<h3>Foreach Loop</h3>";
echo "Daftar nama dalam data: <br>";
echo "<ul>";
foreach ($data as $namaOrang) {
    echo "<li>Nama: $namaOrang</li>";
}
echo "</ul><hr>";

echo "<h3>Custom Function</h3>";

function sapaUser($nama, $umur) {
    return "Halo $nama, umur kamu adalah $umur tahun. Selamat belajar PHP!";
}

echo sapaUser("Alex", 20);
?>

</body>
</html>