<?php

namespace App\Controllers;

use App\Models\Model_LR;

class Controller extends BaseController
{
    public function con()
    {
        if (db_connect()) {
            echo 'yes';
        } else {
            echo 'no';
        }
    }
    public function index()
    {
        return view('index');
    }

    public function registration()
    {
        return view('registration');
    }

    public function send()
    {
        date_default_timezone_set('asia/jakarta');
        $uname = $this->request->getpost('uname');
        $email = $this->request->getpost('email');
        $password = $this->request->getpost('password');
        $fname = $this->request->getpost('fname');
        $lname = $this->request->getpost('lname');
        $level = '2';
        $kode = 'U' . date('mdhis', strtotime(' + 1 day')) . '01';
        $tok = md5($kode);
        $status = 'Not Verified';

        //$img = $this->request->getFile('avatar');
        $img = '-';
        $permitted_chars = '0123456789';

        function generate_string($input, $strength = 16)
        {
            $input_length = strlen($input);
            $random_string = '';
            for ($i = 0; $i < $strength; $i++) {
                $random_character = $input[mt_rand(0, $input_length - 1)];
                $random_string .= $random_character;
            }

            return $random_string;
        }
        $cp1 = generate_string($permitted_chars, 6);

        $simpan_data = array(
            'id_user' => $kode,
            'username' => $uname,
            'email' => $email,
            'password' => $password,
            'first_name' => $fname,
            'last_name' => $lname,
            'level' => $level,
            'img' => $img,
            'token' => $tok,
            'status' => $status,
            'code' => $cp1
        );
        $model = new Model_LR();

        $db      = \Config\Database::connect();
        $query = $db->table('user')->where('username', $uname)->get();
        $cs1 = $db->table('user')->where('username', $uname);
        $cs2 = $cs1->where('status', 'Not Verified')->get();
        if ($uname == null || $password == null || $email == null || $fname == null || $lname == null) {
            echo 'fill';
            echo 'Username : ' . $uname . '<br>';
            echo 'Password : ' . $password . '<br>';
            echo 'Email : ' . $email . '<br>';
            echo 'First Name : ' . $fname . '<br>';
            echo 'Last Name : ' . $lname . '<br>';
            //return redirect()->to(base_url() . "/index.php/Controller/a");
        } elseif ($query->getNumRows() < 1) {
            $model->savedata($simpan_data);
            //return redirect()->to(base_url() . "/index.php/Controller/a");
        } elseif ($cs2->getNumRows() == 1) {
            $update_code = array(
                'email' => $email,
                'password' => $password,
                'first_name' => $fname,
                'last_name' => $lname,
                'code' => $cp1
            );
            $data_filter = array(
                'username' => $uname
            );
            $model->updatedata($update_code, $data_filter);
            echo '1'.$cs2->getNumRows();
        } else {
            print '<script type="text/javascript">al();</script>';
        }
    }
}
