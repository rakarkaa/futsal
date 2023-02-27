<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Print Histori</title>

    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url() . '/user/assets/img/ball_icon.ico'; ?>">
    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="<?= base_url() . '/admin/vendor/fontawesome-free/css/all.min.css'; ?>">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?= base_url() . '/admin/css/sb-admin-2.min.css'; ?>">

    <!-- Custom styles for this page -->
    <link rel="stylesheet" href="<?= base_url() . '/admin/vendor/datatables/dataTables.bootstrap4.min.css'; ?>">
    <script>
        function printSection(el) {
            var getFullContent = document.body.innerHTML;
            var prinsection = document.getElementById('print').innerHTML;
            document.body.innerHTML = prinsection;
            window.print();
            document.body.innerHTML = getFullContent;
        }
    </script>
</head>

<body>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a onclick="printSection('dataTable')">Print</a></h6>
        </div>
        <div class="card-body"  >
            <div class="table-responsive" id="print">
                <div class="col-lg-4 offset-lg-4 mt-5">
                    <table class="table table-bordered " id="dataTable" width="50%" cellspacing="0">
                        <tbody>
                            <?php foreach ($sewa as $pp) { ?>
                                <tr>
                                    <td class="text-center"><b>Struk<b></td>
                                </tr>
                                <tr>
                                    <td class="text-center">Kode Sewa : <?= $pp->kd_sewa; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">Tanggal Sewa : <?= $pp->tgl_sewa; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">Nama Pelanggan : <?= $pp->nama_lengkap; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">Jam Mulai : <?= $pp->jam_mulai; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">Jam Selesai : <?= $pp->jam_selesai; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">Biaya : <?= $pp->total_biaya; ?></td>

                                <?php } ?>
                                </tr>
                        </tbody>
                    </table>

                </div>



                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Website 2022</span>
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

</html>