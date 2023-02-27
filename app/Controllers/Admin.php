<?php

namespace App\Controllers;

use App\Models\Model_LR;

class Admin extends BaseController
{
    public function index()
    {
        $this->session = \Config\Services::session();
        $this->session->start();

        if ($this->session->get('status login') == '') {
            return redirect()->to(base_url() . "/index.php/Controller/index");
        } else {
            $model = new Model_LR();
            $sch = $this->request->getGet('sch');
            if ($sch) {
                $data['sewa'] = $model->schsewaadmin($sch);
                return view('Admin/index', $data);
            } else {
                $data['sewa'] = $model->getdata();
                return view('Admin/index', $data);
            }
            return view('Admin/index');
        }
    }
    public function deletesewa($kdsewa)
    {

        $data_filter = array(
            'kd_sewa' => $kdsewa
        );
        $model = new Model_LR();
        $model->Hapus_Sewa($data_filter);
        return redirect()->to('Admin/index');
    }
    public function deleteuser($token)
    {

        $data_filter = array(
            'token' => $token
        );
        $model = new Model_LR();
        $model->deletedata($data_filter);
        return redirect()->to('Admin/daftaruser');
    }

    public function tambahlapangan()
    {
        $namalap = $this->request->getPost('nama_lapangan');
        $simpan_data = array(
            'nama_lapangan' => $namalap
        );
        $model = new Model_LR();
        $model->savedatalapangan($simpan_data);
        return redirect()->to(base_url() . "/index.php/Admin/index");
    }
    public function daftaruser()
    {
        $this->session = \Config\Services::session();
        $this->session->start();

        if ($this->session->get('status login') == '') {
            return redirect()->to(base_url() . "/index.php/Controller/index");
        } else {
            $model = new Model_LR();
            $sch = $this->request->getGet('sch');
            if ($sch) {
                $data['sewa'] = $model->schuser($sch);
                return view('Admin/daftaruser', $data);
            } else {
                $data['sewa'] = $model->getdatauser();
                return view('Admin/daftaruser', $data);
            }
            return view('Admin/daftaruser');
        }
    }

    public function vedituser($token){
        $filter = array(
            'token' => $token,
        );

        $model = new Model_LR();
        $data['user'] = $model->getdatauser($filter);
        return view('Admin/vedituser', $data);
    }
    public function p_edituser(){
        $kd = $this->request->getpost('kd');
        $username = $this->request->getpost('username');
        $email = $this->request->getpost('email');
        $password = $this->request->getpost('password');
        $nama_lengkap = $this->request->getpost('nama_lengkap');
        $alamat = $this->request->getpost('alamat');
        $nohp = $this->request->getpost('nohp');
        $level = $this->request->getpost('level');

        $filter = array('kd_user'=>$kd);
        $simpan_data = array(
            'username'=>$username,
            'email' => $email,
            'password' => $password,
            'nama_lengkap' => $nama_lengkap,
            'alamat' => $alamat,
            'nohp' => $nohp,
            'level' => $level
        );
        $model = new Model_LR();
        $model->updatedata($simpan_data,$filter);
        return redirect()->to('Admin/daftaruser') ;
    }
    public function print($kd)
    {
        $filter = array(
            'kd_sewa' => $kd
        );
        $model = new Model_LR();
        $data['sewa'] = $model->getdatasewa($filter);
        return view('Admin/vprint', $data);
    }

    public function genlaporan(){
        date_default_timezone_set('asia/jakarta');
        $tahun = $this->request->getPost('tahun');
        $bulan = $this->request->getPost('bulan');
        if ($bulan < 10) {
            $ck = $tahun.'-0'.$bulan;
        }else{
            $ck = $tahun.'-'.$bulan;
        }
        

        $db      = \Config\Database::connect();
        
        $query = $db->table('sewa')->like('tgl_sewa', $ck, 'both')->get();
        $sum = $db->table('sewa')->selectSum('total_biaya')->like('tgl_sewa', $ck, 'both')->get()->getResult();
        $lap1 = $db->table('sewa')->selectCount('kd_lapangan')->where('kd_lapangan',1)->like('tgl_sewa', $ck, 'both')->get()->getResult();
        $lap2 = $db->table('sewa')->selectCount('kd_lapangan')->where('kd_lapangan',2)->like('tgl_sewa', $ck, 'both')->get()->getResult();
        $lap3 = $db->table('sewa')->selectCount('kd_lapangan')->where('kd_lapangan',3)->like('tgl_sewa', $ck, 'both')->get()->getResult();
        
        $row = $query->getResult();
        if ($query->getNumRows() > 0) {
            $data['sewa'] = $row;
            $data['sum'] = $sum;
            $data['lap1'] = $lap1;
            $data['lap2'] = $lap2;
            $data['lap3'] = $lap3;
            return view('Admin/laporan',$data);
        }else{
            echo '<script>alert("Data Tidak Ditemukan")</script>';
            return redirect()->to('Admin/index');
        }

}

}