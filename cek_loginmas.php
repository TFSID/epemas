<?php 
session_start();
include 'connect.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$data = mysqli_query($conn, "SELECT * FROM masyarakat WHERE username = '$username' AND password = '$password'");
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['nik'] = $nik;
    $_SESSION['username'] = $username;
    $_SESSION['nama'] = $nama;
    $_SESSION['status'] = 'login';

    header("location:masyarakat/index.php");
} else {
    header("location:loginmas.php?pesan=gagal");
}
