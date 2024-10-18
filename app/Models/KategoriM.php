<?php namespace App\Models;

use CodeIgniter\Model;

class KategoriM extends Model {


    public function getKat1(){
        return $this->db->table('tb_kat1')->select('*')->get()->getResultArray();
    }

    public function getKat2(){
        return $this->db->table('tb_kat2')->select('*')->get()->getResultArray();
    }

    public function detailKat1($kat1){
        return $this->db->table('tb_kat1')
        ->select('tb_kat1.*')
        ->where('tb_kat1.kat1',$kat1)
        ->get()->getRow();
    }

    public function detailKat2($kat2){
        return $this->db->table('tb_kat2')
        ->select('tb_kat2.*')
        ->where('tb_kat2.kat2',$kat2)
        ->get()->getRow();
    }
}

?>