<?php 
include "connection.php";

$id_language    = $_POST['id_language'];
$vlanguage      = $_POST['bahasa'];
$vflagimage    = time() . ".jpg";

$path="fotobende/";
if (empty($_FILES['flag']['name'])){
    $sql_update_language_no_image = mysqli_query($koneksi, "UPDATE language SET 
    bahasa='$vlanguage' WHERE id_language='$id_language'");
    header("Location:tabel_language.php");
} else{
    move_uploaded_file($_FILES['flag']['tmp_name'], $path . $vflagimage);
    
    $fotobendera = mysqli_query($koneksi, "SELECT * FROM language WHERE id_language IN ('$id_language')");

    $vflag = mysqli_fetch_object($fotobendera);
    $vpath = "fotobende/";

    if (is_file($path . $vflag->flag)) {
    unlink($path . $vflag->flag);
    }
    $sql_update_language_image = mysqli_query($koneksi, "UPDATE language SET bahasa='$vlanguage', flag='$vflagimage' WHERE id_language='$id_language'");
    header("Location:tabel_language.php");
}

