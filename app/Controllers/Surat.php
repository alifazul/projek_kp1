<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SuratM;
use App\Models\KategoriM;
use CodeIgniter\HTTP\Request;

class Surat extends BaseController
{

    public function index()
    {
        $id_user = session()->get('id_user');
        $level = session()->get('level');
        $surat = new SuratM();
        $kat = new KategoriM();
        if($level=='Admin'){
            $surats = $surat->getSuratAll();
        }elseif($level=='User'){
            $surats = $surat->getSuratIdUser($id_user)->orderBy('id_surat','DESC')->findAll();
        }
        $data = [
            'title'=> 'Tabel Surat',
            'nav'=>'nav_dash',
            'side'=>'sidebar',
            'side_surat'=>'active',
            'ket'=>'',
            'level'=>$level,
            'kat1'=>$kat->getKat1(),
            'kat2'=>$kat->getKat2(),
            'bulan' =>$surat->getMonth(),
            'tahun'=>$surat->getYear(),
            'surats'=> $surats
        ];
        
        return view('surat/tbl',$data);
    }

    public function masuk()
    {
        $id_user = session()->get('id_user');
        $level = session()->get('level');
        $surat = new SuratM();
        $kat = new KategoriM();
        if($level=='Admin'){
            $surat = $surat->getSurat();
        }elseif($level=='User'){
            $surat = $surat->getSuratIdUser($id_user);
        }
        $surats = $surat->where('tb_surat.ket','Masuk')->orderBy('id_surat','DESC')->findAll();
        $data = [
            'title'=> 'Tabel Surat',
            'nav'=>'nav_dash',
            'side'=>'sidebar',
            'side_masuk'=>'active',
            'ket'=>'masuk',
            'level'=>$level,
            'kat1'=>$kat->getKat1(),
            'kat2'=>$kat->getKat2(),
            'bulan' =>$surat->getMonth(),
            'tahun'=>$surat->getYear(),
            'surats'=> $surats
        ];
        
        return view('surat/tbl',$data);
    }

    function keluar(){
        $id_user = session()->get('id_user');
        $level = session()->get('level');
        $surat = new SuratM();
        $kat = new KategoriM();
        if($level=='Admin'){
            $surat = $surat->getSurat();
        }elseif($level=='User'){
            $surat = $surat->getSuratIdUser($id_user);
        }
        $surats = $surat->where('tb_surat.ket','Keluar')->orderBy('id_surat','DESC')->findAll();
        $data = [
            'title'=> 'Tabel Surat',
            'nav'=>'nav_dash',
            'side'=>'sidebar',
            'side_keluar'=>'active',
            'ket'=>'Keluar',
            'level'=>$level,
            'kat1'=>$kat->getKat1(),
            'kat2'=>$kat->getKat2(),
            'bulan' =>$surat->getMonth(),
            'tahun'=>$surat->getYear(),
            'surats'=> $surats
        ];
        
        return view('surat/tbl',$data);
    }

    public function add($ket){
        $kat = new KategoriM();
        if($ket=='masuk'){
            $data['side_masuk']='active';
        }elseif($ket=='keluar'){
            $data['side_keluar']='active';
        }
        $data['title']='Tambah Surat';
        $data['nav']='nav_dash';
        $data['side']='sidebar';
        $data['ket']=$ket;
        $data['kat1']=$kat->getKat1();
        $data['kat2']=$kat->getKat2();
        return view('surat/add',$data);
    }
    
    public function edit($ket,$id_surat){
        $kat = new kategoriM();
        $surat = new SuratM();
        $surats = $surat->detail($id_surat);
        $data = [
            'title'=> 'Edit Surat',
            'nav'=>'nav_dash',
            'side'=>'sidebar',
            'ket'=>$ket,
            'side_'.$ket=>'active',
            'kat1'=>$kat->getKat1(),
            'kat2'=>$kat->getKat2(),
            'surat'=>$surats,
        ];
        return view('surat/edit',$data);
    }

    public function simpan(){
       $surat = new SuratM();
       $file = $this->request->getFile('file');
       $ket = $this->request->getPost( 'ket');
       $fileName = $file->getClientName();
       $ex = explode('.',$fileName);
       array_pop($ex);
       $fn = implode('',$ex);
       if($file->isValid() && ! $file->hasMoved()){
        $file->move('uploads/',$fileName);
       }
       $cekter = $this->request->getPost('checkter');
       $arrayter = $this->request->getPost('terusan');
       $ter=array_intersect_key($arrayter,$cekter);
       $terusan = implode(';',$ter);
       //print($terusan);
       $cekti = $this->request->getPost('checktin');
       $arrayti = $this->request->getPost('tindakan');
       $ti=array_intersect_key($arrayti,$cekti);
       $tindakan = implode(';',$ti);
       //print($tindakan);
       $data = [
        'surat' => $this->request->getPost('surat'),
        'tgl_surat' => $this->request->getPost('tgl_surat'), 
        'no_surat' => $this->request->getPost('no_surat'),
        'tgl_terima' => $this->request->getPost('tgl_terima'),
        'no_agenda' => $this->request->getPost('no_agenda'),
        'sifat' => $this->request->getPost('sifat'),
        'kat1' => $this->request->getPost('kat1'),
        'kat2' => $this->request->getPost('kat2'),
        'perihal' => $this->request->getPost('perihal'),
        'terusan' => $terusan,
        'ket_terusan' => $this->request->getPost('ket_terusan'),
        'tindakan' => $tindakan,
        'ket_tindakan' => $this->request->getPost('ket_tindakan'),
        'catatan'=> $this->request->getPost( 'catatan'),
        'ket'=> $ket,
        'id_user'=>session()->get('id_user'),
        'file' => $fn,
       ];
       $surat->tambah($data);
       return redirect()->to('surat/'.$ket)->with('success','Data Surat Berhasil Ditambahkan');
    }



    // edit
    public function update($id_surat)
    {
        $surat = new SuratM();
        $ket =  $this->request->getPost('ket');
        $array_te = $this->request->getPost('terusan');
        $terusan['terusan'] = implode(';',$array_te);
        //print($terusan);
        $array_ti = $this->request->getPost('tindakan');
        $tindakan['tindakan'] = implode(';',$array_ti);
        //print($tindakan);
        $data = [
            'id_surat' => $id_surat,
            'surat' => $this->request->getPost('surat'),
            'tgl_surat' => $this->request->getPost('tgl_surat'), 
            'no_surat' => $this->request->getPost('no_surat'),
            'tgl_terima' => $this->request->getPost('tgl_terima'),
            'no_agenda' => $this->request->getPost('no_agenda'),
            'sifat' => $this->request->getPost('sifat'),
            'kat1' => $this->request->getPost('kat1'),
            'kat2' => $this->request->getPost('kat2'),
            'perihal' => $this->request->getPost('perihal'),
            'terusan' => $terusan,
            'ket_terusan' => $this->request->getPost('ket_terusan'),
            'tindakan' => $tindakan,
            'ket_tindakan' => $this->request->getPost('ket_tindakan'),
            'catatan'=> $this->request->getPost( 'catatan'),
        ];
        $surat->edit($data);
        return redirect()->to(base_url('surat/'.$ket))->with('success','Data Surat Berhasil Diubah');
    }

    public function updatefile($id_surat)
    {
        $surat = new SuratM();
        $file = $this->request->getFile('file');
        $ket =  $this->request->getPost('ket');
        if($file->isValid() && ! $file->hasMoved()){
            $fileName = $file->getClientName();
            $ex = explode('.',$fileName);
            array_pop($ex);
            $fn = implode('',$ex);
            $file->move('uploads/',$fileName);
            $detail = $surat->detail($id_surat);
            if(file_exists('uploads/'.$detail->file)){
                unlink('uploads/'.$detail->file);
            }
        }
        $data = [
            'id_surat' => $id_surat,
            'file'=>$fn,
        ];
        $surat->edit($data);
        return redirect()->to(base_url('surat/'.$ket))->with('success','Data Surat Berhasil Diubah');
    }
    // Delete
	public function delete($id_surat)
	{
        $surat = new SuratM();
        $data = $surat->detail($id_surat);
        if(file_exists('uploads/'.$data->file.'.pdf')){
            unlink('uploads/'.$data->file.'.pdf');
        }
        $surat->delete($id_surat);
        return redirect()->to(base_url('surat/'.$data->ket))->with('success','Data Surat Berhasil Dihapus ');
	}

}