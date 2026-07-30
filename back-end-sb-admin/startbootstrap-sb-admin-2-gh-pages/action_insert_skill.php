<?php 
include "connection.php";

$vskill=$_POST['nama_skill'];
$sql_insert = mysqli_query($koneksi, "INSERT INTO skill (nama_skill) values ('$vskill')");

header("Location:tabel_skill.php");