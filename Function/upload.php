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
        move_uploaded_file($tmpName,"../../File/" . $nama_file);
        return $nama_file;
    }
?>