<?php 
include "connection.php";

$vlanguage=$_POST['bahasa'];
$vflagimage= time() . ".jpg";

$path ="fotobende/";
move_uploaded_file($_FILES['flag']['tmp_name'], $path . $vflagimage);
$sql_insert = mysqli_query($koneksi, "INSERT INTO language (bahasa, flag) values ('$vlanguage', '$vflagimage')");

header("Location:tabel_language.php");