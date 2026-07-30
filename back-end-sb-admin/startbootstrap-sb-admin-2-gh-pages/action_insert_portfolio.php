<?php 
include "connection.php";

$vjudul=$_POST['judul_portfolio'];
$vnamaimage=time() . ".jpg";
$vlink=$_POST['link'];
$vdeskripsi=$_POST['deskripsi'];
$vtype=$_POST['jenis'];
$path="foto/";

move_uploaded_file($_FILES['img']['tmp_name'], $path . $vnamaimage);
$sql_insert = mysqli_query($koneksi, "INSERT INTO portfolio (judul_portfolio, img, link, deskripsi, jenis) values ('$vjudul', '$vnamaimage', '$vlink', '$vdeskripsi', '$vtype')");

header("Location:tabel_portfolio.php");