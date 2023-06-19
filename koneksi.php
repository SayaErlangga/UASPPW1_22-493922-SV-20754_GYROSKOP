<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "bioskop";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn) {
        die("Connection failed : " . mysqli_connect_error());
    }

    // $sql = "SELECT nim, nama, alamat FROM mahasiswa";
    // $result = mysqli_query($conn, $sql);

    // if(mysqli_num_rows($result)>0){
    //     while($row = mysqli_fetch_assoc($result)){
    //         echo "NIM : ".$row["nim"]."<br>Name : ".$row["nama"]."<br>Alamat : ".$row["alamat"]."<br>";
    //     }
    // } else {
    //     echo "0 results";
    // }

    // mysqli_close($conn);
?>