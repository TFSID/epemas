<?php 
include '../connect.php';

$id_pengaduan = $_GET['id_pengaduan'];

mysqli_query($conn,"delete from pengaduan where id_pengaduan='$id_pengaduan'");

header("location:pengaduan.php");

?>