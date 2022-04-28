<?php
include_once('../connector.php');
$id = $_POST['ids'];

if(isset($_POST['telah'])){
    $query = mysqli_query($db,"UPDATE tingkat_kepuasan_alumni SET STATUS = 'Telah Dilaksanakan' WHERE id_kegiatan =  $_POST[ids]");
    if($query){
        header("Location: ../../Tingkat Kepuasan Alumni/TingkatKepuasanAlumni_HalamanKegiatan.php?id=$id");
    }



}
if(isset($_POST['dibatalkan'])){
    $query = mysqli_query($db,"UPDATE tingkat_kepuasan_alumni SET STATUS = 'Dibatalkan' WHERE id_kegiatan =  $_POST[ids]");
    if($query){
        header("Location: ../../Tingkat Kepuasan Alumni/TingkatKepuasanAlumni_HalamanKegiatan.php?id=$id");
    }
}