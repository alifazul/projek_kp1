<?php namespace App\Models;

use CodeIgniter\Model;

class SuratM extends Model {

    protected $table = 'tb_surat';
    protected $primaryKey = 'id_surat';


    public function getSurat()
    {
        $builder = $this->select('tb_surat.*,tb_user.*')
        ->join('tb_user','tb_surat.id_user=tb_user.id_user');
        return $builder;
    }

    public function getSuratAll()
    {
        $builder = $this->getSurat()->findAll();
        return $builder;
    }

    public function getSuratIDUser($id_user)
    {
        $builder = $this->getSurat()->where('tb_surat.id_user',$id_user);
        return $builder;
    }

    public function getSuratKat1($kat1)
    {
        $builder = $this->getSurat()->where('tb_surat.kat1',$kat1)->countAllResults();
        return $builder;
    }

    public function getSuratKat2($kat2)
    {
        $builder = $this->getSurat()->where('tb_surat.kat2',$kat2)->countAllResults();
        return $builder;
    }

    function fetch_data(/*$limit, $start,*/$ket=null, $kat1=null, $kat2=null, $cari=null, $bulan=null, $tahun=null,$sort=null)
    {
        $builder = $this->select('*');

        if(isset($kat1)){
            $builder->where('kat1',$kat1);
        }

        if(isset($kat2)){
            $builder->where('kat2',$kat2);
        }

        if(isset($ket)){
            $builder->where('ket',$ket);
        }

        if(isset($cari)){
            $builder->like('surat',$cari);
        }

        if(isset($bulan)){
            $builder->like('tgl_surat',$bulan);
        }

        if(isset($tahun)){
            $builder->like('tgl_surat',$tahun);
        }

        if (empty($sort) OR isset($sort) == 'latest') {
            $builder->orderBy('id_surat','DESC');
        }elseif (isset($sort) == 'oldest') {
            $builder->orderBy('id_surat','ASC');
        }
        $surats = $builder;
        return $surats;
    }

    public function getKat1(){
        return $this->db->table('tb_kat1')
        ->get()->getResultArray();
    }

    public function getKat2(){
        return $this->db->table('tb_kat2')
        ->get()->getResultArray();
    }

    function getFile($id_surat){
        $builder = $this->select('file')->where('id_surat',$id_surat)->get()->getResultArray();
        return $builder;
    }
   
    public function getMonth()
    {
        $builder = $this->select('month(tgl_surat) as bulan')->distinct()->findAll();

        $bulan = [];
        foreach ($builder as $key => $value) {
            $bulan[] = $value['bulan'];
        }

        return $bulan;
    } 

    public function getYear()
    {
        $builder = $this->select('year(tgl_surat) as tahun')->distinct()->findAll();

        $tahun = [];
        foreach ($builder as $key => $value) {
            $tahun[] = $value['tahun'];
        }

        return $tahun;
    } 

    
    // detail
    public function detail($id_surat)
    {
        return $this->db->table('tb_surat')
        ->select('tb_surat.*')
        ->where('tb_surat.id_surat',$id_surat)
        ->get()->getRow();
    }

    // tambah
    public function tambah($data)
    {
        $builder = $this->db->table('tb_surat');
        $builder->insert($data);
    }


    // edit
    public function edit($data)
    {
        $builder = $this->db->table('tb_surat');
        $builder->where('id_surat',$data['id_surat']);
        $builder->update($data);
    }
}

?>