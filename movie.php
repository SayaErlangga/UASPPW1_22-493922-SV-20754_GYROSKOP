<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        *{
          font-family: 'Poppins', sans-serif;
        }
        .nav-link{
            margin-right:30px;
            color:white;
        }
        .nav-link:hover{
          color: white;
        }
        h2 {
          width: 100%; 
          text-align: center; 
          border-bottom: 1px solid #000000; 
          border-top: 1px solid #000000; 
          line-height: 0.1em;
          margin: 10px 0 20px; 
        } 

        h2 span { 
            background:rgb(216, 216, 216); 
            color: rgb(0, 0, 0);
            padding:0 10px; 
        }
        .movie{
            width: 280px;
            height: 400px;
            margin: 20px;
        }
        @media (max-width: 700px) {
          .movie {
            width: 150px;
            height: auto;
            margin: 20px;
          }
        }
    </style>
</head>
<body style="background-color: rgb(216, 216, 216);" onload="revealakun()">
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

<!-- Now Playing -->
    <div style="margin-top: 50px; margin-bottom: 40px;">
        <h2><span>NOW PLAYING</span></h2>
    </div>

    <div class="container-lg">
        <div class="d-lg-inline-flex flex-wrap">
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" id="frontcover" onclick="ambilData(this.id)"><img class="movie" src="https://th.bing.com/th/id/OIP.FPfhuAGDnRCdccTYMg-v-gHaKm?pid=ImgDet&w=699&h=1000&rs=1"></a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" id="midsommar" onclick="ambilData(this.id)"><img class="movie" src="https://th.bing.com/th/id/OIP.9nrAqBVrRp0XL7bMV3Vp6wHaKe?pid=ImgDet&rs=1"></a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" id="violetevergarden" onclick="ambilData(this.id)"><img class="movie" src="https://image.tmdb.org/t/p/original/g7BpD4B5jN4D0AAuI5v0hdfaZIN.jpg"></a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" id="doraemon" onclick="ambilData(this.id)"><img class="movie" src="https://th.bing.com/th/id/R.0e9990f0ac297c119a4e7ecf150b208f?rik=bJgYAGnH3hTqsA&riu=http%3a%2f%2fmarcusgohmarcusgoh.com%2fwp%2fwp-content%2fuploads%2f2017%2f05%2fDoraemon-Poster.jpg&ehk=LHLztiLnaK35o8Aj5CHF5Fql%2fkDjAEXSj5Ez%2fYdu%2fNM%3d&risl=&pid=ImgRaw&r=0"></a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" id="spiritedaway" onclick="ambilData(this.id)"><img class="movie" src="https://m.media-amazon.com/images/M/MV5BMjlmZmI5MDctNDE2YS00YWE0LWE5ZWItZDBhYWQ0NTcxNWRhXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg"></a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" id="mencuriradensaleh" onclick="ambilData(this.id)"><img class="movie" src="https://i.pinimg.com/originals/0e/9c/aa/0e9caa14ea7a6e538423c72bd1b6d46f.jpg"></a>
        </div>
    </div>

<!-- Upcoming -->
    <div style="margin-top: 50px; margin-bottom: 40px;">
        <h2><span>UPCOMING</span></h2>
    </div>

    <div class="container-lg">
        <div class="d-lg-inline-flex flex-wrap ">
          <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal4" id="2012" onclick="ambilDataUp()"><img class="movie" src="https://i.pinimg.com/originals/0c/01/87/0c01870a8251d6949c8088db53d1da67.jpg"></a>
          <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal4" id="2012" onclick="ambilDataUp()"><img class="movie" src="https://i.pinimg.com/originals/0c/01/87/0c01870a8251d6949c8088db53d1da67.jpg"></a>
          <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal4" id="2012" onclick="ambilDataUp()"><img class="movie" src="https://i.pinimg.com/originals/0c/01/87/0c01870a8251d6949c8088db53d1da67.jpg"></a>
        </div>
    </div>
  
<!-- Modal -->
  <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">2012</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex justify-content-center" id="modalcontent">
            <table class="table-bordered" style="font-size: small;">
                <tr style="text-align: center;">
                    <td rowspan="2"><img width="140px" height="200px" src="https://i.pinimg.com/originals/0c/01/87/0c01870a8251d6949c8088db53d1da67.jpg" id="image1"></td>
                    <td style="width: 85px; height: 70px;"><span>Rating Film</span><br><span id="rating1">R</span></td>
                    <td style="width: 85px;">Genre Film<br><span id="genre1">Drama</span></td>
                    <td style="width: 110px;">Durasi Film<br><span id="durasi1">3 Jam 10 Menit</span></td>
                </tr>
                <tr>
                    <td colspan="3" style="vertical-align: top; padding: 10px;">Deskripsi<br><span id="deskripsi1">Film ini bercerita tentang kejadian di tahun 2012</span></td>
                </tr>
            </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex justify-content-center" id="modalcontent">
            <table class="table-bordered" style="font-size: small;">
                <tr style="text-align: center;">
                    <td rowspan="2"><img width="140px" height="200px" src="https://th.bing.com/th/id/OIP.FPfhuAGDnRCdccTYMg-v-gHaKm?pid=ImgDet&w=699&h=1000&rs=1" id="image"></td>
                    <td style="width: 85px; height: 70px;"><span>Rating Film</span><br><span id="rating"></span></td>
                    <td style="width: 85px;">Genre Film<br><span id="genre"></span></td>
                    <td style="width: 110px;">Durasi Film<br><span id="durasi"></span></td>
                </tr>
                <tr>
                    <td colspan="3" style="vertical-align: top; padding: 10px;">Deskripsi<br><span id="deskripsi"></span></td>
                </tr>
            </table>
        </div>
        <div class="modal-footer">
          <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1"><button type="button" class="btn btn-secondary" onclick="myOrder()">Order</button></a>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<!-- Modal Order-->
  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="orderJudul"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex justify-content-center" id="modalcontent">
            <table class="table-bordered" style="font-size: small;">
                <tr style="text-align: center;">
                    <td rowspan="2"><img width="140px" height="200px" id="orderFoto" src=""></td>
                    <td style="width: 280px;">
                      <div>
                      <p>Pilih Jumlah Kursi : </p>
                      </div>
                      <div>
                        <button onclick="kurangiAngka()" style="width: 30px; height: 30px; background-color: transparent; border: 1px solid black; margin-right: 5px;">-</button>
                        <span id="angka" style="display: inline-block; width: 30px; height: 30px; border: 1px solid black; padding: 5px;">1</span>
                        <button onclick="tambahAngka()" style="width: 30px; height: 30px; background-color: transparent; border: 1px solid black; margin-left: 5px;">+</button>
                      </div>
                    </td>
                </tr>
                <tr>
                    <td style="height: 50%; padding-left: 20px;">Total : <span id="totalHarga">Rp. 45000</span></td>
                </tr>
            </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal2" onclick="nextOrder()">Next</button>
          <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="backOrder()">Back</button>
        </div>
      </div>
    </div>
  </div>

<!-- Modal Detail Order-->
<form method="POST" action="prosesfilm.php">
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="orderJudul">Detail Order</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex justify-content-center" id="modalcontent">
            <table class="table-bordered" style="font-size: small;">
                <tr>
                  <td rowspan="3"><img width="140px" height="200px" id="detailOrderFoto" src=""></td>
                  <td id="namaDetailOrder" style="width: 20px; padding-left: 20px;"></td>
                </tr>
                <tr>
                  <td id="detailOrderJudul" style="width: 200px; padding-left: 20px;"></td>
                </tr>
                <tr>
                  <td id="jumlahKursiDetail" style="width: 200px; padding-left: 20px;"></td>
                </tr>
                <tr>
                  <td colspan="2" id="totalHargaDetail" style="height: 50px;"></td>
                </tr>
            </table>
            <input type="hidden" id="namaOrder" name="nama" />
            <input type="hidden" id="judulOrder" name="judul" />
            <input type="hidden" id="fotoOrder" name="foto" />
            <input type="hidden" id="kursiOrder" name="kursi" />
            <input type="hidden" id="totalOrder" name="total" />
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-secondary" onclick="orderDone()">Done</button>
          <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal1" onclick="backDetailOrder()">Back</button>
        </div>
      </div>
    </div>
  </div>
</form>
  
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
</body>
</html>