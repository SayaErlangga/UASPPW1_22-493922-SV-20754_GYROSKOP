<?php
  // Mengakses data yang diposting
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  // Melakukan koneksi ke database (misalnya menggunakan MySQLi)
  $koneksi = new mysqli('localhost', 'root', '', 'bioskop');

  // Memeriksa apakah koneksi berhasil
  if ($koneksi->connect_error) {
    die('Koneksi gagal: ' . $koneksi->connect_error);
  }

  // Menyimpan data ke dalam database
  $sql = "INSERT INTO users (username, email, phone) VALUES ('$nama', '$email', $phone)";
  if ($koneksi->query($sql) === TRUE) { ?>
    <script>
        window.location.href = "account.php";
        alert("Akun Anda Telah Dibuat");
        
    </script>
    <?php
  } else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
  }

  // Menutup koneksi ke database
  $koneksi->close();
?>
