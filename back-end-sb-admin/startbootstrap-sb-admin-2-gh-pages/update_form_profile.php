<?php
include "connection.php";

$id_profile = $_GET['id_profile'];

$select_id = mysqli_query($koneksi, "SELECT * FROM tb_profile WHERE id_profile='$id_profile'");

$profile = mysqli_fetch_object($select_id);

?>
<?php include "header.php" ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php" ?>
        <!-- End of Sidebar -->
        
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "topbar.php" ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">UPDATE PROFILE</h1>
                      <!--  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- content start -->
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

                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="reset" name="reset" class="btn btn-primary">Reset</button>
</form>
                    <!-- content end -->

                <!-- /.container-fluid -->

            </div>
            <!-- /.container-fluid -->
            
        </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include "footer.php" ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <?php include "bottom.php" ?>