<?php
include_once('../connector.php');
include_once('../upload.php');
if(isset($_POST['tambah'])){
    $terlampir = upload('terlampir');
    $biaya = upload('biaya');

    $query = mysqli_query($db,"INSERT INTO `ukuran_kerja_lulusan` (`id_kegiatan`, `nama_kegiatan`, `nama_file`, `file_biaya`, `pengada`, `lokasi`, `tanggal`, `STATUS`) VALUES (NULL, '$_POST[judul]', '$terlampir', '$biaya', '$_POST[pengada]','$_POST[lokasi]',' $_POST[tanggal]', 'Belum Dilaksanakan')");
    if($query){
        header("Location: ../../Ukuran Kerja Lulusan/UkuranKerjaLulusan_TampilanAwal.php");
    }
}
?>