<!-- we are from tabel_profile

<?php
include "connection.php";

//untuk menerima id_profile yg dibawa dari tombol DELETE dari TABEL PROFILE menggunakan $id_profile
// $_GET['id_profile']; menyimpan sementara id yg nanti akan digunakan pada perintah DELETE di bawahnya.
$id_profile=$_GET['id_profile'];

// ini perintah sql utk mendelete data mendasarkan id_profile yg dibawa
$delete = mysqli_query($koneksi, "DELETE FROM `tb_profile` WHERE id_profile='$id_profile'");

// setelah proses delete dijalankan, maka akan kembali ke file tabel_profile.php
header("Location: tabel_profile.php");