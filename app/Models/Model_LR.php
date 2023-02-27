<?php

namespace App\Models;

use CodeIgniter\Model;


class Model_LR extends Model
{
    protected $tabel = 'user';

    public function savedata($simpan)
    {
        $this->db->table($this->tabel)->insert($simpan);
    }
    public function savedatasewa($simpan)
    {
        $this->db->table('sewa')->insert($simpan);
    }
    public function savedatalapangan($simpan)
    {
        $this->db->table('lapangan')->insert($simpan);
    }
    public function updatedata($update, $filter)
    {
        $this->db->table($this->tabel)->update($update, $filter);
    }
    public function getdata($data = false)
    {
        if ($data === false) {
            return $this->db->table('sewa')->join('lapangan', 'lapangan.kd_lapangan = sewa.kd_lapangan')->join('user', 'user.kd_user = sewa.kd_user')->get()->getResult();
        } else {
            return $this->db->table('sewa')->join('lapangan', 'lapangan.kd_lapangan = sewa.kd_lapangan')->join('user', 'user.kd_user = sewa.kd_user')->getWhere($data)->getResult();
        }
    }
    public function getdatahistory($data = false)
    {
        if ($data === false) {
            return $this->db->table('sewa')->join('lapangan', 'lapangan.kd_lapangan = sewa.kd_lapangan')->join('user', 'user.kd_user = sewa.kd_user')->get()->getResult();
        } else {
            return $this->db->table('sewa')->join('lapangan', 'lapangan.kd_lapangan = sewa.kd_lapangan')->join('user', 'user.kd_user = sewa.kd_user')->getWhere($data)->getResult();
        }
    }
    public function getdatauser($data = false)
    {
        if ($data === false) {
            return $this->db->table('user')->getWhere(['level'=>2])->getResult();
        } else {
            return $this->db->table('user')->getWhere($data)->getResult();
        }
    }
    public function getdatasewa($data = false)
    {
        if ($data === false) {
            return $this->db->table('sewa')->join('lapangan', 'lapangan.kd_lapangan = sewa.kd_lapangan')->join('user', 'user.kd_user = sewa.kd_user')->join('')->get()->getResult();
        } else {
            return $this->db->table('sewa')->join('lapangan', 'lapangan.kd_lapangan = sewa.kd_lapangan')->join('user', 'user.kd_user = sewa.kd_user')->getWhere($data)->getResult();
        }
    }
    public function schsewaadmin($sch)
    {
        return $this->db->table('sewa')->join('user', 'user.kd_user = sewa.kd_user')->join('lapangan', 'lapangan.kd_lapangan = sewa.kd_lapangan')->like('nama_lengkap', $sch, 'both')->orlike('kd_sewa', $sch, 'both')->orlike('nama_lapangan', $sch, 'both')->orlike('tgl_sewa', $sch, 'both')->orlike('jam_mulai', $sch, 'both')->orlike('jam_selesai', $sch, 'both')->get()->getResult();
    }
    public function schsewauser($sch)
    {
        return $this->db->table('sewa')->join('user', 'user.kd_user = sewa.kd_user')->join('lapangan', 'lapangan.kd_lapangan = sewa.kd_lapangan')->like('nama_lengkap', $sch, 'both')->orlike('kd_sewa', $sch, 'both')->orlike('nama_lapangan', $sch, 'both')->orlike('tgl_sewa', $sch, 'both')->orlike('jam_mulai', $sch, 'both')->orlike('jam_selesai', $sch, 'both')->get()->getResult();
    }
    public function schuser($sch)
    {
        return $this->db->table('user')->like('nama_lengkap', $sch, 'both')->orlike('username', $sch, 'both')->orlike('kd_user', $sch, 'both')->orlike('email', $sch, 'both')->get()->getResult();
    }
    public function deletedata($dt_f)
    {
        $this->db->table($this->tabel)->delete($dt_f);
    }
    public function Hapus_Sewa($dt_f)
    {
        $this->db->table('sewa')->delete($dt_f);
    }
    public function changepassword($update, $filter){
        $this->db->table($this->tabel)->update($update, $filter);
    }
}
