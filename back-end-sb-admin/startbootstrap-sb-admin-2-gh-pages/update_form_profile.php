<!-- we are dr file tabel_profile -->
<!-- next: copy the data from form_profile -->
<?php 
include "connection.php";

// menyimpan sementara id_profile dari tombol UPDATE tabel_profile.php sebelum dieksekusi ke bawah berikut ini
// $_GET['id_profile']; yg menerima id_profile dr tombol UPDATE tabel_profile.php
$id_profile = $_GET['id_profile'];

// menampilkan data profile yang didapat atau dikirim dari tombol UPDATE tabel_profile.php di atas
$select_id = mysqli_query($koneksi, "SELECT * FROM tb_profile WHERE id_profile='$id_profile'");

// fungsi untuk menampilkan isi tabel menggunakan mysqli_fetch_object (->)
// selanjutnya menuju form bawah dengan menggunakan value untuk inputan setiap data
$profile = mysqli_fetch_object($select_id);

// di bawah ini adalah isi asli dari form.profile
?>

<?php include "header.php" ?>

<body id="page-top">
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="container-fluid">

                    <form action="action_update_profile.php" method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Name</label>
                            <!-- value $profile->nama untuk mnampilkan data yang diklik dari tabel profile di database -->
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $profile->nama ?>">
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Overview</label>
                            <!-- khusus TEXTAREA letak php nya echo $profile->deskripsi ?> di antara tag penutup dan pembuka -->
                            <textarea name="about" id="deskripsi" cols="30" class="form-control" rows="10"><?php echo $profile->about ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="website" class="form-label">Website</label>
                            <input type="text" class="form-control" id="website" name="website" value="<?php echo $profile->website ?>">
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $profile->phone ?>">
                        </div>

                        <!-- DITAMBAHKAN: Email, Address, dan LinkedIn -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $profile->email ?>">
                        </div>

                        <div class="mb-3">
                            <label for="addres" class="form-label">Address</label>
                            <input type="text" class="form-control" id="addres" name="addres" value="<?php echo $profile->addres ?>">
                        </div>

                        <div class="mb-3">
                            <label for="linkedin" class="form-label">LinkedIn</label>
                            <input type="text" class="form-control" id="linkedin" name="linkedin" value="<?php echo $profile->linkedin ?>">
                        </div>

                        <div class="mb-3">
                            <label for="nationality" class="form-label">Nationality</label>
                            <input type="text" class="form-control" id="nationality" name="nationality" value="<?php echo $profile->nationality ?>">
                        </div>

                        <!-- step 2: update form profile maksudnya adalah menambahkan inputan id_profile dengan tipe HIDDEN untuk mengirimkan id_profile mana yang mau di update -->
                        <!-- di bawah ini adalah caranya -->
                        <input type="hidden" value="<?php echo $profile->id_profile?>" name="id_profile">

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>