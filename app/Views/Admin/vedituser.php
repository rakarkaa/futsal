<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>
    
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url() .'/user/assets/img/ball_icon.ico'; ?>">
    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="<?= base_url() . '/admin/vendor/fontawesome-free/css/all.min.css'; ?>">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?= base_url() . '/admin/css/sb-admin-2.min.css'; ?>">

    <!-- Custom styles for this page -->
    <link rel="stylesheet" href="<?= base_url() . '/admin/vendor/datatables/dataTables.bootstrap4.min.css'; ?>">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa-solid fa-futbol"></i>
                </div>
                <div class="sidebar-brand-text mx-1">Admin Futsal <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() . '/index.php/Admin/index' ?>">
                    <i class="fa fa-th"></i>
                    <span>Data Sewa</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                More
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" >
                    <i class="fa fa-list-ul"></i>
                    <span>Daftar User-Edit</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() . '/index.php/LogReg/logout' ?>">
                    <i class="fa fa-reply"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables Data User-Edit</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables User-Edit</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <form action="<?= base_url().'/index.php/Admin/p_edituser' ?>" method="post">
                                    <?php foreach ($user as $row) {
                                        $pw= $row->password;
                                    ?>
                                        <div class="form-row">
                                        <input type="text" class="form-control" name="kd" value="<?= $row->kd_user ?>" hidden>
                                            <div class="form-group col-md-6">
                                                <label class="form-control-placeholder" for="nama_lengkap">Username</label>
                                                <input type="text" class="form-control" name="username" value="<?= $row->username ?>" readonly required>                                             
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-control-placeholder" for="password">Password</label>
                                                <input id="password-field" type="password" class="form-control" name="password" maxlength="20" value="<?= $row->password ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="form-control-placeholder" for="email">Email</label>
                                                <input type="email" class="form-control" name="email" value="<?= $row->email ?>" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-control-placeholder" for="nama_lengkap">Nama Lengkap</label>
                                                <input type="text" class="form-control" name="nama_lengkap" value="<?= $row->nama_lengkap ?>" required>                                             
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="form-control-placeholder" for="alamat">No Hp</label>
                                                <input type="text" class="form-control" name="nohp" value="<?= $row->nohp ?>" required>                                      
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-control-placeholder" for="alamat">Alamat</label>
                                                <input type="text" class="form-control" name="alamat" value="<?= $row->alamat ?>" required>   
                                            </div>
                                            <div class="form-group col-md-6">
                                            <label class="form-control-placeholder" for="alamat">Level</label>
                                            <?php if ($row->level == '1') { ?>
                                                <label for="">Level</label>
                                                <select name="level" class="form-control">
                                                    <option value="1" selected>Admin</option>
                                                    <option value="2">User</option>
                                                </select>
                                            <?php } else { ?>
                                                <select name="level" class="form-control">
                                                    <option value="1">Admin</option>
                                                    <option value="2" selected>User</option>
                                                </select>
                                            <?php }  ?>
                                        </div>
                                    <?php } ?>
                                    <div class="form-group col-md-3 offset-md-4 mt-4 d-flex">
                                        <button type="submit" class="form-control btn btn-primary rounded submit px-3 mx-3">Submit</button>
                                        <button class="form-control btn btn-danger rounded submit px-3" href="<?= base_url() . '/index.php/Admin/daftaruser' ?>">Kembali</button>
                                    </div>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="admin/js/demo/datatables-demo.js"></script>

</body>

</html>