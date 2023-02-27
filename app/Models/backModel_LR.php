<?php
namespace App\Models;
use CodeIgniter\Model;

class Model_LR extends Model{
    protected $tabel = 'user';

    public function savedata($simpan){
        $this->db->table($this->tabel)->insert($simpan);
    }
    public function updatedata($update,$filter){
        $this->db->table($this->tabel)->update($update,$filter);
    }
    public function getdata($data = false){
        if ($data === false) {
            return $this->db->table($this->tabel)->get()->getResult();
        }else {
            return $this->db->table($this->tabel)->getWhere($data)->getResult();
        }
    }
    public function sch($sch){
        return $this->db->table($this->tabel)->like('kode_user',$sch,'both')->orlike('username',$sch,'both')->orlike('nama_lengkap',$sch,'both')->get()->getResult();
        //$builder->like('kode_user',$sch,'both');
        //$builder->orlike('nama_lengkap',$sch,'both');
    }

    public function deletedata($dt_f){
        $this->db->table($this->tabel)->delete($dt_f);
    }

}
