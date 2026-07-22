<!-- Ini adalah langkah kedua setelah dari FORM_PROFILE.PHP -->
<!-- selanjutnya ke tabel_profile -->

<?php
include "connection.php";

// $vnama untuk penyimpanan sedangkan $_POST menerima inputan name="nama" dr form_profile.php
$vnama=$_POST['nama'];
$vicon=$_POST['icon'];

$sql_insert = mysqli_query($koneksi, "INSERT INTO familiar(nama, icon) values ('$vnama', '$vicon')");

header("Location:tabel_familiar.php");