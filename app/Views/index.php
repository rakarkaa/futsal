<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap File -->
    <link rel="stylesheet" href="<?php echo base_url() . '/css/bootstrap.css'; ?>">
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . '/plugins/fontawesome-free/css/all.min.css' ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url() . '/plugins/overlayScrollbars/css/OverlayScrollbars.min.css' ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . '/dist/css/adminlte.min.css' ?>">
</head>

<body>
    <h2> Login Form </h2>
    <form action="<?= base_url() . '/index.php/Controller/login'; ?>" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="uname" required>
                <div class="invalid-feedback">
                    Input Your Username
                </div>
            </div>

            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" required>
                <div class="invalid-feedback">
                    Input Your Password
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="<?= base_url().'/index.php/Controller/registration';?>" class="btn btn-success">Register</a>
    </form>
</body>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
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
<!-- jQuery -->
<script src="<?php echo base_url() . '/plugins/jquery/jquery.min.js' ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() . '/plugins/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url() . '/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js' ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() . '/dist/js/adminlte.min.js' ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() . '/dist/js/demo.js' ?>"></script>
<?php echo $this->renderSection('content'); ?>
<!-- IonIcon -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>