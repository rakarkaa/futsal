<?php

namespace App\Controllers;

use App\Models\Model_LR;

class User extends BaseController
{
    public function index()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
        if ($this->session->get('status login') == '') {
            return redirect()->to(base_url() . "/index.php/Controller/index");
        } else {
            //return view('User/index2');
            return view('User/index');
        }
    }
    public function vsewa()
    {
        return view('User/vsewa');
    }

    public function psewa()
    {
        date_default_timezone_set('asia/jakarta');
        $kduser = $this->request->getpost('kduser');
        $total = $this->request->getpost('biaya');
        $kdlapangan = $this->request->getpost('kdlapangan');
        $mulai = $this->request->getpost('jam_mulai');
        $selesai = $this->request->getpost('jam_selesai');
        $tglnow = date('Y-m-d H:i:s');
        $ck = date('Y-m-d');

        $simpan_data = array(
            'kd_user' => $kduser,
            'kd_lapangan' => $kdlapangan,
            'jam_mulai' => $mulai,
            'jam_selesai' => $selesai,
            'tgl_sewa' => $tglnow,
            'total_biaya' => $total
        );
        $model = new Model_LR();
        $db      = \Config\Database::connect();
        $query = $db->table('sewa')->where('jam_selesai >', $mulai)->where('jam_mulai <', $mulai)->where('kd_lapangan', $kdlapangan)->like('tgl_sewa', $ck, 'after')->get();

        if ($query->getNumRows() > 0) {
            echo '<script>alert("Lapangan Sedang DItempati")</script>';
            return view('User/index');
        } else {
            $model->savedatasewa($simpan_data);
            echo '<script>alert("Sewa Berhasil")</script>';
            return view('User/index');
        }
    }
    

    public function orderhistory()
    {
        $model = new Model_LR();
        return view('user/orderhistory');
    }
    public function myprofile($token)
    {
        $filter = array(
            'token' => $token
        );
        $model = new Model_LR();
        $data['user'] = $model->getdatauser($filter);
        return view('User/myProfile', $data);
    }
    
    public function changepw($token)
    {
        $op = $this->request->getPost('op');
        $np = $this->request->getpost('np');
        $cnp = $this->request->getpost('cnp');
        $filter = array(
            'token' => $token
        );


        $db      = \Config\Database::connect();
        $query = $db->table('user')->where(['password' => md5($op), 'token' => $token])->get();
        $model = new Model_LR();

        if ($query->getNumRows() == 1) {
            if ($np == $cnp) {
                $simpan_data = array(
                    'password' => md5($np)
                );
                
                $data['user'] = $model->changepassword($simpan_data, $filter);
                return view('User/index');
            } else {
                echo '<script>alert("Konfirmasi Password Tidak Sesuai")</script>';
                $data['user'] = $model->getdatauser($filter);
                return view('User/myProfile', $data);
            }
        } else {
            echo '<script>alert("Password Lama Salah")</script>';
            $data['user'] = $model->getdatauser($filter);
            return view('User/myProfile', $data);
        }
    }

    public function uprofile(){
        $kd = $this->request->getpost('kd');
        $email = $this->request->getpost('email');
        $nama_lengkap = $this->request->getpost('nama_lengkap');
        $alamat = $this->request->getpost('alamat');
        $nohp = $this->request->getpost('nohp');

        $filter = array('kd_user'=>$kd);
        $simpan_data = array(
            'email' => $email,
            'nama_lengkap' => $nama_lengkap,
            'alamat' => $alamat,
            'nohp' => $nohp
        );
        $model = new Model_LR();
        $model->updatedata($simpan_data,$filter);
        return redirect()->to('User/index') ;
    }

}

