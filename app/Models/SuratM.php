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
       
        /*
        if($numrow > 0)
        {
        foreach($query->getResultArray() as $mail)
        {
            $output .= '
            <div class="card mt-3 align-item-center mr-auto ml-auto">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto"> 
                                <img class="rounded" src="'.base_url('').'dist/img/dokumen.jpg" alt="User Image" width="100" height="120">
                            </div>
                            <div class="col">
                                <h4>'.$mail['surat'].'</h4>
                                <p class="text-muted"><i class="fas fa-tag"></i>&nbsp; '.$mail['kat1'].','.$mail['kat2'].' &nbsp; &nbsp; <i class="fas fa-calendar-day"></i> &nbsp; '.$mail['tgl_surat'].'</p>
                                <div class="xx clearfix">
                                    <a class="btn btn-info float-right mr-2" href="#"><i class="fas fa-eye"></i>&nbsp; Lihat</a> 
                                    <a class="btn btn-success float-right mr-2"><i class="fas fa-download"></i>&nbsp; Unduh</a>
                                </div>
                            </div>
                        </div> 
                    </div> 
                </div>
            ';
        }
        }
        else
        {
            $output = '<h3>Data Tidak Ditemukan</h3>';
        }
        $data = [];
        foreach ($surats as $surat) {

            // if file as url
            $file = (filter_var($surat['file'], FILTER_VALIDATE_URL)) ? $surat['file'] : base_url('uploads/'.$surat['file']);

            $data[] = array(
                'id_surat' => $surat['id_surat'],
                'surat' => $surat['surat'],
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
        }*/
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