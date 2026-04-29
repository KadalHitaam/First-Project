<?php
// Konfigurasi Database
$host     = "localhost";
$user     = "root"; // Username default untuk XAMPP/WAMP/Laragon
$password = "";     // Kosongkan jika kamu menggunakan XAMPP default
$database = "db_latihan"; // Sesuaikan dengan nama database yang kamu buat di phpMyAdmin

// Membuat koneksi ke database
$koneksi = mysqli_connect($host, $user, $password, $database);

// Mengecek apakah koneksi berhasil atau gagal
if (!$koneksi) {
    // Jika gagal, program akan berhenti dan menampilkan pesan error
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Opsional: Hapus tanda // di bawah ini untuk mengetes koneksi
// echo "Koneksi berhasil!";
?>