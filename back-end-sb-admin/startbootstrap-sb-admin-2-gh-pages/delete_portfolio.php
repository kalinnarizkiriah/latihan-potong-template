<?php
include "connection.php";

$id_portfolio = $_GET['id_portfolio'];

$imgportfolio=mysqli_query($koneksi, "SELECT * FROM portfolio WHERE id_portfolio IN ('$id_portfolio')");
$vimg = mysqli_fetch_object($imgportfolio);
$path = "foto/";

if(is_file($path . $vimg->img)){
    unlink($path . $vimg->img);
}

$sql_delete = mysqli_query($koneksi, "DELETE FROM portfolio WHERE id_portfolio='$id_portfolio'");

header("Location: tabel_portfolio.php");