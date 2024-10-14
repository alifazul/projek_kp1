<?php namespace App\Models;

use CodeIgniter\Model;

class SuratM extends Model {

    protected $table = 'tb_surat_masuk';
    protected $primaryKey = 'id_surat';
    protected $allowedFields = [];

    public function getSurat(){
        return $this->db->table('tb_surat_masuk')
        ->get()->getResultArray();
    }

    public function AllKat1(){
        return $this->db->table('tb_kat1')
        ->get()->getResultArray();
    }

    public function AllKat2(){
        return $this->db->table('tb_kat2')
        ->get()->getResultArray();
    }

    public function getMonth(){
        return $this->db->table('tb_surat_masuk')
        ->select('month(tgl_surat) as bulan')
        ->distinct()->get()->getResultArray();
    }

    public function getYear(){
        return $this->db->table('tb_surat_masuk')
        ->select('year(tgl_surat) as tahun')
        ->distinct()->get()->getResultArray();
    }

    
    // detail
    public function detail($id_surat)
    {
        return $this->db->table('tb_surat_masuk')
        ->select('tb_surat_masuk.*,tb_kat1.*, tb_kat2.*')
        ->join('tb_kat1','tb_kat1.id_kat1=tb_surat_masuk.id_kat1')
        ->join('tb_kat2','tb_kat2.id_kat2=tb_surat_masuk.id_kat2')
        ->where('tb_surat_masuk.id_surat',$id_surat)
        ->get()->getRow();
    }

    // detail
    public function detail_d($id_surat)
    {
        return $this->db->table('tb_surat_masuk')
        ->select('tb_surat_masuk.*,tb_kat1.*, tb_kat2.*')
        ->join('tb_kat1','tb_kat1.id_kat1=tb_surat_masuk.id_kat1')
        ->join('tb_kat2','tb_kat2.id_kat2=tb_surat_masuk.id_kat2')
        ->where('tb_surat_masuk.id_surat',$id_surat)
        ->Get()->getRowArray();
    }

    // tambah
    public function tambah($data)
    {
        $builder = $this->db->table('tb_surat_masuk');
        $builder->insert($data);
    }

    // edit
    public function edit($data)
    {
        $builder = $this->db->table('tb_surat_masuk');
        $builder->where('id_surat',$data['id_surat']);
        $builder->update($data);
    }
}

 ?>