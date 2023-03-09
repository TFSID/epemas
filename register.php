<?php 
include 'connect.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$telp = $_POST['telp'];

mysqli_query($conn, "INSERT INTO masyarakat VALUES('$nik', '$nama', '$username', '$password', '$telp')");
header("location:loginmas.php");

?>