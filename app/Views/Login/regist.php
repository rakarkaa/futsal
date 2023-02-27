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
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="<?= base_url() . '/user/css/styles.css'; ?>">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="<?php echo base_url() .'/user/assets/img/ball_icon.ico'; ?>" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Pelayanan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Jadwal</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Daftar</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Tim</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Selamat Datang Player!</div>
                <div class="masthead-heading text-uppercase">Senang Melihat Anda.</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#contact">Daftar Sekarang!</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Pelayanan</h2>
                    <h3 class="section-subheading text-muted">Nikmati Beberapa Pelayanan Dari Kami.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-futbol fa-stack-1x fa-inverse"></i><i class=""></i>
                        </span>
                        <h4 class="my-3">Lapangan</h4>
                        <p class="text-muted">Lapangan yang tersedia berjumlah 4, dan lapangan kami sudah diberi rumput sintesis dan beberapa pelengkap lainya.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa-solid fa-money-bill fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Harga</h4>
                        <p class="text-muted">Harga akan diambil per Jam main, seperti sistem pada umumnya dan harga yang kami tawarkan terjangkau.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa-solid fa-landmark fa-stack-1x fa-inverse"></i><i class=""></i>
                        </span>
                        <h4 class="my-3">Fasilitas</h4>
                        <p class="text-muted">Fasilitas yang Kami sediakan Tempat shalat, kamar mandi dan parkir.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Beberapa Portofolio kami.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?php echo base_url() .'/user/assets/img/portfolio/2.jpg'; ?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"></div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?php echo base_url() .'/user/assets/img/portfolio/7.jpg'; ?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"></div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?php echo base_url() .'/user/assets/img/portfolio/8.jpg'; ?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"></div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Jadwal</h2>
                    <h3 class="section-subheading text-muted">Jadwal Bermain.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo base_url() .'/user/assets/img/about/5.jpg'; ?>" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Senin - Minggu</h4>
                                <h4 class="subheading">10.00 sd 23.00</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Kami Akan buka setiap Hari, kami akan tutup jika ada sesuatu masalah atau pembersihan lapangan</p></div>
                        </div>
                    </li>
                   
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                               Ayo
                                <br />
                                Bergabung
                                <br />
                                Sekarang!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
       
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="<?php echo base_url() .'/user/assets/img/logos/microsoft.svg'; ?>" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="<?php echo base_url() .'/user/assets/img/logos/google.svg'; ?>" alt="..." aria-label="Google Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="<?php echo base_url() .'/user/assets/img/logos/facebook.svg'; ?>" alt="..." aria-label="Facebook Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="<?php echo base_url() .'/user/assets/img/logos/ibm.svg'; ?>" alt="..." aria-label="IBM Logo" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-left">
                    <h2 class="section-heading text-uppercase">Daftar Sekarang!!</h2>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form action="<?= base_url() . '/LogReg/p_regist'; ?>" class="signin-form" method="POST" enctype="multipart/form-data" novalidate id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-4">
                        <div class="col-md-5">
                            <div class="form-group">
                            
                                <!-- Name input-->
                                <input type="text" class="form-control" name="username" placeholder="Masukan Username" required>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input type="password" class="form-control" name="password" placeholder="Masukan Password" required>
                            </div>
                            <div class="form-group">
                                <!-- Phone number input-->
                                <input type="text" class="form-control" name="email" placeholder="Masukan Email" required>
                            </div>
                            <div class="form-group">
                                <!-- Phone number input-->
                                <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukan Nama Lengkap" required>
                            </div>
                            <div class="form-group">
                                <!-- Phone number input-->
                                <input type="text" class="form-control" name="nohp" placeholder="Masukan No HP" required>
                            </div>
                            <div class="form-group">
                                <!-- Phone number input-->
                                <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">➤ Submit</button>
                            </div>
                            <div class="form-group">
                                <a href="<?= base_url() . '/Controller/login'; ?>" class="form-control btn btn-primary">➤ Sudah Mempunyai Akun?</button></a>
                            </div>
                        </div>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
         <!-- Team-->
         <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?php echo base_url() .'/user/assets/img/cafe.jpeg'; ?>" alt="..." />
                            <h4>M.Raka Mauludin</h4>
                            <p class="text-muted">Front End</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?php echo base_url() .'/user/assets/img/team/hnd.jpg'; ?>" alt="..." />
                            <h4>Hidayat Nurwahid</h4>
                            <p class="text-muted">Back End</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div> -->
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                       
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
