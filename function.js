// Mengambil referensi tombol dan input dari HTML
const btnLanjut = document.getElementById('btn-lanjut');
const btnKeluar = document.getElementById('btn-keluar');
const inputNama = document.getElementById('nama');
const inputProdi = document.getElementById('prodi');
const inputSemester = document.getElementById('semester');

// Fungsi untuk tombol Lanjut
btnLanjut.addEventListener('click', function() {
    // Mengambil teks yang diketik pengguna
    const nama = inputNama.value.trim();
    const prodi = inputProdi.value.trim();
    const semester = inputSemester.value.trim();

    // Validasi: Mengecek apakah ada kolom yang belum diisi
    if (nama === '' || prodi === '' || semester === '') {
        // Jika ada yang kosong, munculkan peringatan
        alert('Peringatan: Semua data (Nama, Prodi, Semester) harus diisi terlebih dahulu!');
    } else {
        // Jika semua terisi, tampilkan data
        alert(`Data Berhasil Diterima!\n\nNama: ${nama}\nProdi: ${prodi}\nSemester: ${semester}\n\nSilakan melanjutkan ke halaman berikutnya.`);
        // Di sini kamu bisa menambahkan logika redirect, misal: window.location.href = "halaman-lain.php";
    }
});

// Fungsi untuk tombol Keluar
btnKeluar.addEventListener('click', function() {
    // Meminta konfirmasi dari pengguna sebelum menghapus data
    const konfirmasi = confirm('Apakah kamu yakin ingin membatalkan dan keluar?');
    
    if (konfirmasi) {
        // Jika pengguna memilih "OK", kosongkan semua nilai input
        inputNama.value = '';
        inputProdi.value = '';
        inputSemester.value = '';
        alert('Formulir telah dikosongkan.');
    }
});