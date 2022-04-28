<?php
include_once('../connector.php');
$id = $_POST['ids'];

if(isset($_POST['telah'])){
    $query = mysqli_query($db,"UPDATE rasio_alumni SET STATUS = 'Telah Dilaksanakan' WHERE id_kegiatan =  $_POST[ids]");
    if($query){
        header("Location: ../../Rasio Alumni/RasioAlumni_HalamanKegiatan.php?id=$id");
    }



}
if(isset($_POST['dibatalkan'])){
    $query = mysqli_query($db,"UPDATE rasio_alumni SET STATUS = 'Dibatalkan' WHERE id_kegiatan =  $_POST[ids]");
    if($query){
        header("Location: ../../Rasio Alumni/RasioAlumni_Halamankegiatan.php?id=$id");
    }
}