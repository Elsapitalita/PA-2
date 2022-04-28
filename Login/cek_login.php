<?php
session_start();
include '../DB/DBConnection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username' AND password ='$password'");

$cek = mysqli_num_rows($data);

if ($cek>0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:../Bimbingan%20Karir/BimbinganKarir_TampilanAwal.php");
 }else{
    header("location:Login%20Form.php?pesan=gagal");
}

