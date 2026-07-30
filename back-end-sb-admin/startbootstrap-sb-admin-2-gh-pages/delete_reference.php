<?php
include "connection.php";
$id_reference=$_GET['id_reference'];
$delete = mysqli_query($koneksi, "DELETE FROM reference WHERE id_reference='$id_reference'");
header("Location: tabel_reference.php");