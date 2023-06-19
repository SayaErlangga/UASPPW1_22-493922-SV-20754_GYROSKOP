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
        .gradient-custom {
            background: #f6d365;
            background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));
            background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
        }

        .select{
          background-color: transparent;
          border: none;
          color: black;
        }
        button{
          background-color: transparent;
          border: none;
          color: red;
          font-weight: bold;
        }

        .custom-select select {
          appearance: none;
          -webkit-appearance: none;
          -moz-appearance: none;
        }

    </style>
    <title>Document</title>
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
  <section class="vh-100" style="background-color: #f4f5f7;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6 mb-4 mb-lg-0">
          <div class="card mb-3" style="border-radius: .5rem;">
            <div class="row g-0">
              <div class="col-md-4 gradient-custom text-center text-white"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                    <img src="profile.png"
                      alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                    <div class="custom-select" style="margin-top: -30px;">
                      <select name="nama" class="select" id="nama" onchange="myNewFunction(this)">
                        <?php
                          include'koneksi.php';
                          $user = mysqli_query($conn, "select * from users");
                          foreach ($user as $value){
                            echo"
                            <option id='user'>".$value['username']."</option>";
                          }
                        ?>
                      </select>
                    </div>
                <button onclick="logout()" style="margin-top: 20px;">Logout</button><br>
                <button data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Create Account</button>
              </div>
              <div class="col-md-8">
                <div class="card-body p-4">
                  <h6>Information</h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Email</h6>
                      <p class="text-muted" id="email">-</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Phone</h6>
                      <p class="text-muted" id="phone">-</p>
                    </div>
                  </div>
                  <h6>Projects</h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Recent</h6>
                      <p class="text-muted">Lorem ipsum</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Most Viewed</h6>
                      <p class="text-muted">Dolor sit amet</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog d-flex justify-content-center modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content w-75">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Sign in</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
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
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
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

  <script>
    function revealakun(){
      if (localStorage.getItem("simpanAkun") == "Login"){
        document.getElementById('akun-nav').innerHTML = localStorage.getItem("simpanAkun");
      }else{
        document.getElementById('akun-nav').innerHTML = "Hi, " + localStorage.getItem("simpanAkun");
      }

      document.getElementById("email").innerHTML = localStorage.getItem("simpanEmail");
      document.getElementById("phone").innerHTML = localStorage.getItem("simpanPhone");
    }

    function myNewFunction(sel) {
      localStorage.setItem("simpanAkun", sel.options[sel.selectedIndex].text);
      document.getElementById('akun-nav').innerHTML = "Hi, " + localStorage.getItem("simpanAkun");

      // Mengambil Email
      var xhr = new XMLHttpRequest();

      // Mengatur tindakan saat permintaan selesai
      xhr.onload = function() {
        if (xhr.status === 200) {
          // Menampilkan email dalam elemen dengan ID "email"
          document.getElementById("email").innerHTML = xhr.responseText;
          localStorage.setItem("simpanEmail", xhr.responseText);
        }
      };

      // Membuat permintaan POST ke file PHP
      xhr.open("POST", "prosesemail.php", true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.send("nama=" + localStorage.getItem("simpanAkun"));

      // Mengambil Phone
      var xjr = new XMLHttpRequest();

      // Mengatur tindakan saat permintaan selesai
      xjr.onload = function() {
        if (xjr.status === 200) {
          // Menampilkan email dalam elemen dengan ID "email"
          document.getElementById("phone").innerHTML = xjr.responseText;
          localStorage.setItem("simpanPhone", xjr.responseText);
        }
      };

      // Membuat permintaan POST ke file PHP
      xjr.open("POST", "prosesphone.php", true);
      xjr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xjr.send("nama=" + localStorage.getItem("simpanAkun"));
    }

    function logout() {
      localStorage.setItem("simpanAkun", "Login");
      localStorage.setItem("simpanEmail", "-");
      localStorage.setItem("simpanPhone", "-");
      document.getElementById('akun-nav').innerHTML = localStorage.getItem("simpanAkun");
      document.getElementById('email').innerHTML = localStorage.getItem("simpanEmail");
      document.getElementById('phone').innerHTML = localStorage.getItem("simpanPhone");
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/cf5d53a65e.js" crossorigin="anonymous"></script>
</body>
</html>