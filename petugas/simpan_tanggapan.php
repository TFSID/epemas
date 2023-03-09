<?php 
include '../connect.php';

$id_pengaduan = $_POST['id_pengaduan'];
$tgl_tanggapan = date('Y-m-d');
$laporan = $_POST['laporan'];
$id_petugas = $_POST['id_petugas'];
$status = $_POST['status'];

mysqli_query($koneksi,"insert into tanggapan values('','$id_pengaduan','$tgl_tanggapan','$laporan','$id_petugas')");
header("location:data_pengaduan.php");

?>