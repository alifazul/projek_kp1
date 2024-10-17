<?php namespace App\Models;

use CodeIgniter\Model;

class SuratK extends Model {

    protected $table = 'tb_sk';
    protected $primaryKey = 'id_sk';

    public function getSurat()
    {
        return $this->db->table('tb_sk')
        ->select('tb_sk.*,tb_user.*')
        ->join('tb_user','tb_sk.id_user=tb_user.id_user')
        ->get()->getResultArray();
    }

    public function getSuratUser($id_user){
        return $this->db->table('tb_sk')->where('id_user',$id_user)
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

    function getFile($id_sk){
        $builder = $this->select('file')->where('id_sk',$id_sk)->get()->getResultArray();
        return $builder;
    }


    function fetch_data(/*$limit, $start,*/ $kat1=null, $kat2=null, $cari=null, $bulan=null, $tahun=null,$sort=null)
    {
        $builder = $this->select('*');

        if(isset($kat1)){
            $builder->where('kat1',$kat1);
        }

        if(isset($kat2)){
            $builder->where('kat2',$kat2);
        }

        if(isset($cari)){
            $builder->like('surat_ke',$cari);
        }

        if(isset($bulan)){
            $builder->like('tgl_surat',$bulan);
        }

        if(isset($tahun)){
            $builder->like('tgl_surat',$tahun);
        }

        if (empty($sort) OR isset($sort) == 'latest') {
            $builder->orderBy('id_sk','DESC');
        }elseif (isset($sort) == 'oldest') {
            $builder->orderBy('id_sk','ASC');
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
                                <h4>'.$mail['surat_ke'].'</h4>
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
                'id_sk' => $surat['id_sk'],
                'surat_ke' => $surat['surat_ke'],
                'tgl_surat' => $surat['tgl_surat'],
                'no_surat' => $surat['no_surat'],
                'tgl_kirim' => $surat['tgl_kirim'],
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

    public function getData($limit, $type, $sort, $search = null, $kat1 = null, $kat2 = null,$bulan = null,$tahun = null) 
    {

        $builder = $this->select('
            id_sk,             
            surat_ke, 
            tgl_surat, 
            no_surat,
            tgl_kirim,
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
            $builder->Like('surat_ke', $search);
        }elseif (isset($kat1)) {
            $builder->where('kat1', $kat1);
        }
        
        if (empty($sort) OR $sort == 'latest') {
            $builder->orderBy('id_sk','DESC');
        }elseif ($sort == 'oldest') {
            $builder->orderBy('id_sk','ASC');
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
                'id_sk' => $surat['id_sk'],
                'surat_ke' => $surat['surat_ke'],
                'tgl_surat' => $surat['tgl_surat'],
                'no_surat' => $surat['no_surat'],
                'tgl_kirim' => $surat['tgl_kirim'],
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

    
    // detail
    public function detail($id_sk)
    {
        return $this->db->table('tb_sk')
        ->select('tb_sk.*')
        ->where('tb_sk.id_sk',$id_sk)
        ->get()->getRow();
    }

    // tambah
    public function tambah($data)
    {
        $builder = $this->db->table('tb_sk');
        $builder->insert($data);
    }

    // edit
    public function edit($data)
    {
        $builder = $this->db->table('tb_sk');
        $builder->where('id_sk',$data['id_sk']);
        $builder->update($data);
    }
}

?>