<?php
include_once('../connector.php');
$id = $_POST['ids'];

if(isset($_POST['telah'])){
    $query = mysqli_query($db,"UPDATE instrumen_tracer_study SET STATUS = 'Telah Dilaksanakan' WHERE id_kegiatan =  $_POST[ids]");
    if($query){
        header("Location: ../../Instrumen Tracer Study/InstrumentTracerStudy_HalamanKegiatan.php?id=$id");
    }



}
if(isset($_POST['dibatalkan'])){
    $query = mysqli_query($db,"UPDATE instrumen_tracer_study SET STATUS = 'Dibatalkan' WHERE id_kegiatan =  $_POST[ids]");
    if($query){
        header("Location: ../../Instrumen Tracer Study/InstrumentTracerStudy_HalamanKegiatan.php?id=$id");
    }
}