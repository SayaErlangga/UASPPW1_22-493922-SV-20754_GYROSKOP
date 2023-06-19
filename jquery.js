var judul = document.getElementById('exampleModalLabel');
var rating = document.getElementById('rating');
var genre = document.getElementById('genre');
var durasi = document.getElementById('durasi');
var deskripsi = document.getElementById('deskripsi');
var image = document.getElementById('image');
    function ambilData(id){
      if (id == 'frontcover') {
        localStorage.setItem('simpanFotoFilm','https://th.bing.com/th/id/OIP.FPfhuAGDnRCdccTYMg-v-gHaKm?pid=ImgDet&w=699&h=1000&rs=1');
        localStorage.setItem('simpanJudulFilm', 'Front Cover');
        localStorage.setItem('simpanRatingFilm', 'SU');
        localStorage.setItem('simpanGenreFilm', 'Action');
        localStorage.setItem('simpanDurasiFilm', '2 Jam 30 Menit');
        localStorage.setItem('simpanDeskripsiFilm', 'Film ini berjudul Front Cover');
      }
      else if (id === 'midsommar') {
        localStorage.setItem('simpanFotoFilm','https://th.bing.com/th/id/OIP.9nrAqBVrRp0XL7bMV3Vp6wHaKe?pid=ImgDet&rs=1');
        localStorage.setItem('simpanJudulFilm', 'Midsommar');
        localStorage.setItem('simpanRatingFilm', 'SU');
        localStorage.setItem('simpanGenreFilm', 'Action');
        localStorage.setItem('simpanDurasiFilm', '2 Jam 30 Menit');
        localStorage.setItem('simpanDeskripsiFilm', 'Film ini berjudul Midsommar');
      }
      else if (id === 'violetevergarden') {
        localStorage.setItem('simpanFotoFilm','https://image.tmdb.org/t/p/original/g7BpD4B5jN4D0AAuI5v0hdfaZIN.jpg');
        localStorage.setItem('simpanJudulFilm', 'Violet Evergarden');
        localStorage.setItem('simpanRatingFilm', 'SU');
        localStorage.setItem('simpanGenreFilm', 'Action');
        localStorage.setItem('simpanDurasiFilm', '2 Jam 30 Menit');
        localStorage.setItem('simpanDeskripsiFilm', 'Film ini berjudul Violet Evergarden');
      }
      else if (id === 'doraemon') {
        localStorage.setItem('simpanFotoFilm','https://th.bing.com/th/id/R.0e9990f0ac297c119a4e7ecf150b208f?rik=bJgYAGnH3hTqsA&riu=http%3a%2f%2fmarcusgohmarcusgoh.com%2fwp%2fwp-content%2fuploads%2f2017%2f05%2fDoraemon-Poster.jpg&ehk=LHLztiLnaK35o8Aj5CHF5Fql%2fkDjAEXSj5Ez%2fYdu%2fNM%3d&risl=&pid=ImgRaw&r=0"');
        localStorage.setItem('simpanJudulFilm', 'Doraemon');
        localStorage.setItem('simpanRatingFilm', 'SU');
        localStorage.setItem('simpanGenreFilm', 'Action');
        localStorage.setItem('simpanDurasiFilm', '2 Jam 30 Menit');
        localStorage.setItem('simpanDeskripsiFilm', 'Film ini berjudul Doraemon');
      }
      else if (id === 'spiritedaway') {
        localStorage.setItem('simpanFotoFilm','https://m.media-amazon.com/images/M/MV5BMjlmZmI5MDctNDE2YS00YWE0LWE5ZWItZDBhYWQ0NTcxNWRhXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg');
        localStorage.setItem('simpanJudulFilm', 'Spirited Away');
        localStorage.setItem('simpanRatingFilm', 'SU');
        localStorage.setItem('simpanGenreFilm', 'Action');
        localStorage.setItem('simpanDurasiFilm', '2 Jam 30 Menit');
        localStorage.setItem('simpanDeskripsiFilm', 'Film ini berjudul Spirited Away');
      }
      else if (id === 'mencuriradensaleh') {
        localStorage.setItem('simpanFotoFilm','https://i.pinimg.com/originals/0e/9c/aa/0e9caa14ea7a6e538423c72bd1b6d46f.jpg');
        localStorage.setItem('simpanJudulFilm', 'Mencuri Raden Saleh');
        localStorage.setItem('simpanRatingFilm', 'SU');
        localStorage.setItem('simpanGenreFilm', 'Action');
        localStorage.setItem('simpanDurasiFilm', '2 Jam 30 Menit');
        localStorage.setItem('simpanDeskripsiFilm', 'Film ini berjudul Mencuri Raden Saleh');
      }
      image.src = localStorage.getItem('simpanFotoFilm');
      judul.innerHTML = localStorage.getItem('simpanJudulFilm');
      rating.innerHTML = localStorage.getItem('simpanRatingFilm');
      genre.innerHTML = localStorage.getItem('simpanGenreFilm');
      durasi.innerHTML = localStorage.getItem('simpanDurasiFilm');
      deskripsi.innerHTML = localStorage.getItem('simpanDeskripsiFilm');
    }

    document.getElementById('frontcover').addEventListener('click', function() {
        localStorage.setItem('simpanFilm', 'Front Cover');
    });
    document.getElementById('midsommar').addEventListener('click', function() {
        localStorage.setItem('simpanFilm', 'Midsommar');
    });
    document.getElementById('violetevergarden').addEventListener('click', function() {
        localStorage.setItem('simpanFilm', 'Violet Evergarden');
    });
    document.getElementById('doraemon').addEventListener('click', function() {
        localStorage.setItem('simpanFilm', 'Doraemon');
    });
    document.getElementById('spiritedaway').addEventListener('click', function() {
        localStorage.setItem('simpanFilm', 'Spirited Away');
    });
    document.getElementById('mencuriradensaleh').addEventListener('click', function() {
        localStorage.setItem('simpanFilm', 'Mencuri Raden Saleh');
    });

      function revealakun(){
        if (localStorage.getItem("simpanAkun") == "Login"){
          document.getElementById('akun-nav').innerHTML = localStorage.getItem("simpanAkun");
        }else{
          document.getElementById('akun-nav').innerHTML = "Hi, " + localStorage.getItem("simpanAkun");
        }
      }

      function myOrder(){
        document.getElementById('orderJudul').innerHTML = localStorage.getItem("simpanFilm");

        if (localStorage.getItem("simpanFilm") == "Front Cover"){
          document.getElementById('orderFoto').src = localStorage.getItem('simpanFotoFilm');
        }
        else if (localStorage.getItem("simpanFilm") == "Midsommar"){
          document.getElementById('orderFoto').src = localStorage.getItem('simpanFotoFilm');
        }
        else if (localStorage.getItem("simpanFilm") == "Violet Evergarden"){
          document.getElementById('orderFoto').src = localStorage.getItem('simpanFotoFilm');
        }
        else if (localStorage.getItem("simpanFilm") == "Doraemon"){
          document.getElementById('orderFoto').src = localStorage.getItem('simpanFotoFilm');
        }
        else if (localStorage.getItem("simpanFilm") == "Spirited Away"){
          document.getElementById('orderFoto').src = localStorage.getItem('simpanFotoFilm');
        }
        else if (localStorage.getItem("simpanFilm") == "Mencuri Raden Saleh"){
          document.getElementById('orderFoto').src = localStorage.getItem('simpanFotoFilm');
        }
      }
      
      var angkaElement = document.getElementById("angka");
      var angka = 1;
      var harga_tiket = 45000;
      var total = 45000;
      localStorage.setItem('Kursi', angka);
      localStorage.setItem('Total', total);

      function tambahAngka() {
        angka++;
        angkaElement.textContent = angka;
        total = angka * harga_tiket; 
        document.getElementById('totalHarga').textContent = 'Rp. ' + total;
        localStorage.setItem('Kursi', angka);
        localStorage.setItem('Total', total);
      }

      function kurangiAngka() {
        if (angka > 1) {
          angka--;
          angkaElement.textContent = angka;
          total = angka * harga_tiket; 
          document.getElementById('totalHarga').textContent = 'Rp. ' + total;
          localStorage.setItem('Kursi', angka);
          localStorage.setItem('Total', total);
        }
      }

      function backOrder(){
        image.src = localStorage.getItem('simpanFotoFilm');
        judul.innerHTML = localStorage.getItem('simpanJudulFilm');
        rating.innerHTML = localStorage.getItem('simpanRatingFilm');
        genre.innerHTML = localStorage.getItem('simpanGenreFilm');
        durasi.innerHTML = localStorage.getItem('simpanDurasiFilm');
        deskripsi.innerHTML = localStorage.getItem('simpanDeskripsiFilm');
      }

      function backDetailOrder(){
        image.src = localStorage.getItem('simpanFotoFilm');
        judul.innerHTML = localStorage.getItem('simpanJudulFilm');
        rating.innerHTML = localStorage.getItem('simpanRatingFilm');
        genre.innerHTML = localStorage.getItem('simpanGenreFilm');
        durasi.innerHTML = localStorage.getItem('simpanDurasiFilm');
        deskripsi.innerHTML = localStorage.getItem('simpanDeskripsiFilm');
      }

      function nextOrder(){
        document.getElementById('detailOrderJudul').innerHTML = "<b>Judul Film : </b>" + "</br>" + localStorage.getItem('simpanJudulFilm');
        document.getElementById('namaDetailOrder').innerHTML = "<b>Nama Pemesan : </b>" + "</br>" + localStorage.getItem('simpanAkun');
        document.getElementById('jumlahKursiDetail').innerHTML = "<b>Jumlah Kursi : </b>" + "</br>" + angka + " Kursi";
        document.getElementById('totalHargaDetail').innerHTML = "Total Harga : " + total;
        document.getElementById('namaOrder').value = localStorage.getItem('simpanAkun');
        document.getElementById('fotoOrder').value = localStorage.getItem('simpanFotoFilm');
        document.getElementById('judulOrder').value = localStorage.getItem('simpanFilm');
        document.getElementById('kursiOrder').value = localStorage.getItem('Kursi');
        document.getElementById('totalOrder').value = localStorage.getItem('Total');
        if (localStorage.getItem("simpanFilm") == "Front Cover"){
          document.getElementById('detailOrderFoto').src = localStorage.getItem('simpanFotoFilm');
        }
        else if (localStorage.getItem("simpanFilm") == "Midsommar"){
          document.getElementById('detailOrderFoto').src = localStorage.getItem('simpanFotoFilm');
        }
        else if (localStorage.getItem("simpanFilm") == "Violet Evergarden"){
          document.getElementById('detailOrderFoto').src = localStorage.getItem('simpanFotoFilm');
        }
        else if (localStorage.getItem("simpanFilm") == "Doraemon"){
          document.getElementById('detailOrderFoto').src = localStorage.getItem('simpanFotoFilm');
        }
        else if (localStorage.getItem("simpanFilm") == "Spirited Away"){
          document.getElementById('detailOrderFoto').src = localStorage.getItem('simpanFotoFilm');
        }
        else if (localStorage.getItem("simpanFilm") == "Mencuri Raden Saleh"){
          document.getElementById('detailOrderFoto').src = localStorage.getItem('simpanFotoFilm');
        }
      }
    