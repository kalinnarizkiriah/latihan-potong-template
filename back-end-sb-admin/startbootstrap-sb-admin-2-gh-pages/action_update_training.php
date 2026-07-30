<?php
include "connection.php";

$id_training = $_POST['id_training'];
$vjurusan = $_POST['nama_training'];
$vbelajar = $_POST['tahun_training'];
$vtempat = $_POST['tempat_training'];
$vdeskripsi = $_POST['deskripsi'];

$update = mysqli_query($koneksi, "UPDATE training SET
    nama_training='$vjurusan',
    tahun_training='$vbelajar',
    tempat_training='$vtempat',
    deskripsi='$vdeskripsi'
WHERE id_training='$id_training'");

if($update){
    header("Location:tabel_training.php");
}else{
    echo "Update gagal : ".mysqli_error($koneksi);
}
?>