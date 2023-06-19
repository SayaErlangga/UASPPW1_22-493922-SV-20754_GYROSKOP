# UASPPW1_22-493922-SV-20754_GYROSKOP
Nama : Erlangga Syifa Sutrisno,
Penjelasan website secara umum : 
website ini dibuat dengan tujuan untuk mempermudah kita dalam memesan tiket bioskop secara online jadi kita perlu repot-repot untuk mengantri didalam mall hanya untuk membeli tiket bioskop saja, kita dapat menggunakan waktu kita untuk mengantri dengan melakukan hal-hal produktif lainnya.

4 Kriteria yang dipenuhi :
1. Desain rapi mengikuti kaidah atau prinsip desain :
   Terdapat 5 kaidah dan prinsip desain yang saya gunakan yaitu :
   Kesederhanaan (Simplicity): Saya menggunakan kaidah ini disetiap halaman yang saya buat, contohnya seperti pada halaman home saya hanya   menampilkan preview yang menuju ke halaman movie dan promo, untuk halaman movie dan promo hanya menampilkan film dan promo-promo apa saja yang sedang berlangsung pada periode tersebut.
        
   Konsistensi (Consistency): Saya menggunakan container untuk menjaga konsistensi yang stabil sehingga setiap div memiliki panjang dan lebar yang sama
     Contoh kode untuk preview film:
   
      ```
      <div class="container-lg" style="margin-top: 30px;">
          <div class="d-lg-flex">
            <button onclick="nowPlaying();" id="button-np" style="background-color: rgb(23, 23, 23); color: white;">Now Playing</button><button onclick="upcoming();" id="button-up">Upcoming</button>
          </div>
            <div style="border: 1px solid black; background-color: rgb(23, 23, 23);">
                <div class="row " style="padding: 20px 35px;">
                    <div class="col text-end"><a href="movie.php" class="text-decoration-none" style="color: rgb(255, 255, 255);">See More</a></div>
                </div>
                <div class="d-lg-flex justify-content-around now-playing flex-wrap" id="mainMovie" style="margin-bottom: 40px;">
                  <div>
                    <img class="homeMovieList" src="https://th.bing.com/th/id/OIP.FPfhuAGDnRCdccTYMg-v-gHaKm?pid=ImgDet&w=699&h=1000&rs=1"></br>
                    <a href="movie.php"><button type="button" class="btn btn-warning book" style="border-radius: 0%;">Book Now</button></a>
                  </div>
                  <div>
                    <img class="homeMovieList" src="https://th.bing.com/th/id/OIP.9nrAqBVrRp0XL7bMV3Vp6wHaKe?pid=ImgDet&rs=1"></br>
                    <a href="movie.php"><button type="button" class="btn btn-warning book" style="border-radius: 0%;">Book Now</button></a>
                  </div>
                  <div>
                    <img class="homeMovieList" src="https://image.tmdb.org/t/p/original/g7BpD4B5jN4D0AAuI5v0hdfaZIN.jpg"></br>
                    <a href="movie.php"><button type="button" class="btn btn-warning book" style="border-radius: 0%;">Book Now</button></a>
                  </div>
                  <div>
                    <img class="homeMovieList" src="https://th.bing.com/th/id/R.0e9990f0ac297c119a4e7ecf150b208f?rik=bJgYAGnH3hTqsA&riu=http%3a%2f%2fmarcusgohmarcusgoh.com%2fwp%2fwp-content%2fuploads%2f2017%2f05%2fDoraemon-Poster.jpg&ehk=LHLztiLnaK35o8Aj5CHF5Fql%2fkDjAEXSj5Ez%2fYdu%2fNM%3d&risl=&pid=ImgRaw&r=0"></br>
                    <a href="movie.php"><button type="button" class="btn btn-warning book" style="border-radius: 0%;">Book Now</button></a>
                  </div>
                  <div>
                    <img class="homeMovieList" src="https://m.media-amazon.com/images/M/MV5BMjlmZmI5MDctNDE2YS00YWE0LWE5ZWItZDBhYWQ0NTcxNWRhXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg"></br>
                    <a href="movie.php"><button type="button" class="btn btn-warning book" style="border-radius: 0%;">Book Now</button></a>
                  </div>
              </div>
      </div>
      ```

      ```
      <div class="container-lg d-flex justify-content-around flex-wrap" style="margin-top: 20px;">
          <div style="background-color: rgb(0, 0, 0); width: 200px; height: 300px; border-radius: 10px; color: white;">
            <img src="https://static.disqonin.com/uploads/img/12-2019/1576134386780-promo-tix-id-promo-spesial-nomat-12-12.jpg" height="200px" width="200px">
            <h3 style="padding: 15px 0 0 15px; font-size: 13px; font-weight: bold;">Promo BRI</h3>
            <p style="padding: 0 0 15px 15px; font-size: 10px; font-weight: normal;">Anda Dapat mendapatkan promo dengan melakukan pem...</p>
          </div>
          <div style="background-color: rgb(0, 0, 0); width: 200px; height: 300px; border-radius: 10px; color: white;">
            <img src="https://static.disqonin.com/uploads/img/12-2019/1576134386780-promo-tix-id-promo-spesial-nomat-12-12.jpg" height="200px" width="200px">
            <h3 style="padding: 15px 0 0 15px; font-size: 13px; font-weight: bold;">Promo BRI</h3>
            <p style="padding: 0 0 15px 15px; font-size: 10px; font-weight: normal;">Anda Dapat mendapatkan promo dengan melakukan pem...</p>
          </div>
          <div style="background-color: rgb(0, 0, 0); width: 200px; height: 300px; border-radius: 10px; color: white;">
            <img src="https://static.disqonin.com/uploads/img/12-2019/1576134386780-promo-tix-id-promo-spesial-nomat-12-12.jpg" height="200px" width="200px">
            <h3 style="padding: 15px 0 0 15px; font-size: 13px; font-weight: bold;">Promo BRI</h3>
            <p style="padding: 0 0 15px 15px; font-size: 10px; font-weight: normal;">Anda Dapat mendapatkan promo dengan melakukan pem...</p>
          </div>
          <div style="background-color: rgb(0, 0, 0); width: 200px; height: 300px; border-radius: 10px; color: white;">
            <img src="https://static.disqonin.com/uploads/img/12-2019/1576134386780-promo-tix-id-promo-spesial-nomat-12-12.jpg" height="200px" width="200px">
            <h3 style="padding: 15px 0 0 15px; font-size: 13px; font-weight: bold;">Promo BRI</h3>
            <p style="padding: 0 0 15px 15px; font-size: 10px; font-weight: normal;">Anda Dapat mendapatkan promo dengan melakukan pem...</p>
          </div>
          <div style="background-color: rgb(0, 0, 0); width: 200px; height: 300px; border-radius: 10px; color: white;">
            <img src="https://static.disqonin.com/uploads/img/12-2019/1576134386780-promo-tix-id-promo-spesial-nomat-12-12.jpg" height="200px" width="200px">
            <h3 style="padding: 15px 0 0 15px; font-size: 13px; font-weight: bold;">Promo BRI</h3>
            <p style="padding: 0 0 15px 15px; font-size: 10px; font-weight: normal;">Anda Dapat mendapatkan promo dengan melakukan pem...</p>
          </div>
      </div>
      ```



    Hasil :
     ![image](https://github.com/SayaErlangga/UASPPW1_22-493922-SV-20754_GYROSKOP/assets/70986965/cec9fe5b-919a-4922-a417-b073ec12fda1)


3. Website responsive :
   Untuk membuat website menjadi responsive ada beberapa sistem yang saya gunakan, 
   Saya menggunakan class container ini karena memudahkan untuk mengatur penyesuaian content, untuk penerapan kurang lebih sama dengan no 1 karena container juga digunakan
untuk meningkatkan konsistensi, Saya menggunakan css @media untuk mengatur agar konten yang kita miliki dapat bersifat responsive, kode yang saya gunakan adalah jika
      ukuran website kita lebih rendah atau dibawah 700px maka item yang ada pada class movie akan memiliki lebar 150px dan tinggi yang menyesuaikan dari lebarnya
      Contoh Kode:

      ```
      @media (max-width: 700px) {
          .movie {
            width: 150px;
            height: auto;
            margin: 20px;
          }
      }
      ```

Contoh ukuran layar diatas 700px :
![image](https://github.com/SayaErlangga/UASPPW1_22-493922-SV-20754_GYROSKOP/assets/70986965/76316461-0879-48a6-92c0-12b00437e4ff)

Contoh ukuran layar dibawah 700px :
![image](https://github.com/SayaErlangga/UASPPW1_22-493922-SV-20754_GYROSKOP/assets/70986965/9ce1e312-eb71-40fa-92c0-77fa0f3e8812)


3. Direct feedback ke pengguna website :
   Saya memberikan perintah direct feedback ketika kita berhasil membuat user baru atau menambahkan pesanan film
   Kode dibawah pada html berfungsi untuk memanggil modal
   ```
   <button data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Create Account</button>
   ```
   Kode dibawah pada html berfungsi untuk mengisi form yang berisi data-data yang akan kita masukkan ke database kita, disini saya mengambil
   data nama, email, dan nomor telephone lalu dapat disubmit menuju halaman createaccount.php dengan menekan button create account.

   ```
   <form method="POST" action="createaccount.php">
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="name1">Enter your name</label>
                        <input type="text" id="name1" class="form-control" name="nama" />
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email1">Enter your email</label>
                        <input type="email" id="email1" class="form-control" name="email" />
                    </div>

                    <!-- Phone input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email1">Enter your phonenumber</label>
                        <input type="phone" id="phone1" class="form-control" name="phone" />
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block">Create Account</button>
   </form>
   ```

      Setelah itu kita mengambil data dari form sebelumnya, disini saya mengambil data yang sama yaitu nama, emali, dan nomor telephone, setelah itu melakukan koneksi ke database dan memasukkan data
    tersebut ke kolom yang sudah diatur disini kolom yang dipakai yaitu email, phone dan username, setelah akun terbuat maka akan menampilkan alert 
    berupa teks "akun anda telah dibuat"
  ```
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
```
   
4. Konten dinamis dari database :
   Untuk konten dinamis saya membuatnya di halaman order, ini berisi isi dari database film yang telah dipesan
   ```
       <div class="container-lg" style="margin: 50px;">
        <div class="d-lg-inline-flex flex-wrap">
            <?php
              include'koneksi.php';
              $detail = mysqli_query($conn, "select * from detail");
              foreach ($detail as $value){
              echo"
                      <div style='margin: 20px;'>
                          <table>
                              <tr>
                                  <td style='text-align: center;  color: white;' class='bg-dark'>".$value['nama_user']."</td>
                              </tr>
                              <tr>
                                  <td><img class='movie' width='280px' height='400px' src='".$value['cover_film']."'></td>
                              </tr>
                              <tr>
                                  <td style='padding: 10px; color: white;' class='bg-dark'>Judul Film : ".$value['judul_film']."</td>
                              </tr>
                              <tr>
                                  <td style='padding: 10px; color: white;' class='bg-dark'>Jumlah Kursi : ".$value['jumlah_kursi']." Kursi</td>
                              </tr>
                              <tr>
                                  <td style='padding: 10px; color: white;' class='bg-dark'>Total Harga : Rp.".$value['total_harga']."</td>
                              </tr>
                          </table>
                      </div>";
              }
            ?>
        </div>
    </div>
   ```
    Disini saya menggunakan metode foreach untuk mengambil seluruh data lalu memasangkan value dari kolom pada database sesuai dengan kolom yang
   dituju pada html, contohnya untuk kolom user saya menggambil $value['nama_user'] untuk mengambil kolom nama_user dari tabel detail
