<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SuratM;

class Surat extends BaseController
{

    public function index()
    {
        $surat = new SuratM();
        $data = [
            'title'=> 'Tabel Surat',
            'active1'=> 'active',
            'title2'=> 'Tabel Surat',
            'surat'=>$surat->getSurat()
        ];
        return view('tbl_surat',$data);
    }


    
    public function search()
    {
        $surat = new SuratM();
        $data = [
            'title'=> 'Search Surat',
            'title2'=> 'Search Surat',
            'kat1'=>$surat->AllKat1(),
            'kat2'=>$surat->AllKat2(),
            'surat'=>$surat->getSurat()
        ];
        /*
        if(!empty($_POST['sel_kat1'])){
            $this->db->table('tb_surat_masuk')->where('tb_surat_masuk',$_POST['sel_kat1']);
        }
        if(!empty($_POST['sel_kat2'])){
            $this->db->where('tb_surat_masuk',$_POST['sel_kat2']);
        }
        $result=$this->db->get('tb_surat_masuk')->result();
        */
        return view('search_surat',$data);
    }

    public function add(){
        $surat = new SuratM();
        $data = [
            'kat1'=>$surat->AllKat1(),
            'kat2'=>$surat->AllKat2(),
        ];
        return view('add_surat',$data);
    }
    
    public function detail($id_surat){
        $surat = new SuratM();
        $data = [
            'surat'=>$surat->detail($id_surat)
        ];
        return view('detail_surat',$data);
    }

    public function edit($id_surat){
        $surat = new SuratM();
        $data = [
            'kat1'=>$surat->AllKat1(),
            'kat2'=>$surat->AllKat2(),
            'surat'=>$surat->detail($id_surat)
        ];
        return view('edit_surat',$data);
    }

    public function simpan(){
       $surat = new SuratM();
       $file = $this->request->getFile('file');
       if($file->isValid() && ! $file->hasMoved()){
        $fileName = $file->getClientName();
        $file->move('uploads/',$fileName);
       }
       /*
       $array_te = $this->request->getPost('terusan');
       $terusan['terusan'] = implode(',',$array_te);
       //print($terusan);
       $array_ti = $this->request->getPost('tindakan');
       $tindakan['tindakan'] = implode(',',$array_ti);
       //print($tindakan);*/
       $data = [
        'surat_dari' => $this->request->getPost('surat_dari'),
        'tgl_surat' => $this->request->getPost('tgl_surat'), 
        'no_surat' => $this->request->getPost('no_surat'),
        'tgl_terima' => $this->request->getPost('tgl_terima'),
        'no_agenda' => $this->request->getPost('no_agenda'),
        'sifat' => $this->request->getPost('sifat'),
        'id_kat1' => $this->request->getPost('kat1'),
        'id_kat2' => $this->request->getPost('kat2'),
        'perihal' => $this->request->getPost('perihal'),
        'terusan' => $this->request->getPost('terusan'),
        'tindakan' => $this->request->getPost('tindakan'),
        'catatan'=> $this->request->getPost( 'catatan'),
        'file' => $fileName,
       ];
       $surat->tambah($data);
       return redirect()->to('surat')->with('success','Data Surat Berhasil Ditambahkan');
    }



    // edit
    public function update($id_surat)
    {
        $surat = new SuratM();
        $surat = $surat->detail($id_surat);
        $file = $this->request->getFile('file');
        if($file->isValid() && ! $file->hasMoved()){
            $fileName = $file->getClientName();
            $file->move('uploads/',$fileName);
        }
        /*
        $array_te = $this->request->getPost('terusan');
        $terusan['terusan'] = implode(',',$array_te);
        //print($terusan);
        $array_ti = $this->request->getPost('tindakan');
        $tindakan['tindakan'] = implode(',',$array_ti);
        //print($tindakan);*/
        $data = [
            'id_surat' => $id_surat,
            'surat_dari' => $this->request->getPost('surat_dari'),
            'tgl_surat' => $this->request->getPost('tgl_surat'), 
            'no_surat' => $this->request->getPost('no_surat'),
            'tgl_terima' => $this->request->getPost('tgl_terima'),
            'no_agenda' => $this->request->getPost('no_agenda'),
            'sifat' => $this->request->getPost('sifat'),
            'id_kat1' => $this->request->getPost('kat1'),
            'id_kat2' => $this->request->getPost('kat2'),
            'perihal' => $this->request->getPost('perihal'),
            'terusan' => $this->request->getPost('terusan'),
            'tindakan' => $this->request->getPost('tindakan'),
            'catatan'=> $this->request->getPost( 'catatan'),
            'file' => $fileName,
        ];
        $surat->edit($data);
        return redirect()->to(base_url('surat'));
    }

    // Delete
	public function delete($id_surat)
	{
        $surat = new SuratM();
        $data = $surat->detail_d($id_surat);
        unlink('uploads/'.$data['file']);
        $surat->delete($id_surat);
        return redirect()->to(base_url('Surat'))->with('success','Data Surat Berhasil Dihapus ');
	}

}