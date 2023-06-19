<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <style>
        .nav-link{
            margin-right:30px;
            color: white;
        }

        .nav-link:hover{
          color: white;
        }
        .homeMovieList{
          height: 300px;
          width: 200px;
        }
        button{
          color: black;
          padding: 10px;
          width: 200px;
          border: 1px solid rgb(23, 23, 23);
        }
        a{
          color: black;
        }
        *{
          font-family: 'Poppins', sans-serif;
        }
        option{
          color: black;
        }
        h2 {
          width: 100%; 
          text-align: center; 
          border-bottom: 1px solid #000; 
          border-top: 1px solid #000; 
          line-height: 0.1em;
          margin: 10px 0 20px; 
        } 

        h2 span { 
            background:rgb(216, 216, 216); 
            padding:0 10px; 
        }

        @media(max-width: 415px){
          #button-up{
            width: 150px;
          }
          #button-np{
            width: 150px;
          }
          .homeMovieList{
            height: 250px;
            width: 180px;
          } 
          .book{
            width: 180px;
          }
        }
    </style>
    <title>Document</title>
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

    

<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://th.bing.com/th/id/R.c934282c6facb2af3914b2083772b1ae?rik=XFXzAstONoPUAg&riu=http%3a%2f%2fthefilmstage.com%2fwp-content%2fuploads%2f2014%2f09%2finterstellar_banner.jpg&ehk=OkYhM7vVZs%2bJU43lH27TZ60%2b5380r%2bYqWTUI%2f6sq8%2f4%3d&risl=&pid=ImgRaw&r=0" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://th.bing.com/th/id/R.8d18536dee76f5cdc5c5cb5c17cee3c9?rik=IN6h9md6YBpFlA&riu=http%3a%2f%2fspotlightreport.net%2fwp-content%2fuploads%2f2012%2f05%2fBane-Batman-standoff-The-Dark-Knight-Rises-wall-poster.jpg&ehk=x%2f91m51i6jh4MOD8nkezxzr7lc2LSG%2fBArm9YRko9x4%3d&risl=&pid=ImgRaw&r=0" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://www.filmofilia.com/wp-content/uploads/2010/06/inception_banner_04.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Content Movie -->
    <div>
        <div style="margin-top: 50px; margin-bottom: 40px;">
          <h2><span>LIST FILM</span></h2>
        </div>
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
      </div>
  </div>

    <!-- Content Promo -->
    <div style="margin-bottom: 150px;">
      <div style="margin-top: 50px; margin-bottom: 30px;">
        <h2><span>LIST PROMO</span></h2>
      </div>
      <br>

      <div class="container-lg">
        <div class="text-end">
          <a href="promo.php" class="text-decoration-none" style="color: rgb(0, 0, 0); padding: 35px;">See More</a>
        </div>
      </div>

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






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/cf5d53a65e.js" crossorigin="anonymous"></script>   
    <script>
              function nowPlaying(){
                document.getElementById("button-up").style.backgroundColor = "white";
                document.getElementById("button-up").style.color = "black";
                document.getElementById("button-np").style.color = "white";
                document.getElementById("button-np").style.backgroundColor = "rgb(23, 23, 23)";
                document.getElementById("mainMovie").innerHTML = 
                  "<div><img class='homeMovieList' src='https://th.bing.com/th/id/OIP.FPfhuAGDnRCdccTYMg-v-gHaKm?pid=ImgDet&w=699&h=1000&rs=1'></br><a href='movie.php'><button type='button' class='btn btn-warning book' style='border-radius: 0%;'>Book Now</button></a></div><div><img class='homeMovieList' src='https://th.bing.com/th/id/OIP.9nrAqBVrRp0XL7bMV3Vp6wHaKe?pid=ImgDet&rs=1'></br><a href='movie.php'><button type='button' class='btn btn-warning book' style='border-radius: 0%;'>Book Now</button></a></div><div><img class='homeMovieList' src='https://image.tmdb.org/t/p/original/g7BpD4B5jN4D0AAuI5v0hdfaZIN.jpg'></br><a href='movie.php'><button type='button' class='btn btn-warning book' style='border-radius: 0%;'>Book Now</button></a></div><div><img class='homeMovieList' src='https://th.bing.com/th/id/R.0e9990f0ac297c119a4e7ecf150b208f?rik=bJgYAGnH3hTqsA&riu=http%3a%2f%2fmarcusgohmarcusgoh.com%2fwp%2fwp-content%2fuploads%2f2017%2f05%2fDoraemon-Poster.jpg&ehk=LHLztiLnaK35o8Aj5CHF5Fql%2fkDjAEXSj5Ez%2fYdu%2fNM%3d&risl=&pid=ImgRaw&r=0'></br><a href='movie.php'><button type='button' class='btn btn-warning book' style='border-radius: 0%;'>Book Now</button></a></div><div><img class='homeMovieList' src='https://m.media-amazon.com/images/M/MV5BMjlmZmI5MDctNDE2YS00YWE0LWE5ZWItZDBhYWQ0NTcxNWRhXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg'></br><a href='movie.php'><button type='button' class='btn btn-warning book' style='border-radius: 0%;'>Book Now</button></a></div>"
              }
              function upcoming(){
                  document.getElementById("button-np").style.backgroundColor = "white";
                  document.getElementById("button-np").style.color = "black";
                  document.getElementById("button-up").style.color = "white";
                  document.getElementById("button-up").style.backgroundColor = "rgb(23, 23, 23)";
                  document.getElementById("mainMovie").innerHTML = 
                  "<div><img class='homeMovieList' src='https://i.pinimg.com/originals/0c/01/87/0c01870a8251d6949c8088db53d1da67.jpg'></br><a href='movie.php'><button type='button' class='btn btn-warning book' style='border-radius: 0%;'>Pre-Order</button></a></div><div><img class='homeMovieList' src='https://i.pinimg.com/originals/0c/01/87/0c01870a8251d6949c8088db53d1da67.jpg'></br><a href='movie.php'><button type='button' class='btn btn-warning book' style='border-radius: 0%;'>Pre-Order</button></a></div><div><img class='homeMovieList' src='https://i.pinimg.com/originals/0c/01/87/0c01870a8251d6949c8088db53d1da67.jpg'></br><a href='movie.php'><button type='button' class='btn btn-warning book' style='border-radius: 0%;'>Pre-Order</button></a></div><div><img class='homeMovieList' src='https://i.pinimg.com/originals/0c/01/87/0c01870a8251d6949c8088db53d1da67.jpg'></br><a href='movie.php'><button type='button' class='btn btn-warning book' style='border-radius: 0%;'>Pre-Order</button></a></div><div><img class='homeMovieList' src='https://i.pinimg.com/originals/0c/01/87/0c01870a8251d6949c8088db53d1da67.jpg'></br><a href='movie.php'><button type='button' class='btn btn-warning book' style='border-radius: 0%;'>Pre-Order</button></a></div>"
              }


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