<?php

include_once('../connector.php');
include_once('../upload.php');
if (isset($_POST['simpan'])) {
    $terlampir = upload('terlampir');
    $biaya = upload('biaya');

    $query = mysqli_query($db, "UPDATE `waktu_tunggu_kerja_lulusan` SET `nama_kegiatan` = '$_POST[judul]', `nama_file` = '$terlampir', `file_biaya` = '$biaya', `pengada` = '$_POST[pengada]', `lokasi` = '$_POST[lokasi]', `tanggal` = '$_POST[tanggal]' WHERE `id_kegiatan` = $_POST[id]");
    if ($query) {
        header("Location: ../../Waktu Tunggu Kerja Lulusan/WaktuTungguKerjaLulusan_TampilanAwal.php");
    }
}

