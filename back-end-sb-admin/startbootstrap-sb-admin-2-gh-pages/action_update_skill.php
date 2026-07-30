<?php 
include "connection.php";

$id_skill   = $_POST['id_skill'];
$vskill     = $_POST['nama_skill'];

$update_skill = mysqli_query($koneksi, "UPDATE skill SET nama_skill='$vskill' WHERE id_skill='$id_skill'");

header("Location:tabel_skill.php");
?>