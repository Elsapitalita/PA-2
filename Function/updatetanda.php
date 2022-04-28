<?php
include_once('../Function/connector.php');
$id = $_POST['ids'];

if(isset($_POST['telah'])){
    $query = mysqli_query($db,"UPDATE bimbingan_karir SET STATUS = 'Telah Dilaksanakan' WHERE id_kegiatan =  $_POST[ids]");
    if($query){
        header("Location: ../Bimbingan Karir/BimbinganKarir_HalamanKegiatan.php?id=$id");


    }



}
if(isset($_POST['dibatalkan'])){
    $query = mysqli_query($db,"UPDATE bimbingan_karir SET STATUS = 'Dibatalkan' WHERE id_kegiatan =  $_POST[ids]");
    if($query){
        header("Location: ../Bimbingan Karir/BimbinganKarir_HalamanKegiatan.php?id=$id");
    }
}