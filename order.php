<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
    <style>
        *{
          font-family: 'Poppins', sans-serif;
        }
        .nav-link{
            margin-right:30px;
            color: white;
        }
        .nav-link:hover{
          color: white;
        }
    </style>
</head>
<body onload="revealakun()" style="background-color: rgb(216, 216, 216);">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top" id="navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="home.php" style="margin: 10px 10px 10px 30px; color: white;"><img src="logo.png" width="auto" height="20px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="toggle-button1.png" width="40px" height="40px"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="movie.php">Movie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="promo.php">Promotion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="order.php">Order</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="account.php" id="akun-nav"></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Content -->
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

    <div>
  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white bg-dark"
          >
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              Gyroskop
            </h6>
            <p>
              Gyroskop merupakan sebuah perusahaan yang
              bergerak di bidang penyedia layanan hiburan
              berupa film.
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              Link
            </h6>
            <p>
              <a class="text-white" href="movie.php">Movie</a>
            </p>
            <p>
              <a class="text-white" href="promo.php">Promo</a>
            </p>
            <p>
              <a class="text-white" href="order.php">Order</a>
            </p>
            <p>
              <a class="text-white" href="account.php">Profile</a>
            </p>
          </div>

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
            <p><i class="fas fa-envelope mr-3"></i> gyroskop@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 62 872 321 32</p>
            <p><i class="fas fa-print mr-3"></i> + 62 172 123 31</p>
          </div>
          <!-- Grid column -->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-3">

      <!-- Section: Copyright -->
      <section class="p-3 pt-0">
        <div class="row d-flex align-items-center">
          <!-- Grid column -->
          <div class="col-md-7 col-lg-8 text-center text-md-start">
            <!-- Copyright -->
            <div class="p-3">
              © 2023 Copyright:
              <a class="text-white" href="https://mdbootstrap.com/"
                 >Gyroskop.com</a
                >
            </div>
            <!-- Copyright -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
            <!-- Facebook -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-facebook-f"></i
              ></a>

            <!-- Twitter -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-twitter"></i
              ></a>

            <!-- Google -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-google"></i
              ></a>

            <!-- Instagram -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-instagram"></i
              ></a>
          </div>
          <!-- Grid column -->
        </div>
      </section>
      <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
  </footer>
  <!-- Footer -->
</div>
<!-- End of .container -->

  <script src="jquery.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/cf5d53a65e.js" crossorigin="anonymous"></script>
  <script>
    function revealakun(){
      if (localStorage.getItem("simpanAkun") == "Login"){
        document.getElementById('akun-nav').innerHTML = localStorage.getItem("simpanAkun");
      }else{
        document.getElementById('akun-nav').innerHTML = "Hi, " + localStorage.getItem("simpanAkun");
      }    
    }
  </script>
</body>
</html>