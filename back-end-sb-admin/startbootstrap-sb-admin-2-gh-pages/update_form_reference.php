<?php
include "connection.php";
$id_reference = $_GET['id_reference'];
$select_id = mysqli_query($koneksi, "SELECT*FROM reference WHERE id_reference='$id_reference'");
$reference = mysqli_fetch_object($select_id);
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
                        <h1 class="h3 mb-0 text-gray-800">UPDATE REFERENCE</h1>
                      <!--  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- content start -->
                    <form action="action_update_reference.php" method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $reference->nama?>">
                    </div>
                    <div class="mb-3">
                            <label for="jabatan" class="form-label">Designation</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?php echo $reference->jabatan?>">
                    </div>
                     <div class="mb-3">
                            <label for="company" class="form-label">Company</label>
                            <input type="text" class="form-control" id="company" name="perusahaan" value="<?php echo $reference->perusahaan?>">
                    </div>
                     <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone"value="<?php echo $reference->phone?>">
                    </div>
                     <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" 
                            aria-describedby="emailHelp" value="<?php echo $reference->email?>">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else</div>
                    </div>
                    <input type="hidden" value="<?php echo $reference->id_reference?>" name="id_reference">
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