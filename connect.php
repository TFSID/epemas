<?php 
$conn = mysqli_connect("localhost", "root", "", "epemas");

if (mysqli_connect_errno) {
    echo 'Koneksi gagal cok : ' . mysqli_connect_error();
}

?>