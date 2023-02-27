<?php
$this->session = \Config\Services::session();
$this->session->start();
if ($this->session->get('status login') <> 'login') {
    return redirect()->to(base_url() . '/index.php/Controller/index');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Futsal</title>

    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url() . '/user/assets/img/ball_icon.ico'; ?>">
    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="<?= base_url() . '/admin/vendor/fontawesome-free/css/all.min.css'; ?>">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?= base_url() . '/admin/css/sb-admin-2.min.css'; ?>">

    <!-- Custom styles for this page -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

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
            <li class="nav-item active">
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
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() . '/index.php/Admin/daftaruser' ?>">
                    <i class="fa fa-list-ul"></i>
                    <span>Daftar User</span></a>
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

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <form action="<?= base_url() . 'index.php/Admin/index'; ?>" method="post">
                                <input type="text" class="form-control bg-light border-0 small" name="sch" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                            </form>
                        </div>
            </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800"></h1>

                        <!-- Laporan -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Laporan Penyewaan Lapangan</h6>
                            </div>
                            <div class="card-body">
                                <form action="<?= base_url() . '/index.php/Admin/genlaporan' ?>" method="post" class="form-group">
                                    <?php $years = range(2022,2000);
                                    $month = range(01,12); ?>
                                    <label for="">Tahun</label>
                                    <select name="tahun">
                                        <?php foreach ($years as $year) : ?>
                                            <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="">Bulan</label>
                                    <select name="bulan">
                                        <?php foreach ($month as $month) : ?>
                                            <option value="<?php echo $month; ?>"><?php echo $month; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <button type="submit" class="btn btn-primary col-md-1">Cek</button>
                                </form>
                            </div>
                        </div>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">DataTables Sewa</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-paginate dt-responsive nowrap" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <td class="text-center">kode sewa</td>
                                                <td class="text-center">nama lapangan</td>
                                                <td class="text-center">nama lengkap</td>
                                                <td class="text-center">tanggal sewa</td>
                                                <td class="text-center">jam mulai</td>
                                                <td class="text-center">jam selesai</td>
                                                <td class="text-center">Total Biaya</td>
                                                <td class="text-center">Print</td>
                                                <td class="text-center">Delete</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($sewa as $row) {
                                                # code...
                                            ?>
                                                <tr>

                                                    <td><?= $row->kd_sewa ?></td>
                                                    <td><?= $row->nama_lapangan ?></td>
                                                    <td><?= $row->nama_lengkap ?></td>
                                                    <td><?= $row->tgl_sewa ?></td>
                                                    <td><?= $row->jam_mulai ?></td>
                                                    <td><?= $row->jam_selesai ?></td>
                                                    <td><?= $row->total_biaya ?></td>
                                                    <td><a href="<?= base_url() . '/index.php/Admin/print/'  . $row->kd_sewa; ?>">print</a> </td>
                                                    <td><a href="<?php echo base_url() . '/index.php/Admin/deletesewa/' . $row->kd_sewa; ?>">delete</a></td>

                                                </tr>
                                            <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Data Tambah Lapangan</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                </div>
                                <div>
                                    <form action="<?= base_url() . '/index.php/Admin/tambahlapangan' ?>" method="post">
                                        <div>
                                            <label for="">Nama Lapangan</label>
                                            <input type="text" class="form-control col-md-3" name="nama_lapangan">
                                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                        </div>
                                    </form>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="admin/js/demo/datatables-demo.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>

</body>

</html>