<?php
include_once('../connector.php');
$id = $_POST['ids'];

if(isset($_POST['telah'])){
    $query = mysqli_query($db,"UPDATE waktu_tunggu_kerja_lulusan SET STATUS = 'Telah Dilaksanakan' WHERE id_kegiatan =  $_POST[ids]");
    if($query){
        header("Location: ../../Waktu Tunggu Kerja Lulusan/WaktuTungguKerjaLulusan_HalamanKegiatan.php?id=$id");
    }



}
if(isset($_POST['dibatalkan'])){
    $query = mysqli_query($db,"UPDATE waktu_tunggu_kerja_lulusan SET STATUS = 'Dibatalkan' WHERE id_kegiatan =  $_POST[ids]");
    if($query){
        header("Location: ../../Waktu Tunggu Kerja Lulusan/WaktuTungguKerjaLulusan_HalamanKegiatan.php?id=$id");
    }
}