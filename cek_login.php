<?php 
session_start();
include 'connect.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($conn, "SELECT * FROM petugas WHERE username = '$username' AND password = '$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);
    
    if($data['level'] == 'admin') {
        $_SESSION['id_petugas'] = $id_petugas;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['level'] = 'admin';

        header("location:admin/index.php");
    } else if($data['level'] == 'petugas') {
        $_SESSION['id_petugas'] = $id_petugas;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['level'] = 'petugas';

        header("location:petugas/index.php");
    } else {
        header("location:login.php?info=gagal");
    }
}
