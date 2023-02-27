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
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Web Futsal</title>
        <!-- Favicon-->
        <link rel="shortcut icon" href="<?php echo base_url() .'/user/assets/img/ball_icon.ico'; ?>">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <!-- Core theme CSS (includes Bootstrap)-->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="<?= base_url() . '/user/css/style.css'; ?>">
    </head>
    <body id="page-top">


<!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-left">
                    <h2 class="section-heading text-uppercase">Sewa Sekarang</h2>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form action="<?= base_url() . '/index.php/User/psewa' ?>" method="post" id="contactForm" data-sb-form-api-token="API_TOKEN" class="form-control">
                    <div class="row p-3">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Nama Lapangan</label>
                                <select name="kdlapangan" class="form-control">
                                    <?php
                                    $db      = \Config\Database::connect();
                                    $query = $db->table('lapangan')->get();
                                    foreach ($query->getResult() as $row) {
                                    ?>
                                        <option value="<?= $row->kd_lapangan ?>"><?= $row->nama_lapangan ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" name="kduser" value="<?= $this->session->get('kd_user') ?>" hidden>
                            </div>
                            <div class="form-group">
                                <label for="">Jam Mulai</label>
                                <input type="time" name="jam_mulai" id="mulai" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Jam Selesai</label>
                                <input type="time" name="jam_selesai" id="selesai" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Total Jam</label>
                                <input type="text" name="harga" id="Jam" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Harga per Jam</label>
                                <input type="text" name="harga" id="harga" value="25000" readonly class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Total Biaya</label>
                                <input type="text" id="biaya" name="biaya" readonly class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-3">
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-warning rounded submit px-3">Submit</button>
                                <a href="<?= base_url() . '/index.php/User/index' ?>" class="form-control btn btn-danger rounded submit px-3 mt-3">Kembali</a>
                            </div>
                        </div>
                    </form>

                    <script type="text/javascript">
                        $(document).ready(function() {
                            $("#mulai, #selesai").change(function() {
                                var mulai = new Date('1970-01-01T' + $("#mulai").val());
                                var addon = new Date('1970-01-01T' + '24:00:00');
                                var selesai =  new Date('1970-01-01T' + $("#selesai").val());

                                if ($("#mulai").val() > $("#selesai").val()) {
                                    var total = 24 - ((Date.parse(mulai) - Date.parse(selesai)) / 3600000) ;
                                } else {
                                    var total = (Date.parse(selesai) - Date.parse(mulai)) / 3600000 ;
                                } 
                                var a = $("#harga").val()

                                
                                $("#Jam").val(total);
                                var biaya = a * total;
                                $("#biaya").val(biaya);
                                
                            });
                        });
                    </script>
                </body>
            </div>
        </section>


           <!-- Bootstrap core JS-->
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?= base_url() . '/user/js/script.js'; ?>"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
