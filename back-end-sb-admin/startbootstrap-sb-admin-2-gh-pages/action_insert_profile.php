<!-- Ini adalah langkah kedua setelah dari FORM_PROFILE.PHP -->
<!-- selanjutnya ke tabel_profile -->

<?php
// Memanggil koneksi database
/** @var mysqli $koneksi */
include "connection.php";

// Mengecek apakah tombol submit ditekan
if (isset($_POST['submit'])) {

    // Mengambil data dari form
    $nama = $_POST['nama'];
    $about = $_POST['about'];
    $website = $_POST['website'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $addres = $_POST['addres'];
    $linkedin = $_POST['linkedin'];
    $nationality = $_POST['nationality'];

    // Query untuk menyimpan data ke database
    $query = mysqli_query($koneksi, "INSERT INTO tb_profile
    (nama, about, website, phone, email, addres, linkedin, nationality)
    VALUES
    ('$nama', '$about', '$website', '$phone', '$email', '$addres', '$linkedin', '$nationality')");

    // Mengecek apakah berhasil
    if ($query) {
        echo "<script>
                alert('Data berhasil ditambahkan');
                window.location='tabel_profile.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal ditambahkan');
                window.history.back();
              </script>";

        echo mysqli_error($koneksi);
    }

} else {

    header("Location: form_profile.php");

}
?>