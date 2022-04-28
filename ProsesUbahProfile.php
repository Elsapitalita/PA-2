<?php
function upload($name){
    $nama_file = $_FILES[$name]['name'];
    $ukuran = $_FILES[$name]['size'];
    $error = $_FILES[$name] ['error'];
    $tmpName = $_FILES[$name] ['tmp_name'];

    if($error === 4){
        echo "fail";
        return false;
    }
    move_uploaded_file($tmpName,"img/" . $nama_file);
    return $nama_file;
}
    $gambar = upload('gambar');
    require_once ('Function/connector.php');
    $query = mysqli_query($db,"UPDATE `users` SET `PASSWORD` = '$_POST[password]', `nama` = '$_POST[nama]', `email` = '$_POST[email]', `photo` = '$gambar', `notelp` = '$_POST[telp]' WHERE `users`.`username` = '$_POST[username]'");
    if($query){
        header("Location: Profile_Page.php");

    }