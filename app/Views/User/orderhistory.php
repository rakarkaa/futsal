<?php
$this->session = \Config\Services::session();
$this->session->start();
if ($this->session->get('status login') == '') {
    return redirect()->to(base_url() . "/index.php/Controller/index");
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

    <title>Histori Penyewaan</title>

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

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <h1 class="h3 mb-2 text-gray-800">Riwayat Histori Penyewaan</h1>

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Histori Penyewaan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <?php 
                                $db      = \Config\Database::connect();
                                $row = $db->table('sewa')->join('lapangan', 'lapangan.kd_lapangan = sewa.kd_lapangan')->join('user', 'user.kd_user = sewa.kd_user')->getWhere(['sewa.kd_user'=>$this->session->get('kd_user')])->getResult();
                                ?>  
                                <thead>
                                <td class="text-center">Kode Sewa</td>
                                <td class="text-center">Tanggal Sewa</td>
                                <td class="text-center">Lapangan</td>
                                <td class="text-center">Jam Mulai</td>
                                <td class="text-center">Jam Selesai</td>
                                <td class="text-center">Total Biaya</td>
                                <td class="text-center">Option</td>
                                </thead>
                                <tbody>
                                    <?php foreach ($row as $p) {
                                        # code...
                                    
                                    ?>
                                    <tr>
                                        <td class="text-center"><?= $p->kd_sewa ?></td>
                                        <td class="text-center"><?= $p->tgl_sewa ?></td>
                                        <td class="text-center"><?= $p->nama_lapangan ?></td>
                                        <td class="text-center"><?= $p->jam_mulai ?></td>
                                        <td class="text-center"><?= $p->jam_selesai ?></td>
                                        <td class="text-center"><?= $p->total_biaya ?></td>
                                        <td class="text-center"><a href="<?= base_url().'/index.php/Admin/print/'  . $p->kd_sewa;?>">print</a></td>
                                    </tr>
                                    <?php }?>
                                </table>
                                <div class="col-lg-2 offset-lg-0">
                            <div class="form-group">
                                <a href="<?= base_url() . '/User/index'; ?>" class="form-control btn btn-danger rounded submit px-3 mt-3">Kembali</a>
                            </div>
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