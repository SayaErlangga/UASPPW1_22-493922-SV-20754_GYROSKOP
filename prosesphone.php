<?php
// Melakukan koneksi ke database (misalnya menggunakan MySQLi)
$koneksi = new mysqli('localhost', 'root', '', 'bioskop');

// Memeriksa apakah koneksi berhasil
if ($koneksi->connect_error) {
    die('Koneksi gagal: ' . $koneksi->connect_error);
}

// Mengambil data email dari database berdasarkan nama
$nama = $_POST['nama'];
$sql = "SELECT phone FROM users WHERE username = '$nama'";
$result = $koneksi->query($sql);

// Memeriksa apakah query berhasil
if ($result) {
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $email = $row['phone'];
        echo $email; // Mengembalikan email sebagai respons
    } else {
        echo "Data tidak ditemukan";
    }
} else {
    echo "Error: " . $koneksi->error;
}

// Menutup koneksi ke database
$koneksi->close();
?>
