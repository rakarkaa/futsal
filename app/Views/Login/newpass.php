<!doctype html>
<html lang="en">

<head>
    <title>Forgot Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
                            <h3 class="mb-4">Lupa Password</h3>
                            <div class="d-flex">
                                <div class="w-100">

                                </div>
                                <div class="w-100">

                                </div>
                            </div>
                            <form action="<?= base_url() . '/LogReg/p_new'; ?>" class="signin-form" method="POST" enctype="multipart/form-data" novalidate>
                                <?php foreach ($user as $row) {
                                    # code...
                                ?>
                                    
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="new" value="<?= $row->password ?>" required>
                                        <label class="form-control-placeholder" for="username">New Password</label>
                                        <div class="invalid-feedback">
                                            Input New Password
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="token" value="<?= $row->token; ?>" hidden required>
                                        <label class="form-control-placeholder" for="username">Token</label>
                                        <div class="invalid-feedback">

                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Submit</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">

                                    </div>
                                    <div class="w-50 text-md-right">

                                    </div>
                                </div>
                            </form>

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