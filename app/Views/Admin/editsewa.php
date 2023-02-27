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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?= base_url() . '/index.php/User/psewa' ?>" method="post">
        <div>
            <label for="">Nama Lapangan</label>
            <select name="kdlapangan">
                <?php
                $db      = \Config\Database::connect();
                $query = $db->table('lapangan')->get();
                foreach ($query->getResult() as $row) {
                ?>
                    <option value="<?= $row->kd_lapangan ?>"><?= $row->nama_lapangan ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <input type="text" name="kduser" value="<?= $this->session->get('kd_user') ?>" hidden>
        </div>
        <div>
            <label for="">Jam Mulai</label>
            <input type="time" name="jam_mulai" id="mulai">
        </div>
        <div>
            <label for="">Jam Selesai</label>
            <input type="time" name="jam_selesai" id="selesai">
        </div>
        <div>
            <label for="">Total Jam</label>
            <input type="time" name="total jam" id="total">
        </div>
        <div>
            <label for="">Biaya per Jam</label>
            <input type="text" name="harga" value="12000" readonly>
        </div>
        <div>
            <label for="">Total Biaya</label>
            <input type="text">
        </div>+
        <div>
            <button type="submit">Submit</button>
        </div>

    </form>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#mulai, #selesai").keyup(function() {
                var mulai = $("#mulai").val();
                var selesai = $("#selesai").val();

                var total = Date.parse(selesai) - Date.parse(mulai);
                $("#total").val(total);
            });
        });
    </script>
</body>

</html>