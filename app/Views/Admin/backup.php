



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="<?= base_url() . '/user/css/style.css'; ?>">
</head>

<body>
    <form action="<?= base_url() . '/index.php/User/uprofile' ?>" method="post">
        <?php foreach ($user as $a) {

        ?>
            <div>
                <label for="">Username</label>
                <input type="text" name="uname" value="<?= $a->username ?>" readonly>
            </div>
            <div>
                <label for="">Email</label>
                <input type="text" name="email" value="<?= $a->email ?>">
            </div>
            <div>
                <label for="">Nama Lengkap</label>
                <input type="text" name="namal" value="<?= $a->nama_lengkap ?>">
            </div>
            <div>
                <label for="">No Hp</label>
                <input type="text" name="namal" value="<?= $a->nohp ?>">
            </div>
            <div>
                <label for="">Alamat</label>
                <input type="text" name="namal" value="<?= $a->alamat ?>">
            </div>
        <?php } ?>
        <button class="btn btn-info" type="submit">Save</button>
        <a class="btn btn-danger" href="">Cancel</a>
    </form>
    <form action="<?= base_url() . '/index.php/User/changepw/' . $this->session->get('token') ?>" method="post">
        <div>
            <label for="">Old Password</label>
            <input type="Password" name="op">
        </div>
        <div>
            <label for="">New Password</label>
            <input type="Password" name="np">
        </div>
        <div>
            <label for="">Confirm New Password</label>
            <input type="Password" name="cnp">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
