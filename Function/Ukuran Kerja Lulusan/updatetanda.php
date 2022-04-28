<?php
include_once('../connector.php');
$id = $_POST['ids'];

if(isset($_POST['telah'])){
    $query = mysqli_query($db,"UPDATE ukuran_kerja_lulusan SET STATUS = 'Telah Dilaksanakan' WHERE id_kegiatan =  $_POST[ids]");
    if($query){
        header("Location: ../../Ukuran Kerja Lulusan/UkuranKerjaLulusan_HalamanKegiatan.php?id=$id");
    }



}
if(isset($_POST['dibatalkan'])){
    $query = mysqli_query($db,"UPDATE ukuran_kerja_lulusan SET STATUS = 'Dibatalkan' WHERE id_kegiatan =  $_POST[ids]");
    if($query){
        header("Location: ../../Ukuran Kerja Lulusan/UkuranKerjaLulusan_HalamanKegiatan.php?id=$id");
    }
}