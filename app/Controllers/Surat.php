<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SuratM;
use App\Models\UserM;
use CodeIgniter\HTTP\Request;

class Surat extends BaseController
{

    public function index()
    {
        $id_user = session()->get('id_user');
        $level = session()->get('level');
        $surat = new SuratM();
        if($level=='Admin'){
            $surats = $surat->getSurat()->findAll();
        }elseif($level=='User'){
            $surats = $surat->getSurat()->where('tb_surat.id_user',$id_user)->findAll();
        }
        $data = [
            'title'=> 'Tabel Surat',
            'nav'=>'nav_dash',
            'side'=>'sidebar',
            'side_surat'=>'active',
            'ket'=>'',
            'level'=>$level,
            'kat1'=>$surat->getKat1(),
            'kat2'=>$surat->getKat2(),
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
        if($level=='Admin'){
            $surats = $surat->getSurat();
        }else{
            $surats = $surat->getSurat()->where('tb_surat.id_user',$id_user);
        }
        $surats = $surat->where('tb_surat.ket','masuk')->findAll();
        $data = [
            'title'=> 'Tabel Surat',
            'nav'=>'nav_dash',
            'side'=>'sidebar',
            'side_sm'=>'active',
            'ket'=>'masuk',
            'level'=>$level,
            'kat1'=>$surat->getKat1(),
            'kat2'=>$surat->getKat2(),
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
        if($level=='Admin'){
            $surats = $surat->getSurat();
        }else{
            $surats = $surat->getSurat()->where('tb_surat.id_user',$id_user);
        }
        $surats = $surat->where('tb_surat.ket','keluar')->findAll();
        $data = [
            'title'=> 'Tabel Surat',
            'nav'=>'nav_dash',
            'side'=>'sidebar',
            'side_sk'=>'active',
            'ket'=>'keluar',
            'level'=>$level,
            'kat1'=>$surat->getKat1(),
            'kat2'=>$surat->getKat2(),
            'bulan' =>$surat->getMonth(),
            'tahun'=>$surat->getYear(),
            'surats'=> $surats
        ];
        
        return view('surat/tbl',$data);
    }

    public function add($ket){
        $surat = new SuratM();
        if($ket=='masuk'){
            $data['side_sm']='active';
        }elseif($ket=='keluar'){
            $data['side_sk']='active';
        }
        $data['title']='Tambah Surat';
        $data['nav']='nav_dash';
        $data['side']='sidebar';
        $data['ket']=$ket;
        $data['kat1']=$surat->getKat1();
        $data['kat2']=$surat->getKat2();
        return view('surat/add',$data);
    }
    
    public function edit($id_surat){
        $surat = new SuratM();
        $surats = $surat->detail($id_surat);
        $ket = $surat->ket;
        $data = [
            'title'=> 'Edit Surat',
            'nav'=>'nav_dash',
            'side'=>'sidebar',
            'ket'=>$ket,
            'side_surat'=>'active',
            'kat1'=>$surat->getKat1(),
            'kat2'=>$surat->getKat2(),
            'surat'=>$surats,
        ];
        return view('surat/edit',$data);
    }

    public function simpan($ket){
       $surat = new SuratM();
       $file = $this->request->getFile('file');
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
        'tindakan' => $tindakan,
        'catatan'=> $this->request->getPost( 'catatan'),
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
        /*
        $file = $this->request->getFile('file');
        if($file->isValid() && ! $file->hasMoved()){
            $fileName = $file->getClientName();
            $file->move('uploads/',$fileName);
        }
        unlink('uploads/'.$surat['file']);*/
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
            'tindakan' => $tindakan,
            'catatan'=> $this->request->getPost( 'catatan'),
        ];
        $surat->edit($data);
        return redirect()->to(base_url('surat/'.$ket))->with('success','Data Surat Berhasil Diubah');
    }

    // Delete
	public function delete($id_surat)
	{
        $surat = new SuratM();
        //$data = $surat->detail($id_surat);
        //unlink('uploads/'.$data->file);
        $surat->delete($id_surat);
        return redirect()->to(base_url('Surat'))->with('success','Data Surat Berhasil Dihapus ');
	}

}