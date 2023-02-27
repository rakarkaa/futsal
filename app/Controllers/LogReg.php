<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Model_LR;
use CodeIgniter\HTTP\Request;

class LogReg extends BaseController
{
    public function con()
    {
        if (db_connect()) {
            echo 'yes';
        } else {
            echo 'no';
        }
    }
    public function p_login()
    {
        $username = $this->request->getpost('username');
        $password = $this->request->getpost('password');

        $db      = \Config\Database::connect();
        $query = $db->table('user')->where(['username' => $username, 'password' => md5($password)])->get();

        if ($query->getNumRows() == 1) {

            $this->session = \Config\Services::session();
            $this->session->start();
            $row = $query->getRow();
            $data = [
                'kd_user' => $row->kd_user,
                'nama' => $row->nama_lengkap,
                'token'=> $row->token,
                'status login' => 'login'
            ];
            $this->session->set($data);
            if ($row->level == '2' & $this->session->get('status login') == 'login') {
                return redirect()->to(base_url() . "/index.php/User/index");
            } elseif ($row->level == '1' & $this->session->get('status login') == 'login') {
                return redirect()->to(base_url() . "/index.php/Admin/index");
            }
        } else {
            echo '<script>alert("Akun Tidak Ditemukan")</script>';
            return view('Login/login');
        }
        echo $query->getNumRows();
    }

    public function p_regist()
    {
        date_default_timezone_set('asia/jakarta');
        $username = $this->request->getpost('username');
        $email = $this->request->getpost('email');
        $password = $this->request->getpost('password');
        $nama_lengkap = $this->request->getpost('nama_lengkap');
        $alamat = $this->request->getpost('alamat');
        $nohp = $this->request->getpost('nohp');
        $kode = 'U' . date('mdhis', strtotime(' + 1 day')) . '01';
        $tok = md5($kode);


        $db      = \Config\Database::connect();
        $query = $db->table('user')->where(['email' => $email])->get();
        $querya = $db->table('user')->where(['username' => $username])->get();

        if ($query->getNumRows() == 0) {
            $simpan_data = array(
                'username'=>$username,
                'email' => $email,
                'password' => md5($password),
                'nama_lengkap' => $nama_lengkap,
                'alamat' => $alamat,
                'nohp' => $nohp,
                'token' => $tok,
                'level' => '2'
            );
            $model = new Model_LR();
            $model->savedata($simpan_data);
            return view('Login/login');
        } elseif($querya->getNumRows() > 0){
            echo '<script>alert("Username ini sudah terdaftar")</script>';
            return view('Login/regist');
        } else {
            echo '<script>alert("Email ini sudah terdaftar")</script>';
            return view('Login/regist');
        }
    }

    public function new($token)
    {
        $filter = array(
            'token' => $token,
        );

        $model = new Model_LR();
        $data['user'] = $model->getdata($filter);
        return view('Login/newpass', $data);
    }

    public function p_new()
    {
        $new = $this->request->getPost('new');
        $tok = $this->request->getPost('token');
        $model = new Model_LR();
        $simpan_data = array(
            'password' => $new
        );

        $data_filter = array(
            'token' => $tok
        );

        $model->updatedata($simpan_data, $data_filter);
        return view('Login/login');
    }

    public function logout()
    {
        $session = \Config\Services::session();
        $session->destroy();
        return redirect()->to(base_url() . '/index.php/Controller/index');
    }
}