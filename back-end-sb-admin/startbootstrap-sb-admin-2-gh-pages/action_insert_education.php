<!-- Ini adalah lagkah kedua setelah dari FORM_EDUCATION.PHP -->
<!-- selanjutnya ke tabel_education -->
<?php
include "connection.php";

// $vnama untuk penyimpanan sedangkan $_POST menerima inputan name="nama" dr from_education.php
$vjurusan=$_POST['nama_jurusan'];
$vbelajar=$_POST['tahun_belajar'];
$vtempat=$_POST['tempat_belajar'];
$vdeskripsi=$_POST['deskripsi'];

// mysqli_query adalah perintah utk menyatukan koneksi database dengan query tabel.
// (nama_jurusan, tahun_belajar, tempat_belajar, deskripsi) adalah nama2 kolom database
// ('$vjurusan', '$vbelajar', '$vtempat', '$vdeskripsi') adalah variabel di atas yang sudah kita bikin sebelumnya
$sql_insert = mysqli_query($koneksi, "INSERT INTO education (nama_jurusan, tahun_belajar, tempat_belajar, deskripsi ) values ('$vjurusan', '$vbelajar', '$vtempat', '$vdeskripsi')");
header("Location:tabel_education.php");