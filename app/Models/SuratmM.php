<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratmM extends Model
{
    protected $table            = 'tb_surat_masuk';
    protected $returnType       = 'array';
    
    public function getData($limit, $type, $sort, $search = null, $kat1 = null, $kat2 = null,$bulan = null,$tahun = null) 
    {

        $builder = $this->select('
            id_surat,             
            surat_dari, 
            tgl_surat, 
            no_surat,
            tgl_terima,
            no_agenda,
            sifat,
            perihal,
            terusan,
            tindakan,
            catatan,
            file,
            kat1,
            kat2,
        ');


       if (isset($search)) {
            $builder->Like('surat_dari', $search);
        }elseif (isset($kat1)) {
            $builder->where('kat1', $kat1);
        }
        
        if (empty($sort) OR $sort == 'latest') {
            $builder->orderBy('id_surat','DESC');
        }elseif ($sort == 'oldest') {
            $builder->orderBy('id_surat','ASC');
        }
        
        $surats = $builder->paginate($limit, $type);

        // load helper
        helper('number');        

        // build data
        $data = [];
        foreach ($surats as $surat) {

            // if file as url
            $file = (filter_var($surat['file'], FILTER_VALIDATE_URL)) ? $surat['file'] : base_url('uploads/'.$surat['file']);

            $data[] = array(
                'id_surat' => $surat['id_surat'],
                'surat_dari' => $surat['surat_dari'],
                'tgl_surat' => $surat['tgl_surat'],
                'no_surat' => $surat['no_surat'],
                'tgl_terima' => $surat['tgl_terima'],
                'no_agenda' => $surat['no_agenda'],
                'sifat' => $surat['sifat'],
                'perihal' => $surat['perihal'],
                'terusan' => $surat['terusan'],
                'tindakan' => $surat['tindakan'],
                'catatan' => $surat['catatan'],
                'kat1' => $surat['kat1'],
                'kat2' => $surat['kat2'],
                'file' => $file,
                );
        }   

        return $data;     
    }
    
    public function getKat1()
    {
        $builder = $this->select('kat1')->distinct()->findAll();

        $kat1 = [];
        foreach ($builder as $key => $value) {
            $kat1[] = $value['kat1'];
        }

        return $kat1;
    }   
    
    public function getKat2()
    {
        $builder = $this->select('kat2')->distinct()->findAll();

        $kat2 = [];
        foreach ($builder as $key => $value) {
            $kat2[] = $value['kat2'];
        }

        return $kat2;
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
    
}