<?php 
include "connection.php";
$select_login = mysqli_query($koneksi, "SELECT * FROM login ORDER BY id_login DESC");
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
                        <h1 class="h3 mb-0 text-gray-800">LOGIN</h1>
                      <!--  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- content start -->
                     <a href="form_login.php" class="btn btn-info mb-2">Add</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>

                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($tampil = mysqli_fetch_object($select_login)):
                                ?>
                                <tr>
                                <th scope="row"><?php echo $tampil->email; ?></th>

                                <td>
                                    <?php echo $tampil->password; ?>
                            </td>
                            <td>
                                <a href="delete_login.php?id_login=<?php echo $tampil->id_login;?>"
                                class="btn btn-danger" onclick="return confirm ('Confirm to delete?')">DELETE</a>

                                <a href="update_form_login.php?id_login=<?php echo $tampil->id_login;?>"
                                class="btn btn-success">UPDATE</a>
                            </td>
                            </tr>
                            <?php endwhile ?>
                            </tbody>
                            </table>
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