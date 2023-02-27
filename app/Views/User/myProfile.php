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
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Akun Saya</h2>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form action="<?= base_url() . '/index.php/User/uprofile' ?>" method="post" id="contactForm" data-sb-form-api-token="API_TOKEN" class="form-control">
                <?php foreach ($user as $a) {

                ?>    
                        <div class="col-lg-6 offset-lg-3 mt-5">
                        <div class="form-group">
                                <input type="text" name="kd_user" class="form-control" value="<?= $a->kd_user ?>" hidden>
                            </div>
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="uname" class="form-control" value="<?= $a->username ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" value="<?= $a->email ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" value="<?= $a->nama_lengkap ?>">
                            </div>
                            <div class="form-group">
                                <label for="">No Hp</label>
                                <input type="text" name="nohp" class="form-control" value="<?= $a->nohp ?>">
                            </div>
                            <div>
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="<?= $a->alamat ?>">
                            </div>
                            <?php } ?>
                            <button class="form-control btn btn-info mt-3" type="submit">Save</button>
                            <a class="form-control btn btn-danger mt-2" href="<?= base_url() . '/index.php/User/index' ?>">Cancel</a>                      
                        </form>
                        <form action="<?= base_url() . '/index.php/User/changepw/' . $this->session->get('token') ?>" method="post">
                        
                        <div class="col-lg-10 offset-lg-1 mt-5">
                        <div class="form-group text-center">
                        <label for=""><b>Ingin Mengubah Password Anda?</b></label>
                            </div>
                            <div class="form-group">
                                <label for="">Old Password</label>
                                <input type="Password" name="op" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">New Password</label>
                                <input type="Password" name="np" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Confirm New Password</label>
                                <input type="Password" name="cnp" class="form-control">
                            </div>
                        <div class="col-lg-6 offset-lg-3">
                            <div class="form-group">
                            <button class="form-control btn btn-info mt-2" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
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