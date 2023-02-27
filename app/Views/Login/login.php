<!doctype html>
<html lang="en">

<head>
    <title>Login-Futsal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="<?php echo base_url() .'/user/assets/img/ball_icon.ico'; ?>">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= base_url() . '/login/css/style.css'; ?>">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">

                        <div class="login-wrap p-4 p-md-5">
                            <div class="col-lg-12">
                                    <h3 class="mb-4 text-center">Login Akun</h3>
                            </div>
                            <form action="<?=base_url().'/LogReg/p_login';?>" class="signin-form" method="POST" enctype="multipart/form-data" novalidate>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="username" required>
                                    <label class="form-control-placeholder" for="username">Username</label>
                                    <div class="invalid-feedback">
                                        Input Your Username
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input id="password-field" type="password" name="password" class="form-control" maxlength="20" required>
                                    <label class="form-control-placeholder" for="password">Password</label>
                                    <div class="invalid-feedback">
                                        Input Your Password
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" style="background-color: #ffc107 !important; border-color: #ffc107 !important;" class="form-control btn btn-primary rounded submit px-3">Log In</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <!-- <a href="<?= base_url().'/Controller/forget'; ?>">Forgot Password</a> -->
                                    </div>
                                    <div class="w-50 text-md-right">

                                    </div>
                                </div>
                            </form>
                            <p class="text-center"><a class="text-center text-warning" href="<?= base_url() . '/Controller/registration'; ?>">Daftar Baru</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?= base_url() . '/login/js/jquery.min.js'; ?>"></script>
    <script src="<?= base_url() . ' /login/js/popper.js'; ?>"></script>
    <script src="<?= base_url() . '/login/js/bootstrap.min.js'; ?>"></script>
    <script src="<?= base_url() . '/login/js/main.js'; ?>"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('signin-form');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

</body>

</html>