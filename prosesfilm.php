<?php
  // Mengakses data yang diposting
  $nama = $_POST['nama'];
  $judul = $_POST['judul'];
  $foto = $_POST['foto'];
  $kursi = $_POST['kursi'];
  $total = $_POST['total'];

  // Melakukan koneksi ke database (misalnya menggunakan MySQLi)
  $koneksi = new mysqli('localhost', 'root', '', 'bioskop');

  // Memeriksa apakah koneksi berhasil
  if ($koneksi->connect_error) {
    die('Koneksi gagal: ' . $koneksi->connect_error);
  }

  // Menyimpan data ke dalam database
  $sql = "INSERT INTO detail (nama_user, judul_film, jumlah_kursi, total_harga, cover_film) VALUES ('$nama','$judul', $kursi, $total, '$foto')";
  if ($koneksi->query($sql) === TRUE) { ?>
    <script>
        window.location.href = "movie.php";
        alert("Pesanan Anda Telah Diproses");
        
    </script>
    <?php
  } else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
  }

  // Menutup koneksi ke database
  $koneksi->close();
?>